<?php

require_once 'connexion.php';


$prepare = $pdo->prepare("SELECT * FROM exo");
$prepare->execute();
$resultat = $prepare->fetchAll();

?>

<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="./css/style.css">
    <title>Dashbord</title>
</head>

<body>
    <script src="http://code.jquery.com/jquery-2.0.3.min.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <main>
        <div class="row">
            <section class="col-12">
                <table class="table">
                    <thead>
                        
                        <th>Date</th>
                        <th>Etage</th>
                        <th>Position</th>
                        <th>Prix</th>
                        <th><a href="liste.php"><button class="btn btn-success" >Ajouter</button></a>&nbsp;<button class="btn btn-warning" ><a href="index.php">Retour</a></button></th>
                        
                    </thead>
                    <tbody>
                        <?php
                        foreach ($resultat as $exo) {
                        ?>
                            <tr>
                                <td><?= $exo['id'] ?><br></td>
                                <td><?= $exo['date'] ?><br></td>
                                <td><?= $exo['etage'] ?><br></td>
                                <td><?= $exo['position'] ?><br></td>
                                <td><?= $exo['prix'] ?></td>                             
                                <td>

                                    <a href="details.php?id=<?= $exo['id'] ?>"><button class="btn btn-primary">Détails</button></a>

                                    <a href="supprimer.php?id=<?= $exo['id'] ?>"><button class="btn btn-danger" onclick="return confirm('Voulez-vous supprimer ?')">Supprimer</button></a>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </section>
        </div>
    </main>

    <?php
    if (isset($_SESSION['supprimer']) && $_SESSION['supprimer'] == true) { ?>
        <script type="text/javascript">
            $(function() {
                toastr.success(' <b>Changement supprimé !</b>', 'Supprimer', {
                    positionClass: "toast-top-full-width",
                    "closeButton": false,
                    "debug": false,
                    "newestOnTop": false,
                    "progressBar": true,
                    "positionClass": "toast-top-center",
                    "preventDuplicates": false,
                    "onclick": null,
                    "showDuration": "300",
                    "hideDuration": "1000",
                    "timeOut": "3000",
                    "extendedTimeOut": "1000",
                    "showEasing": "swing",
                    "hideEasing": "linear",
                    "showMethod": "fadeIn",
                    "hideMethod": "fadeOut"
                });
            });
        </script>
    <?php }
    $_SESSION['supprimer'] = false;
    ?>
    
</body>
</html>