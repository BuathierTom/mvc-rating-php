<?php

require("./Models/connect-db.php");
// Création d'une fonction qui va nous permettre de supprimer des avis
function deleteAvis($id){
    try{
        // On fais la requete
        global $PDO;

        $result = $PDO -> prepare("DELETE FROM avis WHERE id = :id");

        $result -> bindParam(':id', $id);

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