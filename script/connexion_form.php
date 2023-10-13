<?php
    session_start();
    require_once("request/bdd_connect.php");

    $email = $_POST["email"];
    $mdp = $_POST["password"];
    // $error="";
    
    // requête -> tout les informations utilisateur
    $request_info = "SELECT * FROM utilisateur WHERE email='$email' AND mot_de_passe='$mdp'";
    $connect_user = $connect->query($request_info);
    $row_user = $connect_user->fetch();

    if($row_user){
        $_SESSION["username"] = $row_user["nom_utilisateur"];
        header("Location: ../pages/index.php");
    }

    else {
        // reste sur la page en cas d'erreur
        $_SESSION["error"] = "Utilisateur Introuvable";
        // header("Location: ../pages/login.php");
        
    }

    // if ($email == $row_user["email"] && $mdp == $row_user["mot_de_passe"]){
    //     // $_SESSION["username"] = $row_user["nom_utilisateur"];
    //     header("Location : ../pages/seance.php");
    // }
    // 

?>