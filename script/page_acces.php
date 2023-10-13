<?php
    require_once("connexion.php");
    require_once("request.php");
    session_start();

    $_SESSION["login"] = "utilisateur";

    $login = $_SESSION["login"];
    $mdp = $_SESSION["mdp"];

    if($login == $row_user){
        // si l'utilisateur existe afficher son nom
        header('Location: ../pages/seance.php');
    }
    else{
        header('Location: ../pages/login.php');
    }
?>