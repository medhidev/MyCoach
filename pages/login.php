<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/login.css">
    <title>Connection</title>
</head>

<?php
    include_once("nav.php");
?>
<body>
    <form action="../script/connexion_form.php" method="post" id="formulaire_connexion">
        <table>
            <thead>
                <tr>
                    <th colspan="2">Compte myCoach</th>
                </tr>
            </thead>
            <tr id="email">
                <td>
                    adresse email
                </td>
                <td>
                    <input type="mail" name="email">
                </td>
            </tr>
            <tr id="mdp">
                <td>
                    mot de passe
                </td>
                <td>
                    <input type="password" name="password">
                </td>
            </tr>
            <tr>
                <th colspan="2">
                    <p>
                        <input type="submit" value="Connecter">
                    </p>
                </th>
            </tr>
        </table>
        <?php
            if(isset($_SESSION["error"]))
                echo $_SESSION["error"];
        ?>
    </form>
</body>
</html>