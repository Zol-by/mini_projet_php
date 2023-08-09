    <!-- Créer par eloge -->

<!DOCTYPE HTML>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <script src="bootstrap/js/bootstrap.min.js"></script>
    <script src="bootstrap/js/bootstrap.bundle.js"></script>
    <title>Mini Application PHP</title>
</head>

<body>
      <?php

            include ("connexion.php");

        		$pdoStat = $bdd->prepare('DELETE FROM tuteur  WHERE id=:num LIMIT 1');

        		$pdoStat->bindValue(':num',$_GET['numTuteur'], PDO::PARAM_INT);

        		$executeIsok = $pdoStat->execute();

                header('location:liste_tuteur.php');

        ?>
</body>

</html>