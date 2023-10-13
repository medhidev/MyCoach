<?php
  // Accès à la BDD des comptes d'utilisateur
  $host = "localhost";
  $nomBdd = "mycoach";
  $login = "root";
  $passwordBdd = "";

  // Connection BDD
  try {
    $connect= new PDO("mysql:host=$host;dbname=$nomBdd;charset=utf8mb4",$login,$passwordBdd);
  }
  catch(Exception $e){
    die ("Connection Impossible avec '$host'".$e->getMessage());
  }
?>