<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Créer un compte</title>
</head>

<?php
    include_once("nav.php");
?>
<body>
    <form action="../php/script/formulaire.php" method="post" id="formulaire_connexion">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Créer mon Compte myCoach</th>
                </tr>
            </thead>
            <tr id="prenom">
                <td>
                    prenom
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr id="nom">
                <td>
                    nom
                </td>
                <td>
                    <input type="text">
                </td>
            </tr>
            <tr id="email">
                <td>
                    adresse email
                </td>
                <td>
                    <input type="mail">
                </td>
            </tr>
            <tr id="mdp">
                <td>
                    mot de passe
                </td>
                <td>
                    <input type="password">
                </td>
            </tr>
            <tr id="confirm_mdp">
                <td>
                    confirmer le mot de passe
                </td>
                <td>
                    <input type="password">
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <p>
                        <input type="submit" value="Créer">
                    </p>
                </th>
            </tr>
        </table>
    </form>
</body>
</html>