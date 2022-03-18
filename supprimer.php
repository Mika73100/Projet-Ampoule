<?php

require_once 'connexion.php';

$prepare = $pdo->prepare("SELECT * FROM exo WHERE 'id'= :id;'");
$prepare->execute();
$resultat = $prepare->fetch();



?>