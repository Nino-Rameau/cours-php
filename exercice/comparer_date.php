<?php
    $maintenant = new DateTime();
    $rendezVous = new DateTime('2026-03-20');

    $ecart = $maintenant->diff($rendezVous);

    $joursRestants = $ecart->days;

    // echo '<pre>';
    // print_r($ecart);
    // echo '</pre>';

    if ($ecart->invert === 1) {
        $balise = "<main class='text-gray-500 h-screen'><h1>Le rendez-vous est déjà passé.</h1></main>";
    } 
    elseif ($joursRestants <= 30) {
        $balise = "<main class='text-blue-500 h-screen'><h1>C'est bientôt ! (dans $joursRestants jours)</h1></main>";
    } 
    else {
        $balise = "<main class='text-red-500 h-screen'><h1>Il faudra patienter.</h1></main>";
    }
?>

<!DOCTYPE html>
    <html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Exercice Date</title>
        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
    </head>
    <body>
        <?php include "../components/header.php"; ?>
        <div class="bg-gray-200 p-4 mb-4">
            <p>Calculez le nombre de jours restant avant la sortie d'un film que vous attendez et affichez un message différent selon le résultat : </p>
            <ul>
                <li>Si c'est dans moins de 30 jours « C'est bientôt »,</li>
                <li>sinon « Il faudra patienter ». 
            </ul>
            <p>Le tout doit être intégré dans une page HTML soignée. Aucune donnée ne doit être écrite en dur si elle peut être calculée.</p>
        </div>
        <?php echo $balise; ?>
    </body>
</html>