<?php
	function connectBdd()
	{
		$dbn = "mysql:dbname=filmBdd;host=127.0.0.1";
		$user = "dcl.edainsv";
		$pass = "TPdev_log";

		// $user = $_POST['userbdd'];
		// $pass = $_POST['passbdd'];

		try
		{
			$bdd = new PDO($dbn, $user, $pass);
			echo "Tu es connecté";	

		}
		catch (PDOException $e)
		{
			echo "Connexion à la base de donnée échouée : " . $e->getMessage();
		}

		return $bdd;
	}

?>

