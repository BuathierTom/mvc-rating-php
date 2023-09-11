<?php

require "./Models/avis-ajouter.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // On récupère les données du formulaire
    $departement = $_POST['departement'];
    $promo = $_POST['promo'];
    $module = $_POST['module'];
    $note = $_POST['note'];
    $commentaire = $_POST['commentaire'];
    $etudiant = $_POST['etudiant'];
    $date = $_POST['date'];

    // On vérifie que les champs ne sont pas vides
    if (empty($departement) || empty($promo) || empty($module) || empty($note) || empty($commentaire) || empty($etudiant) || empty($date)) {
        // On affiche un message d'erreur
        $ERROR = 5;
        require "Views/error.php";
    } else {
        // On ajoute l'avis
        addAvis($departement, $promo, $module, $note, $commentaire, $etudiant, $date);
        // On redirige vers la liste des avis
        header("location: index.php?controller=avis-lister");
    }
} else {
    // On affiche le formulaire
    require "Views/avis-ajouter.php";
}








?>