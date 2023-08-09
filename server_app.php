<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
        <title>Mini Application PHP</title>
    </head>
    <body>
        <?php
                include 'connexion.php';

                $nom = $_POST['nom'];

                $prenom = $_POST['prenom'];

                $sexe = $_POST['sexe'];

                $date_naissance = $_POST['date_naissance'];

                $pays = $_POST['pays'];

                $formation = $_POST['formation'];
                
                $tuteur = $_POST['tuteur'];

                $telephone = $_POST['telephone'];

                $req = $bdd->prepare('INSERT INTO apprenants (nom, prenom, sexe, date_naissance, pays, formation, tuteur, telephone) VALUES(?,?,?,?,?,?,?,?)');

                $req -> execute(array($nom, $prenom, $sexe, $date_naissance, $pays, $formation, $tuteur, $telephone));

                header('location:liste_apprenant.php');
        ?>
    </body>
</html>