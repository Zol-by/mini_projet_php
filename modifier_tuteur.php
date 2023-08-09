    <!-- Créer par eloge -->

<?php
    include 'connexion.php';

    $pdoStat = $bdd->prepare('SELECT * FROM tuteur WHERE id = :num');

    $pdoStat->bindvalue(':num', $_GET['numTuteur'], PDO::PARAM_INT);

    $executeIsok = $pdoStat->execute();

    $contact = $pdoStat->fetch();

?>
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
                <h2 class="mt-5"><strong><u>MODIFIER L'INFORMATION DE TUTEUR</u></strong></h2>
                <div class="card-body">
                    <form method="post" action="serv_mod_tuteur.php" >
                        <div class="row bg-danger text-center rounded">
                            <div class="form-group">
                                <input class="form-control" type="hidden" name="numTuteur" value="<?= $contact['id']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="firstName"></label>
                                <input type="text" class="form-control is-valid" name="nom" value="<?= $contact['nom']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="firstName"></label>
                                <input type="text" class="form-control is-valid" name="prenom" value="<?= $contact['prenom']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="firstName"></label>
                                <input type="text" class="form-control is-valid" name="sexe" value="<?= $contact['sexe']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="firstName"></label>
                                <input type="number" class="form-control is-valid" name="telephone" value="<?= $contact['telephone']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="addresse"></label>
                                <input type="email" class="form-control is-valid" name="email" value="<?= $contact['email']; ?>">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email"> </label>
                                <input type="text" class="form-control is-valid" name="grade" value="<?= $contact['grade']; ?>">
                            </div>

                        </div></br>

                        <div class="col-lg-12">
                            <button class="btn btn-danger" name="btn_save" type="submit"><strong>ENREGISTRER LA MODIFICATION</strong></button>
                        </div>
                    </form>
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