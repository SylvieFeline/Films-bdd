<form method="POST" action="index.php">

	<fieldset>
		<legend>Connexion à la base de donnée</legend>

		<label>Utilisateur : </label>
		<input type="text" name="user"> <br />

		<label>Mot de passe : </label>
		<input type="password" name="password"> <br/>

		<input type="hidden" name="nameBdd" value="mysql:dbname=filmBdd;host=127.0.0.1">

		<input type="submit" name="subm" value="Connexion">
	</fieldset>
	
</form>