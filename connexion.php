<?php
session_start();
//je démarre une session pour utiliser la super globale $session


    $servname = "localhost";
    $dbname = "ampoule";
    $user = "root";
    $pass = "";
    
    

try{
$pdo = new PDO("mysql:host=$servname;dbname=$dbname", $user, $pass);
$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
$pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_ASSOC);}
catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }

    
    
?>