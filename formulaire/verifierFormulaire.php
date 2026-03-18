<?php
    session_start();

    // echo "<pre>";
    // print_r($_POST);
    // echo "</pre>";

    if ($_SERVER['REQUEST_METHOD'] !== 'POST') {
        header("Location: /formulaire/index.php");
        exit();
    }

    $titre = trim(htmlspecialchars($_POST['titre'] ?? ''));
    $realisateur = trim(htmlspecialchars($_POST['realisateur'] ?? ''));
    $annee = trim(htmlspecialchars($_POST['annee'] ?? ''));
    $note = trim(htmlspecialchars($_POST['note'] ?? ''));
    $synopsis = trim(htmlspecialchars($_POST['synopsis'] ?? ''));

    $errors = [];
    
    if ($titre === ''){
        $errors['titre'] = "Le titre est obligatoire.";
    }
    if ($realisateur === '') {
        $errors['realisateur'] = "Le réalisateur est obligatoire.";
    }
    if ($annee === '') {
        $errors['annee'] = "L'année est obligatoire.";
    } elseif (!is_numeric($annee)) {
        $errors['annee'] = "L'année doit être un nombre.";
    } elseif ($annee < 1900 || $annee > date('Y')) {
        $errors['annee'] = "L'année doit être entre 1900 et " . date('Y') . ".";
    }
    if ($note === '') {
        $errors['note'] = "La note est obligatoire.";
    }
    if ($synopsis !== '' && strlen($synopsis) < 20) {
        $errors['synopsis'] = "Le synopsis doit contenir au moins 20 caractères.";
    }

    if ($errors !== []) {
        $_SESSION['errors'] = $errors;
        header("Location: /formulaire/index.php");
        exit();
    }

    $_SESSION['success'] = [
        "titre" => $titre,
        "realisateur" => $realisateur,
        "annee" => $annee,
        "note" => $note,
        "synopsis" => $synopsis
    ];
    header("Location: /formulaire/index.php");
    exit();

?>