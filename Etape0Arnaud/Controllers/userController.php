<?php 

    $uri = $_SERVER["REQUEST_URI"];
    if ($uri === "/connexion") {
        $title = "Connexion";
        $template = "Views/Users/connexion.php";
        require_once("Views/base.php");
    }
    elseif ($uri === "/deconnexion") {
        // voir + tard
    }
    elseif ($uri ==="/inscription") {
        $title = "inscription";
        $template = "Views/Users/inscriptionOrEditProfil.php";
        require_once("Views/base.php");
    }