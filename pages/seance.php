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
?>

<!-- Emploie du temps -->
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
                // script des séances du coach 
                include_once("../script/seance_table.php");
            ?>
        </tbody>
    </table>
</body>
</html>