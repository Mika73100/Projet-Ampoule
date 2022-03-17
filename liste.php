<?php

require_once 'connexion.php';

try{
    $prepare = $pdo->prepare("INSERT INTO exo 
    (date,etage,position,prix) VALUES (:date, :etage, :position, :prix)");

    $prepare->bindParam(':date', $_POST['date']);
    $prepare->bindParam(':etage', $_POST['etage']);
    $prepare->bindParam(':position', $_POST['position']);
    $prepare->bindParam(':prix', $_POST['prix']);
    $prepare->execute();

    header('Location:liste.php');

}catch(PDOException $e){
    echo "Erreur : " . $e->getMessage();
    }
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="./css/style.css">
    <title>Liste des ampoules'</title>
</head>

<body>
    <div class="container">
        <form action="liste.php" method="post">
            <div class="form-group">
                <label for="date">Date</label>
                <input type="date" class="form-control" name="date" placeholder="date">
            </div>


            
            <input type="checkbox" name="etage">
            <label for="etage" placeholder="1">1</label>

            <input type="checkbox" name="etage">
            <label for="etage" placeholder="2">2</label>



            <div class="form-group">
                <label for="position">Position</label>
                <input type="text" class="form-control" name="position" placeholder="position">
            </div>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" name="prix" placeholder="Prix">
            </div>            
                <button type="ajouter" action="liste.php" class="btn btn-primary mt-2">Ajouter</button>
                <button type="modifier" action="liste.php" class="btn btn-primary mt-2">Modifier</button>
                <button type="supprimer" action="liste.php" class="btn btn-primary mt-2">Supprimer</button>
            </div>
        </form>
    </body>
</html>