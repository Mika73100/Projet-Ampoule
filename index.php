<?php
require_once 'connexion.php';
 if (isset($_POST['submit'])) {

    echo 'salut';
    $username = $_POST['username'];
    $password = $_POST['password'];
    

    $sth = $pdo->prepare("INSERT * INTO users WHERE username= '$username'");
    $sth->execute();
    $resulte = $sth->fetch();

    print_r($resulte);
    if (password_verify($password, $resulte['password'])) {
        echo 'Le mot de passe est valide !';
    } else {
        echo 'Le mot de passe est invalide.';
    } 
} 
?>




<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!--<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">-->
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulaire d'inscription'</title>
</head>

<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="text" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>


            <button type="submit" action="affiche.php" name="submit" class="btn btn-primary mt-2">Connexion</button>

            <button type="submit" name="submit" action="affiche.php" class="btn btn-primary mt-2">Inscription</button>
    </div>
    </form>

    <?php

    $tableau = ['ampoule.gif', 'ampoule.gif', 'ampoule.gif'];
    $position = ['gauche', 'fond', 'droite'];
    ?>

    <div class="accueil">
        <div class="p1">
            <?php for ($i = 11; $i >= 0; $i--) { ?>
                <div class="p2">
                    <?php
                    foreach ($tableau as $key => $value) {
                    ?><a href="affiche.php"><?php
                                        echo "Etage $i $position[$key] :<img class='image' src='img/$value'>";
                                        ?></a><?php
                    } ?>
                </div>

            <?php } ?>


        </div>
    </div>
    <footer>


    </footer>
   

</body>

</html>