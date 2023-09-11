<?php

require "./Models/avis-modifier.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $listAvis = getAvisById($_REQUEST['id']);
    $id = $listAvis['id'];

    $departement = $_POST['departement'];
    $promo = $_POST['promo'];
    $module = $_POST['module'];
    $note = $_POST['note'];
    $commentaire = $_POST['commentaire'];
    $etudiant = $_POST['etudiant'];
    $date = $_POST['date'];
        
    if (empty($listAvis)) {
        // On affiche un message d'erreur
        $ERROR = 5;
        require "Views/error.php";
    } else {
        // On ajoute l'avis
        editAvis($id, $departement, $promo, $module, $note, $commentaire, $etudiant, $date);
        // On redirige vers la liste des avis
        header("location: index.php?controller=avis-lister");
    }
} else {
    // On affiche le formulaire
    require "Views/avis-modifier.php";

}





?>