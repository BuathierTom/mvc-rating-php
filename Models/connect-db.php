<?php
require("./Models/config-db.php");

try{ 
    $PDO = new PDO("$DBDRIVER:host=$DBHOST;dbname=$DBNAME", $DBUSER, $DBPASSWORD);
    // echo "Connexion réussie";
}catch (PDOException $err) {
    $ERROR = 3;
    require("./Views/error.php");
    exit();
}
?>