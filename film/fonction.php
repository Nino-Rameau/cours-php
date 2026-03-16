<?php
    function CouleurNote($note) {
        if ($note >= 4) {
            return "text-green-400";
        } elseif ($note >= 2) {
            return "text-orange-400";
        } else {
            return "text-red-400";
        }
    }

    function Moyenne($films) {
        $total = 0;
        for ($i = 0; $i < count($films); $i++) {
            $total += $films[$i]['note'];
        }
        return $total / count($films);
    }

    function NombreGenre($films) {
        $genres = [];
        for ($i = 0; $i < count($films); $i++) {
            if (isset($genres[$films[$i]['genre']])) {
                $genres[$films[$i]['genre']]++;
            } else {
                $genres[$films[$i]['genre']] = 1;
            }
        }
        $result = "";
        foreach ($genres as $genre => $count) {
            $result .= "$genre: $count <br>";
        }
        return $result;
    }


    function EtoileNote($note) {
        $etoiles = "";
        for ($i = 0; $i < 5; $i++) {
            if ($note >= 1) {
                $etoiles .= "★";
                $note--;
            } else {
                $etoiles .= "☆";
            }
        }
        return $etoiles;
    }

?>  