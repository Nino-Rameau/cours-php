<?php
    session_start();

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: /exercice/formulaire/index.php");
        exit();
    }

    $sujetValides = ['question', 'remarque', 'probleme'];

    $nom = trim(htmlspecialchars($_POST['nom'] ?? ''));
    $email = trim(htmlspecialchars($_POST['email'] ?? ''));
    $sujet = trim(htmlspecialchars($_POST['sujet'] ?? ''));
    $message = trim(htmlspecialchars($_POST['message'] ?? ''));

    $errors = [];
    
    if ($nom === ''){
        $errors['nom'] = "Le nom est obligatoire.";
    }
    if ($email === '') {
        $errors['email'] = "L'email est obligatoire.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors['email'] = "L'email n'est pas valide.";
    }
    if ($sujet === '') {
        $errors['sujet'] = "Le sujet est obligatoire.";
    } elseif (!in_array($sujet, $sujetValides)) {
        $errors['sujet'] = "Le sujet inséré n'existe pas.";
    }
    if ($message === '') {
        $errors['message'] = "Le message est obligatoire.";
    }

    if ($errors !== []) {
        $_SESSION['errors'] = $errors;
        header("Location: /exercice/formulaire/index.php");
        exit();
    }

    $_SESSION['success'] = [
        "nom" => $nom,
        "email" => $email,
        "sujet" => $sujet,
        "message" => $message
    ];
    header("Location: /exercice/formulaire/index.php");
    exit();

?>