<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="./../css/style.css">
		<link rel="stylesheet" type="text/css" href="./../css/styleConnexion.css">
		<title></title>
	</head>

	<!-- 	/!\ à faire fonctionner /!\ 	-->


	<body>

		<?php include("./header.php"); ?>

		<div id="log">
			<fieldset>
				<legend>Connexion : </legend>

				<form method="post" action="./../index.php">
					<div>
						<label>Identifiant : </label>
						<input type="text" name="userbdd"> <br />
					</div>

					<div>
						<label>Mot de passe : </label>
						<input type="password" name="passbdd">
					</div>

					<div>
						<input type="submit" name="connexion" value="Connexion">
					</div>
				</form>
			</fieldset>
	
		</div>
	</body>
</html>

