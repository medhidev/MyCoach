<?php
    require_once("connexion.php");
    require_once("request.php");

    while($rowBDD != false){

        // Modification de l'enssemble des valeur à chaque tour de boucle
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

        // Affichage sur le site
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