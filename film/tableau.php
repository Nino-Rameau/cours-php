<div class="flex flex-col justify-center items-center ">
    <table class="border-collapse">
        <thead>
            <tr class="bg-gray-100">
                <th class="border border-gray-300 p-3 text-left font-bold">Titre</th>
                <th class="border border-gray-300 p-3 text-left font-bold">Réalisateur</th>
                <th class="border border-gray-300 p-3 text-left font-bold">Année</th>
                <th class="border border-gray-300 p-3 text-left font-bold">Genre</th>
                <th class="border border-gray-300 p-3 text-left font-bold">Note</th>
            </tr>
        </thead>
        <tbody>
            <?php
                include ('data.php');
                include ('fonction.php');

                for ($i = 0; $i < count($films); $i++) {
                    echo "<tr class='hover:bg-gray-50 transition-colors duration-150'>";
                        echo "<td class='border border-gray-300 p-3 text-left'>" . $films[$i]['titre'] . "</td>";
                        echo "<td class='border border-gray-300 p-3 text-left'>" . $films[$i]['realisateur'] . "</td>";
                        echo "<td class='border border-gray-300 p-3 text-left'>" . $films[$i]['annee'] . "</td>";
                        echo "<td class='border border-gray-300 p-3 text-left'>" . $films[$i]['genre'] . "</td>";
                        echo "<td class='border border-gray-300 p-3 text-left " . CouleurNote($films[$i]['note']) . "'>" . EtoileNote($films[$i]['note']) . "</td>";
                    echo "</tr>";
                }

                echo "<tr class='bg-gray-100 font-bold'>";
                    echo "<td colspan='3' class='border border-gray-300 p-3 text-left'>Moyenne générale</td>";
                    echo "<td colspan='2' class='border border-gray-300 p-3 text-left'>" . Moyenne($films) . " /5 </td>";
                echo "</tr>";

                echo "<tr class='bg-gray-100 font-bold'>";
                    echo "<td colspan='3' class='border border-gray-300 p-3 text-left'>Nombre de films par genre</td>";
                    echo "<td colspan='2' class='border border-gray-300 p-3 text-left'>" . NombreGenre($films) . "</td>";
                echo "</tr>";
            ?>
        </tbody>
    </table>
</div>