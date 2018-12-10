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

			</div>
		</main>
	</body>
</html>

