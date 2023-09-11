<?php

$title = "Avis supprimer";
$style = "suppr.css";

$content = '<div>';

$content .= '<h1>Supprimer un avis</h1>';

$content .= '<form action="index.php?controller=avis-supprimer&id=' . $id . '" method="POST">';

$content .= '<p>Veuillez confirmer la suppression des données</p>';

$content .= '<input type="submit" value="Envoyer">';
$content .= '</form>';

$content .= '</div>';



require("./Views/gabgab.php")

?>