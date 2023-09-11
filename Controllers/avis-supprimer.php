<?php

require "./Models/avis-supprimer.php";
    $id = $_REQUEST['id'];
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
        
    if (empty($id)) {
        // On affiche un message d'erreur
        $ERROR = 5;
        require "Views/error.php";
    } else {
        // On ajoute l'avis
        deleteAvis($id);
        // On redirige vers la liste des avis
        header("location: index.php?controller=avis-lister");
    }
} else {
    // On affiche le formulaire
    require "Views/avis-supprimer.php";
}



?>