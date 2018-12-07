<!DOCTYPE html>
<html lang="fr">
<!-- Début en-tête-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- lien CSS principal -->
    <link rel="stylesheet" href="./css/style.css">

    <!-- lien CSS de la page -->
    <link rel="stylesheet" href="./css/styleAccueil.css">

    <!-- Police google font  -->
    <link href="https://fonts.googleapis.com/css?family=Merienda+One" rel="stylesheet">


    <title>Filmathèque DCL</title>
    <?php include("./logbdd.php"); ?>
    <?php include("./requestBdd.php"); ?>
    <!-- Fin en-tête -->

</head>
<!-- Start corps de la page -->
<body>
    <!-- Header -->
    <?php include ("./annex/header.php"); ?>

    <!-- Main -->
    <main>   
        <h2>Bienvenue</h2>

        <!-- Choix -->
        <div id="choix">

            <a href="./annex/recherche.php"><input type="button" value="Rechercher" class="choix">
            </a>

            <a href="#"><input type="button" value="Modifier" class="choix">
            </a>

            <a href="#"><input type="button" value="Ajouter" class="choix">
            </a>

            <a href="#"><input type="button" value="Connexion" class="choix">
            </a>

        </div>

    </main>
    <!-- Début Footer -->
    <footer>
        <p>Copyright&copy; 2018 <em>les D Codeur du Lac</em></p>
    </footer>
    <!-- Fin Footer -->

    </body>
    <!-- Fin corps de la page -->
</html>