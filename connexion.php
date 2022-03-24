<?php
session_start();
//je démarre une session pour utiliser la super globale $session


    $servname = "localhost";
    $dbname = "ampoule";
    $user = "root";
    $pass = "";

    

try{
$pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }

    
    
?>