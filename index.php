<!DOCTYPE html>
<html lang="fr">
<!-- Début en-tête-->
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/style.css">

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
        <h1>Bienvenue</h1>

        <!-- Formulaire de choix -->
        <form action="#" method="POST">
            
                <input type="submit" value="" name="recherche" class="btn-search">
            
                <input type="submit" value="" name="modifier" class="btn-search">

                <input type="submit" value=""  name="ajouter" class="btn-search">

                <input type="submit" value="" class="btn-search">

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