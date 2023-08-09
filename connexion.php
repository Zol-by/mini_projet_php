    <!-- Créer par eloge -->

<?php
    try 
	{
		$pdo_options[PDO::ATTR_ERRMODE]= PDO::ERRMODE_EXCEPTION;
		$bdd = new PDO('mysql:host=127.0.0.1; dbname=bd_php','root','');
		$bdd->setAttribute(PDO::ATTR_CASE, PDO::CASE_LOWER);
		$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
		
	} catch (PDOException $e) 
	{
		die('Erreur :'.$e->getMessage());
 	}
?>