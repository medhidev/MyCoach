<?php
    /* Toutes les requêtes du site */

    require_once("connexion.php");

    $request= "SELECT seance.NomSeance, seance.Difficulte, seance.Jour, seance.Heure_Debut, seance.Heure_Fin, lieu.NumSalle, lieu.Adresse, lieu.Ville, lieu.CodePostale, sport.NomSport
    FROM seance, lieu, sport
    WHERE lieu.NumSalle = seance.NumSalle AND seance.ID_seance = sport.ID_sport;";
    $connectBDD = $connect->query($request);
    $rowBDD = $connectBDD->fetch();
?>