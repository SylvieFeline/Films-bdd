<!DOCTYPE html>
<html>
	    <!-- Début en-tête-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./../css/style.css">
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

			<p>Genre : <?php echo $_POST['genre']; ?></p>

			<div id="filmPoster">
				<?php
					include("./../logbdd.php");
					$bdd = connectbdd();

					$requete = $bdd -> query('SELECT afficheFilm FROM film JOIN realise JOIN personne ON (film.idFilm = realise.idFilm AND realise.idPersonne = personne.idPersonne) WHERE nomPersonne LIKE "Brooks"');

					while ($data = $requete -> fetch())
					{
						echo '<h2>' . $data['nomFilm'] . '</h2>';
						echo '<img src="' . $data['afficheFilm'] . '" alt ="Affiche du film"/>';
					}

					$requete -> closeCursor();
				?>
			</div>
		</main>
	</body>
</html>

