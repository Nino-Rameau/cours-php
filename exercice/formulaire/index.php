<?php session_start(); ?>
<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Formulaire</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    </head>
    <body class="bg-gray-600">
        <?php include "../../components/header.php"; ?>
        <main>  
            <form method="POST" action="/exercice/formulaire/verifierFormulaire.php" class="max-w-md mx-auto mt-10 p-6 border rounded text-white">
                <input type="text" name="nom" placeholder="Nom" required class="border p-2 mb-4 w-full">
                <input type="email" autocomplete="email" name="email" placeholder="Email" required class="border p-2 mb-4 w-full">
                <select name="sujet" class="border p-2 mb-4 w-full" required>
                    <option value="question">Question</option>
                    <option value="remarque">Remarque</option>
                    <option value="probleme">Problème</option>
                </select>
                <textarea name="message" placeholder="Message" required class="border p-2 mb-4 w-full"></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Soumettre
                </button>
                <?php 
                    if (isset($_SESSION['errors'])) {
                        echo "<div class='mt-4 text-red-500'>";
                        foreach ($_SESSION['errors'] as $error) {
                            echo "<p>" . htmlspecialchars($error, ENT_QUOTES, 'UTF-8') . "</p>";
                        }
                        echo "</div>";
                        unset($_SESSION['errors']);
                    }
                    if (isset($_SESSION['success'])) {
                        echo "<div class='mt-4 text-green-500'>";
                        echo "<p>Formulaire soumis avec succès !</p>";
                        echo "</div>";
                        unset($_SESSION['success']);
                    }
                ?>
            </form>
        </main>
    </body>
</html>