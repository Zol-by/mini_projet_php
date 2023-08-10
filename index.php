    <!-- Créer par éloge -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
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

                <div class="col-lg-6 ">
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav">
                            <li class="nav-item me-2">
                                <a class="nav-link text-bg-dark rounded" href="index.php"><strong>ACCUIEL</strong></a>
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
                <h2><strong><u>BIENVENUE DANS LA GESTION DES APPRENANTS</u></strong></h2>
                <div class="navbar bg-danger text-center rounded">
                    <img src="images/classe.jpg" width="1075" height="500" class="rounded mx-auto d-block" alt="">
                </div>
            </div>
        </div>
    </div>
    </br>

    <!-- Page Footer -->
    <?php
	    include('footer.php');
    ?>
</body>

</html>