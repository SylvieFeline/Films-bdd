<!DOCTYPE html>
<html lang="fr">
    <!-- Début en-tête-->
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/style.css">
        <title>Filmathèque DCL</title>
    </head>
    <!-- Fin en-tête -->

    <!-- Start corps de la page -->
    <body>
        <!-- Header -->
        <?php include ("./annex/header.php"); ?>

        <!-- Main -->
        <main> 
            <!-- Formulaire de recherche -->
            <form action="annex/choixFilm.php" method="POST">
                
                <div>
                    <label for="title">Titre</label>
                    <input type="text" name="film" id="title">
                </div>
                
                <div>
                    <label>Acteur</label>
                    <input type="text" name="acteur">
                </div>

                <div>
                    <label>Genre</label>               
                    <select name="genre" class="test">
                        <?php
                            echo '<option>' . 'nomOptionGenre' . '</option>';
                        ?>
                    </select>
                </div>
                
                <div>
                    <label>Réalisateur</label>
                    <input type="text" name="realisateur">
                </div>
                
                <div>
                    <label>Société de production</label>
                    <select>
                        <?php
                                echo '<option>' . 'nomOptionSociété' . '</option>';
                        ?>
                    </select>
                </div>
                
                <div>
                    <label>Pays</label>
                    <select name="pays">
                        <?php
                            echo '<option>' . 'nomOptionPays' . '</option>';
                        ?>
                    </select>
                </div>
                
                <div>
                    <label>Annee</label>
                    <input type="text" name="annee" maxlength="4">
                </div>
                
                <div>
                    <label>Mots clés</label>
                    <input type="text" name="motsCles"> <!-- Saisi d'entier uniquement -->
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


<!-- 
    A faire:
    ********

        Saisie d'entier pour le text dans "année".
        Rechercher comment lié le select à la base de donnée.

 -->