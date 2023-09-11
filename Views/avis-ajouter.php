<?php

$title = 'Ajouter un avis';
$style = 'avis.css';


$content = "<h1>Formulaire d'ajout</h1>";

$content .= '<form action="index.php?controller=avis-ajouter" method="POST">';

    $content .= '<label for="departement">Département :</label>';
    $content .= '<input type="text" name="departement" placeholder ="Entrer votre département : (Ex: GEAA, GEI)"><br>';

    $content .= '<label for="promo">Promotion :</label>';
    $content .= '<input type="text" name="promo" placeholder ="Entrer votre promotion : (Ex: 2022)"><br>';

    $content .= '<label for="module">Module :</label>';
    $content .= '<input type="text" name="module" placeholder ="Entrer votre module : (Ex: PHP, Java)"><br>';    

    $content .= '<label for="note">Note :</label>';
    $content .= '<input type="text" name="note" placeholder ="Entrer votre note : (Ex: De 0 à 5)"><br>';

    $content .= '<label for="commentaire">Commentaire :</label>';
    $content .= '<input type="text" name="commentaire" placeholder ="Entrer votre commentaire"><br>';

    $content .= '<label for="etudiant">Étudiant :</label>';
    $content .= '<input type="text" name="etudiant" placeholder ="Entrer votre nom ou prénom"><br>';

    $content .= '<label for="date">Date :</label>';
    $content .= '<input type="date" name="date"><br>';

    $content .= '<input type="submit" value="Envoyer">';
$content .= '</form>';
	





require "gabgab.php";

?>