<?php
    require_once("bdd_connect.php");

    // requête -> emploie du temps
    $request_orga = "SELECT seance.NomSeance, seance.Difficulte, seance.Jour, seance.Heure_Debut, seance.Heure_Fin, lieu.NumSalle, lieu.Adresse, lieu.Ville, lieu.CodePostale, sport.NomSport
    FROM seance, lieu, sport
    WHERE lieu.NumSalle = seance.NumSalle AND seance.ID_seance = sport.ID_sport;";
    $connectBDD = $connect->query($request_orga);
    $rowBDD = $connectBDD->fetch();
?>