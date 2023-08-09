    <!-- Créer par eloge -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <title>Mini Application PHP</title>
</head>

<body>
       <!-- Navigation -->
       <section class="container">
        <nav class="navbar navbar-expand-lg navbar-dark bg-danger static-top rounded">
            <div class="container">

                <div class="col-lg-3">
                    <a href="index.php"><img class="navbar-brand rounded mx-auto d-block" src="images/simplon.JPG" width="200" alt=""></a>
                </div>

                <div class="col-lg-6">
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link text-bg-dark rounded" href="index.php"><strong>ACCUIEL</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="liste_apprenant.php"><strong>LISTE DES APRENANTS</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="liste_tuteur.php"><strong>LISTE DES TUTAIRES</strong></a>
                            </li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-3">
                    <a href="index.php"><img class="navbar-brand rounded mx-auto d-block" src="images/logo_hcr.jpg" width="200" alt=""></a>
                </div>
            </div>
        </nav>
    </section>

    <!-- Page Contenu -->
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">
                <h2 class="mt-5"><strong><u>MODIFIER L'INFORMATION DE APPRENANT</u></strong></h2>
                <div class="card-body">
                    <?php

                        include 'connexion.php';

                        $pdoStat = $bdd->prepare('UPDATE apprenants set nom=:nom, prenom=:prenom, sexe=:sexe, 

                        date_naissance=:date_naissance, pays=:pays, formation=:formation, tuteur=:tuteur,
                        
                        telephone=:telephone WHERE id=:num LIMIT 1');

                        $pdoStat->bindvalue(':num', $_POST['numApprenant'], PDO::PARAM_INT);

                        $pdoStat->bindvalue(':nom', $_POST['nom'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':prenom', $_POST['prenom'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':sexe', $_POST['sexe'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':date_naissance', $_POST['date_naissance'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':pays', $_POST['pays'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':formation', $_POST['formation'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':tuteur', $_POST['tuteur'], PDO::PARAM_STR);

                        $pdoStat->bindvalue(':telephone', $_POST['telephone'], PDO::PARAM_INT);

                        $executeIsok = $pdoStat->execute();
                        

                        if ($executeIsok) {
                            echo
                            "
                                </br>
                                <div style='text-align: center'>
                                    <span class='alert alert-success' >
                                        <strong>
                                            L'information apprenant a été modifiée avec succès!!
                                        </strong>
                                    </span>
                                </div>";
                            } else {
                                    echo "
                            </br>
                            <div style='text-align: center'>
                                <span class='alert alert-danger' >
                                    <strong>
                                        Echec de modification de l'information de apprenant !!
                                    </strong>
                                </span>
                            </div>";
                        }
                        ?>
                </div>
            </div>
        </div>
    </div></br>

    <div style="height: 80px;"></div>

    <!-- Page Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>