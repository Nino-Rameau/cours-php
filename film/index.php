<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Boucle et fonction</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <main>
            <div class="bg-gray-200 p-4 mb-4 pl-10">
                <p> OBJECTIFS : </p>
                <ul>
                    <li>Stocker des films dans un tableau PHP et les afficher dynamiquement</li>
                    <li>- Utiliser conditions, boucles et fonctions</li>
                    <li>- Organiser le code en plusieurs fichiers</li>
                </ul>
                <p>
                    Créez un tableau associatif contenant au moins 8 films, chacun avec un titre, un réalisateur, une année, un genre et une note sur 5. 
                </p>
                <p>
                    Affichez-les dans un tableau HTML avec un code couleur selon la note, des étoiles visuelles proportionnelles, la moyenne générale en bas de page, et le nombre de films par genre. 
                </p>
                <p>
                    Le tout doit utiliser des fonctions dédiées et être séparé en au moins quatre fichiers.
                </p>
            </div>
            <?php
                include('data.php');

                include('tableau.php');
            ?>
        </main>
        <footer>

        </footer>
    </body>
</html>