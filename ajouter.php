<?php

require_once 'connexion.php';


try{
    $prepare = $pdo->prepare("INSERT INTO users 
    (username,password) VALUES (:username, :password)");

    $prepare->bindParam(':username', $_POST['username']);
    $prepare->bindParam(':password', $_POST['password']);
    $prepare->execute();

    header('Location:liste.php');

}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>