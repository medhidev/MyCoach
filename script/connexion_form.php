<?php
    session_start();
    require_once("request/bdd_connect.php");

    $email = $_POST["email"];
    $mdp = $_POST["password"];
    
    // requête -> tout les informations utilisateur
    $request_info = "SELECT * FROM utilisateur WHERE email='$email' AND mot_de_passe='$mdp'";
    $connect_user = $connect->query($request_info);
    $row_user = $connect_user->fetch();

    if($row_user){
        $_SESSION["username"] = $row_user["nom_utilisateur"];
        header("Location: ../pages/seance.php");
    }

    else {
        // reste sur la page en cas d'erreur
        header("Location: ../pages/login.php?error=le nom est introuvable");
    }

?>