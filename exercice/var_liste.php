<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Variable site</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <main>
            <div class="bg-gray-200 p-4 mb-4 pl-10">
                <p> Créez des variables pour un film : titre, budget en millions d'euros, recettes au box-office en millions d'euros. </p>
                <p> Calculez le bénéfice ou la perte du film, puis le retour sur investissement en pourcentage. </p>
                <p> Avec des conditions, affichez une appréciation : </p>
                <ul>
                    <li>- si le retour dépasse 200% « Blockbuster »,</li>
                    <li>- entre 100% et 200% « Rentable »,</li>
                    <li>- entre 0% et 100% « Modeste »,</li>
                    <li>- en dessous de 0% « Flop ».</li>
                </ul>
                <p> Ajoute si possible du CSS pour améliorer l'affichage des éléments. </p>
            </div>
            <div class="pl-20">
                <?php
                    $titre = "Titre du film";
                    $budget = 10; 
                    $recettes = 30;
                    
                    $benefice = $recettes - $budget;
                    $roi = ($benefice / $budget) * 100;
                    
                    echo "<h2>$titre</h2>";
                    echo "<p>Budget : $budget millions d'euros</p>";
                    echo "<p>Recettes : $recettes millions d'euros</p>";
                    echo "<p>Bénéfice : $benefice millions d'euros</p>";
                    echo "<p>Retour sur investissement : <strong>" . round($roi, 2) . "%</strong></p>";
                    
                    if ($roi > 200) {
                        echo "<p class='text-green-500 font-bold'>Blockbuster</p>";
                    } elseif ($roi > 100) {
                        echo "<p class='text-blue-500 font-bold'>Rentable</p>";
                    } elseif ($roi > 0) {
                        echo "<p class='text-yellow-500 font-bold'>Modeste</p>";
                    } else {
                        echo "<p class='text-red-500 font-bold'>Flop</p>";
                    }
                ?>
            </div>
        </main>
        <footer>

        </footer>
    </body>
</html>