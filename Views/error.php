<?php
    require "./Views/config.php";
    $title = "Page Error";
    $style = 'error.css';

    $content = " ";
    if ($PROD) {
        $content .= "<h1>Erreur <h2 class='error'> Code d'erreur : <div> #$ERROR </div></h2>  <h2>Contacter : $WEBMST</h2></h1>";
    }else{
        $content .= "<h1>Erreur <h2 class='error'> Code d'erreur : <div> #$ERROR </div> <h2 class='error'> {$ERROR_MESS[$ERROR]} </h2></h2></h1>";
    }

require "gabgab.php";
?>