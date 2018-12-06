<?php
	
	function afficheOptionGenre() // Affiche le genre des films existants dans la BDD //
	{
		$bdd = connectbdd();		
    	$requete = $bdd -> query('SELECT nomGenre FROM genre ORDER BY nomGenre');

		while ($data = $requete -> fetch())
		{
        	echo '<option>' . $data['nomGenre'] . '</option>';
		}
	}



	function afficheOptionSocProd() // Affiche les sociétés de production existantes dans la BDD //
	{
		$bdd = connectbdd();
		$requete = $bdd -> query('SELECT nomSocProd FROM SocieteProd ORDER BY nomSocProd');

		while ($data = $requete -> fetch())
		{
	    	echo '<option>' . $data['nomSocProd'] . '</option>';
		}
	}


	function afficheOptionPays() // Affiche les pays existants dans la BDD //
	{
		$bdd = connectbdd();
    	$requete = $bdd -> query('SELECT nomPays FROM pays ORDER BY nomPays');

		while ($data = $requete -> fetch())
		{
        	echo '<option>' . $data['nomPays'] . '</option>';
		}

	}

?>