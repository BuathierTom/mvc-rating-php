<?php 
require("./Models/connect-db.php");

function getAvis(){
    global $PDO;

    $result = $PDO -> prepare("SELECT * FROM avis");

    $result -> execute();
    
    return $result->fetchAll( PDO::FETCH_ASSOC );
}

?>
