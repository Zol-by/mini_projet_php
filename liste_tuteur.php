    <!-- Créer par mohamed -->

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
                                <a class="nav-link" href="index.php"><strong>ACCUIEL</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="liste_apprenant.php"><strong>LISTE DES APRENANTS</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-bg-dark rounded" href="liste_tuteur.php"><strong>LISTE DES TUTEURS</strong></a>
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
            <div class="col-lg-12">
                <h2 class="mt-5 text-center"><strong><u>LISTE DES TUTEURS</u></strong></h2>
                <div class="card-body ">

                    <div class="text-left">
                        <a href="formulaire_tuteur.php">
                            <button type="button" class="btn btn-danger"> Ajouter un tuteur</button>
                        </a>
                    </div></br>

                    <table class="table table-bordered">
                        <?php
                            include ("connexion.php");
                            $reponse = $bdd->query('SELECT * FROM tuteur ORDER BY id desc');

                            echo "
                                <tbody class='table-danger'>
                                <tr class='text-center'>
                                    <th>photo</th>
                                    <th>Nom</th>
                                    <th>Prénoms</th>
                                    <th>Sexe</th>
                                    <th>Telephone</th>
                                    <th>E-mail</th>
                                    <th>Statut</th>
                                    <th>Opérations</th>
                                </tr>
                                </tbody>";

                            while ($donnees = $reponse->fetch()) {
                                echo "

                                    <tr class='text-center'>
                                    <td>
                                        <img src='images/default-avatar.PNG' width='50' alt=''>
                                    </td>
                                    <td>" . $donnees['nom'] . "</td>
                                    <td>" . $donnees['prenom'] . "</td>
                                    <td>" . $donnees['sexe'] . "</td>
                                    <td>" . $donnees['telephone'] . "</td>
                                    <td>" . $donnees['email'] . "</td>
                                    <td>" . $donnees['grade'] . "</td>
                                    <td>
                                        <a href='sup_tuteur.php?numTuteur=" . $donnees['id'] . "'><strong style='color: red'><img src='images/annuler.PNG' title='supprimer' alt=''></strong></a>
                                        <a href='modifier_tuteur.php?numTuteur=" . $donnees['id'] . "'><strong style='color: red'><img src='images/modifier.PNG' title='modifier' alt=''></strong></a>
                                    </td>
                                </tr>";
                            }
                        ?>

                    </table>
                </div>
            </div>

        </div>
    </div></br>

    <!-- Page Footer -->
    <?php
	    include('footer.php');
    ?>
</body>

</html>