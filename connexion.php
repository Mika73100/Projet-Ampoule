<?php

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