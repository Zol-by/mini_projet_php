    <!-- Créer par milamem -->

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

                <div class="col-lg-6">
                    <div class="collapse navbar-collapse" id="navbarResponsive">
                        <ul class="navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link " href="index.php"><strong>ACCUIEL</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link text-bg-dark rounded" href="liste_apprenant.php"><strong>LISTE DES APRENANTS</strong></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="liste_tuteur.php"><strong>LISTE DES TUTEURS</strong></a>
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
                <h2 class="mt-5 text-center"><strong><u>LISTE DES APPRENANTS</u></strong></h2>
                <div class="card-body">
                    
                <div class="text-left">
                    <a href="formulaire_apprenant.php"><button type="button" class="btn btn-danger">Ajouter un apprenant</button></a>
                </div></br>

                <table class="table table-bordered">
                    <?php
                        include ("connexion.php");
                        $reponse = $bdd->query('SELECT * FROM apprenants ORDER BY id desc');

                        echo "
                            <tbody class='table-danger'>
                            <tr class='text-center'>
                                <th>Photo</th>
                                <th>Nom</th>
                                <th>Prénoms</th>
                                <th>Sexe</th>
                                <th>Date naissance</th>
                                <th>Pays</th>
                                <th>Formation</th>
                                <th>Tuteur</th>
                                <th>Téléphone</th>
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
                                    <td>" . $donnees['date_naissance'] . "</td>
                                    <td>" . $donnees['pays'] . "</td>
                                    <td>" . $donnees['formation'] . "</td>
                                    <td>" . $donnees['tuteur'] . "</td>
                                    <td>" . $donnees['telephone'] . "</td>

                                    <td>
                                        <a href='sup_apprenant.php?numApprenant=" . $donnees['id'] . "'><strong style='color: red'><img src='images/delet.jpg' width='28'  title='supprimer' alt=''></strong></a>
                                        <a href='modifier_apprenant.php?numApprenant=" . $donnees['id'] . "'><strong style='color: red'><img src='images/modifi.jpg' width='28' title='modifier' alt=''></strong></a>
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
