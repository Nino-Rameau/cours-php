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
        <?php include "../components/header.php"; ?>
        <main>  
            <div class="bg-gray-200 p-4 mb-4 pl-10">
                <p> Créez un formulaire permettant d’ajouter un film avec : </p>
                <ul>
                    <li>Un titre obligatoire</li>
                    <li>Un réalisateur obligatoire</li>
                    <li>Une année entre 1900 et aujourd’hui obligatoire</li>
                    <li>Une note en boutons radio de 1 à 5 obligatoire</li>
                    <li>Une synopsis optionnel mais d’au moins 20 caractères s’il est renseigné.</li>
                </ul>
                <p>En cas d’erreur, les messages d'erreurs apparaissent  en rouge au dessus de son champs respectifs et les champs conservent leur valeur. </p>
                <p>Si tout est valide, un récapitulatif remplace le formulaire avec un message en vert qui annonce la réussite de la vérification du formulaire.</p>
            </div>

            <form method="POST" action="/formulaire/verifierFormulaire.php" class="max-w-4xl mx-auto mt-10 p-6 border rounded text-white">
                <input type="text" name="titre" placeholder="Titre du film" required class="border p-2 mb-4 w-full">
                <input type="text" name="realisateur" placeholder="Réalisateur du film" required class="border p-2 mb-4 w-full">
                <input type="number" name="annee" placeholder="Année du film (entre 1900 et 2026)" required class="border p-2 mb-4 w-full">
                
                <p>Note du film :</p>
                <div class="flex space-x-4 mb-4">
                    <div>
                        <input type="radio" name="note" value="1" required> 1
                    </div>
                    <div>
                        <input type="radio" name="note" value="2" required> 2
                    </div>
                    <div>
                        <input type="radio" name="note" value="3" required> 3
                    </div>
                    <div>
                        <input type="radio" name="note" value="4" required> 4
                    </div>
                    <div>
                        <input type="radio" name="note" value="5" required> 5
                    </div>
                </div>

                <textarea name="synopsis" placeholder="Synopsis" class="border p-2 mb-4 w-full" rows="4"></textarea>
                <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Envoyer
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