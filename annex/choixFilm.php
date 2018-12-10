<!DOCTYPE html>
<html>
	    <!-- Début en-tête-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./../css/style.css">
        <link rel="stylesheet" href="./../css/styleChoixFilm.css">
        <title><?php echo "nameFilm"; ?></title>
    </head>

	<header>
	    <img src="./../images/entete2.png" alt="Titre des D Codeurs du Lac" class="banner" /> <br />

	    <div>
	        <a href="./recherche.php"><img src="./../images/ETmaison.png" alt="Retour maison" class="backHouse" title="Retour à l'acceuil"></a> 
	    </div>

	</header>

	<body>
		<main>
			<h1>Votre recherche</h1>

				<div>
					
					<?php
						include("./../request/logbdd.php"); 
						if (!empty($_POST['film']))
						{
							echo "Titre : " . $_POST['film'] . "<br />";
						}


						if (!empty($_POST['acteur']))
						{
							echo "Acteur : " . $_POST['acteur'] . "<br />";
						}

						if (!empty($_POST['genre']))
						{
							echo "Genre : " . $_POST['genre'] . "<br />";
						}

						if (!empty($_POST['realisateur']))
						{
							echo "Réalisateur : " . $_POST['realisateur'] . "<br />";
						}

						if (!empty($_POST['socProd']))
						{
							echo "Société de production : " . $_POST['socProd'] . "<br />";
						}

						if (!empty($_POST['pays']))
						{
							echo "Pays : " . $_POST['pays'] . "<br />";
						}

						if (!empty($_POST['annee']))
						{
							echo "Annee : " . $_POST['annee'] . "<br />";
						}

						if (!empty($_POST['motsCles']))
						{
							echo "Mot-clé : " . $_POST['motsCles'] . "<br />";
						}


						
					?>

				</div>


			<div id="filmPoster">
				<?php 

					if (isset($_POST['submRecherche']))
					{
						$requete = "SELECT nomFilm, afficheFilm FROM `film` JOIN `est` JOIN `genre` ON (film.idFilm = est.idFilm AND est.idGenre = genre.idGenre) WHERE nomGenre LIKE '" . $_POST['genre'] . "'";

						$bdd = connectbdd();

						$req = $bdd->query($requete);

						while($data = $req->fetch())
						{
							echo "<img src='" . $data['afficheFilm'] . "'/>" . "<br />";
						}
					}
				?>
			</div>
		</main>
	</body>
</html>

