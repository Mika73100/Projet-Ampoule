<?php

require'connexion.php';
print_r($_POST);
if (isset($_POST['inscription'])){

    $username = $_POST['username'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT) ;
    $phone = $_POST['phone'];
    
    
    $sql = "INSERT INTO users  (username, password, phone) VALUES (:username,:password,:phone)";

    $req = $pdo->prepare($sql);

        $req->bindParam(':username', $username);
        $req->bindParam(':password', $password);
        $req->bindParam(':phone', $phone);
        $req->execute();
        
        
        header("Location: affiche.php");
    }

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./css/style.css">

    <title>Inscription</title>
</head>


<body>
    <div class="container">
        <form action="" method="post">
            <div class="form-group">
                <label for="username">Username</label>
                <input type="username" class="form-control" name="username" placeholder="Username">
            </div>
            <div class="form-group">
                <label for="password">Password</label>
                <input type="password" class="form-control" name="password" placeholder="Password">
            </div>

            <div class="form-group">
                <label for="phone">Phone</label>
                <input type="tel" class="form-control" name="phone" placeholder="Phone">
            </div>


            <button type="submit" name="inscription" value="valeur" action="affiche.php" class="btn btn-primary mt-2">Inscription</button>
    </div>
    </form>
</div>
</body>
</html>