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

                $telephone = $_POST['telephone'];
                
                $email = $_POST['email'];

                $grade = $_POST['grade'];

                $req = $bdd->prepare('INSERT INTO tuteur (nom, prenom, sexe, telephone, email, grade) VALUES(?,?,?,?,?,?)');

                $req -> execute(array($nom, $prenom, $sexe, $telephone, $email, $grade));

                header('location:liste_tuteur.php');
        ?>
    </body>
</html>