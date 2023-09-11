<?php
    require "./Models/avis-lister.php";

    $avis = getAvis();

    require "./Views/avis-lister.php";
?>