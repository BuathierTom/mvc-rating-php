<?php

require("./Models/connect-db.php");

// Création d'une fonction qui va nous permettre de modifier des avis

function editAvis($id, $departement, $promo, $module, $note, $commentaire, $etudiant, $date){
    try{
        global $PDO;

        // On prépare la requête
        $result = $PDO -> prepare("UPDATE avis SET departement = :departement, promo = :promo, module = :module, note = :note, commentaire = :commentaire, etudiant = :etudiant, date = :date WHERE id = :id");

        $result -> bindValue(':id', $id);
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

function getAvisById($id){
    try{
        global $PDO;

        $result = $PDO -> prepare("SELECT * FROM avis WHERE id = :id");

        $result -> bindValue(':id', $id);

        // On exécute la requête
        $result -> execute();

        // On retourne le résultat
        return $result -> fetch();

    } catch (PDOException $err) {
        // Requete invalide
        $ERROR = 4;
        require "Views/error.php";
    }
}









?>
