<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

<?php
	
	function afficheFilm() // Affiche les affiches de films existants dans la BDD //
	{
		$bdd = connectbdd();
    	$requete = $bdd -> query('SELECT afficheFilm from film where nomFilm like "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<img src="'. $data['afficheFilm'] . '" id="affiche">';
		}

	}

	function resume() // Affiche les resumés de films existants dans la BDD //
	{
		$bdd = connectbdd();
    	$requete = $bdd -> query('SELECT resumeFilm from film where nomFilm like "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{
			echo '<textarea class="resume">'.$data['resumeFilm'].'</textarea>';
		}

	}

	function titre(){ //Affiche le titre du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT nomFilm FROM film where nomFilm like "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<h2>'.$data['nomFilm'].'</h2>';
		}
	}

	function anneeFilm(){ // affiche l'année du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT anneeFilm FROM film where nomFilm like "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['anneeFilm'].'</h3>';
		}
	}

	function dureeFilm(){ // affiche la durée du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT dureeFilm FROM film where nomFilm like "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['dureeFilm'].' minutes</h3>';
		}
	}

	function genreFilm(){ // affiche le genre du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT nomGenre FROM film JOIN est JOIN genre ON (film.idFilm = est.idFilm AND est.idGenre = genre.idGenre) WHERE nomFilm LIKE "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['nomGenre'].'</h3>';
		}
	}

	function paysFilm(){ // affiche le pays du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT nomPays FROM film JOIN vient_De JOIN pays ON (film.idFilm = vient_De.idFilm AND vient_De.idPays = pays.idPays) WHERE nomFilm LIKE "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['nomPays'].'</h3>';
		}
	}

	function acteurFilm(){ // affiche les acteurs du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT prenomPersonne, nomPersonne, nomPays FROM film JOIN joue JOIN personne JOIN pays ON (film.idFilm = joue.idFilm AND joue.idPersonne = personne.idPersonne and personne.idPays = pays.idPays) WHERE nomFilm LIKE "Le Roi Lion"');
		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['prenomPersonne'].' '.$data['nomPersonne'].'</h3><p class="pays">('.$data['nomPays'].')</p>';
		}
	}

	function socProdFilm(){ // affiche les societeProd du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT nomSocProd FROM film JOIN produit JOIN SocieteProd ON (film.idFilm = produit.idFilm AND produit.idSocProd = SocieteProd.idSocProd) WHERE nomFilm LIKE "Le Roi Lion"');
		
		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['nomSocProd'].'</h3>';
		}
	}

	function realFilm(){ // affiche les realisateur du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT prenomPersonne, nomPersonne, nomPays FROM film JOIN realise JOIN personne JOIN pays ON (film.idFilm = realise.idFilm AND realise.idPersonne = personne.idPersonne and personne.idPays = pays.idPays) WHERE nomFilm LIKE "Le Roi Lion"');
		
		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['prenomPersonne'].' '.$data['nomPersonne'].'</h3><p class="pays">('.$data['nomPays'].')</p>';
		}
	}

	function scenarFilm(){ // affiche les scénariste du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT prenomPersonne, nomPersonne, nomPays FROM film JOIN ecrit JOIN personne JOIN pays ON (film.idFilm = ecrit.idFilm AND ecrit.idPersonne = personne.idPersonne and personne.idPays = pays.idPays) WHERE nomFilm LIKE "Le Roi Lion"');
		
		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['prenomPersonne'].' '.$data['nomPersonne'].'</h3><p class="pays">('.$data['nomPays'].')</p>';
		}
	}

	function motcleFilm(){ // affiche les mots cles du film //
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT motMotCle FROM film JOIN definit JOIN motsCles ON (film.idFilm = definit.idFilm AND definit.idMotsCles = motsCles.idMotsCles) WHERE nomFilm LIKE "Le Roi Lion"');
		
		while ($data = $requete -> fetch())
		{

			echo '<h3>'.$data['motMotCle'].'</h3>';
		}
	}

	function videoFilm() // Affiche la bande annonce du films //
	{
		$bdd = connectbdd();
    	$requete = $bdd -> query('SELECT bandeAnnonce from film where nomFilm like "Le Roi Lion"');

		while ($data = $requete -> fetch())
		{

			echo '<a href="'.$data['bandeAnnonce'].'" class="video" target="_blank"><i class="fab fa-youtube"></i></a>';
		}
	}
?>

</html>