<?php

require_once 'connexion.php';

if (isset($_POST['ajouter'])) {
    try {
        $prepare = $pdo->prepare("INSERT INTO exo 
    (date,etage,position,prix) VALUES (:date, :etage, :position, :prix)");

        $prepare->bindParam(':date', $_POST['date']);
        $prepare->bindParam(':etage', $_POST['etage']);
        $prepare->bindParam(':position', $_POST['position']);
        $prepare->bindParam(':prix', $_POST['prix']);
        $prepare->execute();

        header('Location:liste.php');
    } catch (PDOException $e) {
        echo "Erreur : " . $e->getMessage();
    }
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

            <div class="form-group">
                <label for="select">Selection de l'étage</label>
                <select name="etage">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3">3</option>
                    <option value="4">4</option>
                    <option value="5">5</option>
                    <option value="6">6</option>
                    <option value="7">7</option>
                    <option value="8">8</option>
                    <option value="9">9</option>
                    <option value="10">10</option>
                    <option value="11">11</option>
                </select>
            </div>

            <div class="form-group">
                <label for="select">Sélection de l'espace</label>
                <select name="position">
                    <option value="droite">Droite</option>
                    <option value="au fond">Au fond</option>
                    <option value="gauche">Gauche</option>
                </select>
            </div>

            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" class="form-control" name="prix" placeholder="Prix">
            </div>
            
            <button name="ajouter" type="ajouter" action="liste.php" class="btn btn-primary mt-2">Ajouter</button>


</form>
</body>
<a class="btn btn-primary mt-2" href="affiche.php" role="button">Dashbord</a>
</html>