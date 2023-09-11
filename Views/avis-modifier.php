<?php

$title = 'Modifier un avis';
$style = 'avis.css';

$listAvis = getAvisById($_REQUEST['id']);


$id = $listAvis['id'];
$departement = $listAvis['departement'];
$promo = $listAvis['promo'];
$module = $listAvis['module'];
$note = $listAvis['note'];
$commentaire = $listAvis['commentaire'];
$etudiant = $listAvis['etudiant'];
$date = $listAvis['date'];



$content = "<h1>Formulaire de modification</h1>";

$content .= '<form action="index.php?controller=avis-modifier&id='.$id.'" method="POST">';

    $content .= '<label for="departement">Département :</label>';
    $content .= '<input type="text" name="departement" placeholder ="Entrer votre département" value="'. $departement .'"><br>';

    $content .= '<label for="promo">Promotion :</label>';
    $content .= '<input type="text" name="promo" placeholder ="Entrer votre promotion" value="'. $promo .'"><br>';

    $content .= '<label for="module">Module :</label>';
    $content .= '<input type="text" name="module" placeholder ="Entrer votre module" value="'. $module .'"><br>';    

    $content .= '<label for="note">Note :</label>';
    $content .= '<input type="text" name="note" placeholder ="Entrer votre note" value="'. $note .'"><br>';

    $content .= '<label for="commentaire">Commentaire :</label>';
    $content .= '<input type="text" name="commentaire" placeholder ="Entrer votre commentaire" value="'. $commentaire .'"><br>';

    $content .= '<label for="etudiant">Étudiant :</label>';
    $content .= '<input type="text" name="etudiant" placeholder ="Entrer votre nom ou prénom" value="'. $etudiant .'"><br>';

    $content .= '<label for="date">Date :</label>';
    $content .= '<input type="date" name="date" value="'. $date .'"><br>';

    $content .= '<input type="submit" value="Modifier">';
$content .= '</form>';
	


require "gabgab.php";

?>