<?php 

require_once 'connexion.php';

$prepare = $pdo->prepare("SELECT * FROM exo");
$prepare->execute();

$resultat = $prepare->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i <count($resultat); $i++){
    echo $resultat[$i]['date'].'<br>';
    echo $resultat[$i]['id'].'<br>';
    echo $resultat[$i]['etage'].'<br>';
    echo $resultat[$i]['position'].'<br>';
    echo $resultat[$i]['prix'].'<br>';

    //ici le lien supprimer
    echo '<form action="delete.php" method="get">'. $resultat[$i]['username'].
    '<button name="id" value='.$resultat[$i]["id"].'>Supprimer</button></form>';

    //afficher le contact
    echo '<form action="affiche.php" method="get">'. $resultat[$i]['username'].
    '<button name="id" value='.$resultat[$i]["id"].'>Afficher</button></form>';

    //modifier le contact
    echo '<form action="modifier.php" method="get">'. $resultat[$i]['username'].
    '<button name="id" value='.$resultat[$i]["id"].'>Modifier</button></form>';
}
?>