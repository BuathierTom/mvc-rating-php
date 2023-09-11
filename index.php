<?php
    //Vérification des paramètres
    if (isset($_GET['controller']))  {
        if (file_exists("Controllers/" . $_GET['controller'] . ".php")){
            // CSS par default
            $style = 'default.css';
            if (file_exists("css/" . $_GET['controller'] . ".css")){
                $style = $_GET['controller'] . ".css";
            }
            // Titre par default
            $title = 'RATING';


            require "Controllers/" . $_GET['controller'] . ".php";
        }else{
            $ERROR = 1;
            require "Views/error.php";
        }
    }else{
        $ERROR = 2;
        require "Views/error.php";
    } 
?>
