<!DOCTYPE html>
<html lang="fr">
    <!-- Début en-tête-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <title>Filmathèque DCL</title>
        <?php include("./logbdd.php"); ?>
        <?php include("./requestBdd.php"); ?>
    </head>
    <!-- Fin en-tête -->

    <!-- Start corps de la page -->
    <body>
        <!-- Header -->
        <?php include ("./annex/header.php"); ?>

        <!-- Main -->
        <main> 
        	<h1>Recherche de film</h1>
        	
            <!-- Formulaire de recherche -->
            <form action="annex/choixFilm.php" method="POST">
                
                <div>
                    <label for="titre">Titre</label>
                    <input type="text" name="film" id="titre">
                </div>
                
                <div>
                    <label for="acteur">Acteur</label>
                    <input type="text" name="acteur" id="acteur">
                </div>

                <div>
                    <label for="genre">Genre</label>               
                    <select name="genre" class="test" id="genre">
                    	<option checked></option>
                        <?php afficheOptionGenre(); ?> <!-- Affiche le genre des films existants dans la BDD -->
                    </select>
                </div>
                
                <div>
                    <label>Réalisateur</label>
                    <input type="text" name="realisateur">
                </div>
                
                <div>
                    <label>Société de production</label>
                    <select> 
                        <?php afficheOptionSocProd(); ?> <!-- Affiche les sociétés de production existantes dans la BDD-->
                    </select>
                </div>
                
                <div>
                    <label>Pays</label>
                    <select name="pays">
                        <?php afficheOptionPays(); ?> <!-- Affiche les pays existants dans la BDD -->
                    </select>
                </div>
                
                <div>
                    <label>Annee</label>
                    <input type="text" name="annee" maxlength="4"> <!-- Saisi d'entier uniquement (à faire en JS )-->
                </div>
                
                <div>
                    <label>Mots clés</label>
                    <input type="text" name="motsCles"> 
                </div>
                             
                <div>
                    <input type="submit" value="" class="btn-search">
                </div>

            </form>
        </main>


        <!-- Début Footer -->
        <footer>
            <p>Copyright&copy; 2018 <em>les D Codeur du Lac</em></p>
        </footer>
        <!-- Fin Footer -->

    </body>
    <!-- Fin corps de la page -->
</html>