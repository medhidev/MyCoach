<link rel="stylesheet" href="../css/nav.css">

<!-- Barre de navigation -->
<header>
    <nav>
        <ul style="display: flex; align-items: center; justify-content: space-evenly;">
            
            <div id="home_icon">
                    <!-- LOGO -->
                    <a href="index.php" id="logo">
                        <img src="../images/logo.jpg" alt="logo" width="200px">
                    </a>
            </div>
            <!-- <li id="contact">
                Contacter le Coach
                <a href="#" style="padding-left: 5%;">Contact</a>
            </li> -->
            <li id="cours">
                <!-- Emploie du temps des séances -->
                <a href="seance.php">Seance</a>
            </li>
            <li id="profil">
                <!-- Nom profil -->
                <?php
                    if(session_status() != PHP_SESSION_ACTIVE){
                        session_start();
                        if(isset($_SESSION["username"]))
                            echo "<strong style='color:white; font-size:25px;'>".strtoupper($_SESSION["username"])."</strong>";
                        else
                            echo "<strong style='color:white; font-size:25px;'>"."INVITE"."</strong>";
                    }
                ?>
            </li>
            <div id="login_btn">
                <li id="login">
                    <!-- Formulaire inscription / connexion -->
                    <?php
                        if(isset($_SESSION["username"])){
                            echo "<a href='../script/logout.php'>Deconnexion</a>";
                        }
                        else
                            echo "<a href='login.php'>Connecter</a>";
                    ?>
                </li>
            </div>
        </ul>
    </nav>
</header>
