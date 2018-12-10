<!DOCTYPE html>
<html lang="fr">
    <!-- Début en-tête-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./../css/style.css">
        <link rel="stylesheet" href="./../css/styleRecherche.css">
        <title>Filmathèque DCL</title>
        <?php include("./../request/requestBdd.php"); ?>
    </head>
    <!-- Fin en-tête -->

    <!-- Start corps de la page -->
    <body>
        <!-- Header -->
        <?php include ("./header.php"); ?>

        <!-- Main -->
        <main> 
        	<h1>Recherche de film</h1>
        	
            <!-- Formulaire de recherche -->
            <form action="choixFilm.php" method="POST">
                
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
                        <select name="genre" id="genre">
                        	<option checked></option>
                            <?php afficheOptionGenre(); ?> <!-- Affiche le genre des films existants dans la BDD -->
                        </select>
                </div>
                
                <div>
                    <label for="realisateur">Réalisateur</label>
                    <input type="text" name="realisateur" id="realisateur">
                </div>
                
                <div>
                    <label for="socProd">Société de production</label>
                        <select name="socProd" id="socProd">
                            <option checked></option>
                            <?php afficheOptionSocProd(); ?> <!-- Affiche les sociétés de production existantes dans la BDD-->
                        </select>
                </div>
                
                <div>
                    <label for="pays">Pays</label>
                        <select name="pays" id="pays">
                            <option checked></option>
                            <?php afficheOptionPays(); ?> <!-- Affiche les pays existants dans la BDD -->
                        </select>
                </div>
                
                <div>
                    <label for="annee">Annee</label>
                    <input type="text" name="annee" maxlength="4" id="annee"> <!-- Saisi d'entier uniquement (à faire en JS )-->
                </div>
                
                <div>
                    <label for="keysearch">Mots clés</label>
                    <input type="text" name="motsCles" id="keysearch"> 
                </div>
                             
                <div>
                    <input type="submit" value="" class="btn-search" name="submRecherche">
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
