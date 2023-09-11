<?php

require("./Models/connect-db.php");
// Création d'une fonction qui va nous permettre d'ajouter des avis

function addAvis($departement, $promo, $module, $note, $commentaire, $etudiant, $date){
    try{
        global $PDO;

        $result = $PDO -> prepare("INSERT INTO avis (departement, promo, module, note, commentaire, etudiant, date) 
        VALUES (:departement, :promo, :module, :note, :commentaire, :etudiant, :date)");

        $result -> bindValue(':departement', $departement);
        $result -> bindValue(':promo', $promo);
        $result -> bindValue(':module', $module);
        $result -> bindValue(':note', $note);
        $result -> bindValue(':commentaire', $commentaire);
        $result -> bindValue(':etudiant', $etudiant);
        $result -> bindValue(':date', $date);

        // On exécute la requête
        $result -> execute();
        // On retourne le résultat
        return $result;

    } catch (PDOException $err) {
        // Requete invalide
        $ERROR = 4;
        require "Views/error.php";
    }
}








?>