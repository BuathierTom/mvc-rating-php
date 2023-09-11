<?php
    $title = 'Avis Lister';

    $content = "<h1>Ceci est ma connection à la base de données</h1>";
    $content .= "<table>";

    $first = false;

    foreach ($avis as $vis => $value) {
        if (!$first) {
            $first = true;
            $content .= "<thead>";
            foreach ($value as $is => $val) {
                $content .= "<th>$is</th>";
            }
            $content .= "<th> Supprimer </th>";
            $content .= "<th> Modifier </th>";


            $content .= "</thead>";
        }

        $content .= "<tr>";
        foreach ($value as $is => $val) {
            
                $content .= "<th>$val</th>";
        }
        $content .= "<th><a class='' href='index.php?controller=avis-supprimer&id=" . $value['id'] . "'>suppr</a></th>";
        $content .= "<th><a href='index.php?controller=avis-modifier&id=" . $value['id'] . "'>modif</a></th>";
        $content .= "</tr>";
    }
    $content .= "</table>";

    require "gabgab.php";
?>