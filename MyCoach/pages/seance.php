<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/seance.css">
    <link rel="stylesheet" href="../css/style.css">
    <title>Seance - MyCoach</title>
</head>

<!-- Barre de Navigaton -->

<?php
    include_once("nav.php");
    require_once("../php/include/connexion.php");
    
    $request= "SELECT seance.NomSeance, seance.Difficulte, seance.Jour, seance.Heure_Debut, seance.Heure_Fin, lieu.NumSalle, lieu.Adresse, lieu.Ville, lieu.CodePostale, sport.NomSport
    FROM seance, lieu, sport
    WHERE lieu.NumSalle = seance.NumSalle AND seance.ID_seance = sport.ID_sport;";
    $connectBDD = $connect->query($request);
    $rowBDD = $connectBDD->fetch();
?>

<body>
    <table id="tableau">
        <thead>
            <tr>
                <th colspan="8">Calendrier</th>
            </tr>
        </thead>
        <tbody>
            <div id="Categorie_tableau">
                <tr>
                    <td>
                        <strong>Nom Seance</strong>
                    </td>
                    <td>
                        <strong>Difficulte seance</strong>
                    </td>
                    <td>
                        <strong>Jour</strong>
                    </td>
                    <td>
                        <strong>Heure debut seance</strong>
                    </td>
                    <td>
                        <strong>Heure fin seance</strong>
                    </td>
                    <td>
                        <strong>Numéro Salle</strong>
                    </td>
                    <td>
                        <strong>Lieu</strong>
                    </td>
                    <td>
                        <strong>Sport</strong>
                    </td>
                </tr>
            </div>
            <?php
                while($rowBDD != false){
                    $nomSeance = $rowBDD["NomSeance"];
                    $difficulte = $rowBDD["Difficulte"];
                    $jour = $rowBDD["Jour"];

                    $heure_deb = $rowBDD["Heure_Debut"];
                    $heure_fin = $rowBDD["Heure_Fin"];

                    $numSalle = $rowBDD["NumSalle"];
                    $adresse = $rowBDD["Adresse"];
                    $ville = $rowBDD["Ville"];
                    $codePostale = $rowBDD["CodePostale"];
                    $nomSport = $rowBDD["NomSport"];
                    echo "
                        <tr>
                            <td>
                                <!-- Nom Seance -->".
                                $nomSeance."
                            </td>
                            <td>
                                <!-- Difficulte seance -->".
                                $difficulte."
                            </td>
                            <td>
                                <!-- Jour -->".
                                $jour."
                            </td>
                            <td>
                                <!-- Heure debut seance-->".
                                $heure_deb."
                            </td>
                            <td>
                                <!-- Heure fin seance-->".
                                $heure_fin."
                            </td>
                            <td>
                                <!-- Numéro Salle -->
                                salle".$numSalle."
                            </td>
                            <td>
                                <!-- Adresse + Ville + Code Postale -->".
                                $adresse." ".$ville." ".$codePostale."
                            </td>
                            <td>
                                <!-- Sport -->".
                                $nomSport."
                            </td>
                        </tr>";
                    $rowBDD = $connectBDD->fetch();
                }
            ?>
        </tbody>
    </table>
</body>
</html>