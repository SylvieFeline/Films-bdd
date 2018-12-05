<!DOCTYPE html>
<html lang="fr">
    <!-- Début en-tête-->
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">

        <link rel="stylesheet" href="css/style.css">
        <title>Filmathèque DCL </title>
    </head>
    <!-- Fin en-tête -->

    <!-- Start corps de la page -->
    <body>
        <!-- Header -->
        <header>
            <img src="./images/entete.png" alt="Titre des D Codeurs du Lac" class="banner" />
        </header>

        <!-- Début corps de le page -->
        <main>
            
            <!-- Formulaire de recherche -->
            <form action="" method="POST">
                
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
                
            
                
                <input type="submit" value="" class="btn-search">

            </form>
        </main>


        <!-- Début Footer -->
        <footer>

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