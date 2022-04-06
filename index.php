<?php
require_once 'connexion.php';


if (isset($_POST['submit'])) {

    $_SESSION['username'] = $_POST['username'];
    $_SESSION['password'] = $_POST['password'];
    $password = $_POST['password'];
    $username = $_POST['username'];

    $sth = $pdo->prepare("SELECT * FROM users WHERE username= '$username'");
    $sth->execute();
    $resulte = $sth->fetch();

    if (password_verify($password, $resulte['password'])) {
        echo 'Le mot de passe est valide !';
        header('Location:affiche.php');
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
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Formulaire d'inscription'</title>
</head>

<body>
<script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
<script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

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



            <button href="affiche.php" type="submit" action="affiche.php" name="submit" class="btn btn-primary mt-2">connexion</button>

            <button type="submit" action="affiche.php" name="submit" class="btn btn-primary mt-2"><a href="inscription.php">Inscription</a></button>

            
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
                                        echo "Etage $i $position[$key] :<img class='image' src='img/$value'>&nbsp;";
                                        ?></a>&nbsp;&nbsp;&nbsp;<?php
                    } ?>
                </div>

            <?php } ?>


        </div>
    </div>
<footer>


</footer>
</body>
</html>