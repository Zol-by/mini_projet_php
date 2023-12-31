    <!-- Créer par milamem -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <title>Annuaire des Apprenants</title>
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
                            <li class="nav-item active me-2">
                                <a class="nav-link text-bg-light rounded" href="index.php"><strong>ACCUIEL</strong></a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link text-bg-light rounded" href="liste_apprenant.php"><strong>LISTE DES APRENANTS</strong></a>
                            </li>
                            <li class="nav-item me-2">
                                <a class="nav-link text-bg-light rounded" href="liste_tuteur.php"><strong>LISTE DES TUTEURS</strong></a>
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
                <h2 class="mt-5"><strong>FORMULAIRE D'ENREGISTREMENT DES APPRENANTS</strong></h2>
                <div class="card-body">
                    <form method="post" action="server_app.php">
                        <div class="row bg-danger text-center rounded">
                            <div class="col-md-6 mb-3">
                                <label for="firstName"></label>
                                <input type="text" class="form-control is-valid" name="nom" placeholder="Votre nom" required="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="firstName">s</label>
                                <input type="text" class="form-control is-valid" name="prenom" placeholder="Votre prénom" required="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="country"></label>
                                <select class="form-control is-valid" name="sexe" required="">
                                    <option value="">Choisissez le sexe</option>
                                    <option>homme</option>
                                    <option>femme</option>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email"></label>
                                <input type="date" class="form-control is-valid" name="date_naissance" title="Votre date naissance" required="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="addresse"></label>
                                <input type="text" class="form-control is-valid" name="pays" placeholder="Votre pays" required="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="email"> </label>
                                <input type="text" class="form-control is-valid" name="formation" placeholder="Votre formation" required="">
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="country"></label>
                                <?php

                                include 'connexion.php';

                                $reponse = $bdd->query('SELECT nom, prenom FROM tuteur ORDER BY id desc ');
                                ?>
                                <select type="text" name="tuteur" title="Choisissez le tuteur" class="form-control is-valid">
                                    <option>Choisissez le tuteur...</option>
                                    <?php while ($d = $reponse->fetch()) { ?>
                                        <option><?= $d['nom'] ?> <?= $d['prenom'] ?></option>

                                    <?php  } ?>
                                </select>
                            </div>

                            <div class="col-md-6 mb-3">
                                <label for="firstName"></label>
                                <input type="number" class="form-control is-valid" name="telephone" placeholder="Votre numéro téléphone" required="">
                            </div>
                        </div></br>

                        <div class="col-lg-12">
                            <button type="button" class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#exampleModal"><strong>ENREGISTRER</strong></button>
                        </div>

                        <!-- Modal"  -->

                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h1 class="modal-title fs-5" id="exampleModalLabel"><strong>CONFIRMATION D'ENREGISTREMENT</strong></h1>
                                        <button type="button" class="btn-close " data-bs-dismiss="modal" aria-label="Close "></button>
                                    </div>
                                    <div class="modal-body">
                                        <p>Voulez-vous enregistrer cette personne sur la liste des apprenants ?</p>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-danger" data-bs-dismiss="modal">Fermer</button>
                                        <button name="btn_save" type="submit" class="btn btn-primary">Valider</button>
                                    </div>
                                </div>
                            </div>
                        </div> 
                    </form>
                </div>
            </div>
        </div>
    </div></br>

    <div style="height: 5px;"></div>

    <!-- Page Footer -->

    <!-- Page Footer -->
    <?php
    include('footer.php');
    ?>
</body>

</html>
