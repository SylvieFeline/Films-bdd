<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./PageResultat.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
    <title>Filmathèque DCL</title>
    <?php include("./requête/logbdd.php"); ?>
    <?php include("./requête/requestBdd.php");?>
</head>

<body>
    <?php include ("./annex/header.php"); ?>
    <!-- <div class="btnRetour"></div>
    <div class="btnHome"></div> -->

    <div class="choix"><h3>Votre Choix</h3></div>

    <div class="affResume">
            <?php echo afficheFilm(); ?>
            <div id="myModal" class="modal">
                <span class="close">&times;</span>
                <img class="modal-content" id="img01">
                <div id="caption"></div>
            </div>

        
            <?php echo resume(); ?>

    </div>
    <div class="infoFilm">
        <div class="btnVideo"><?php echo videoFilm(); ?></div>
        <div class="titreFilm"><p>Titre du film : </p><?php echo titre(); ?></div>
        <div class="anneeFilm"><p>Année du film : </p><?php echo anneeFilm(); ?></div>
        <div class="dureeFilm"><p>Durée du film : </p><?php echo dureeFilm(); ?></div>
        <div class="genreFilm"><p>Genre(s) du film : </p><?php echo genreFilm(); ?></div>
        <div class="paysFilm"><p>Pays du film : </p><?php echo paysFilm(); ?></div>
        <div class="acteurFilm"><p>Acteurs du film : </p><?php echo acteurFilm(); ?></div>
        <div class="socProdFilm"><p>Societée de Production : </p><?php echo socProdFilm(); ?></div>
        <div class="realFilm"><p>Réalisateur : </p><?php echo realFilm(); ?></div>
        <div class="scenarFilm"><p>Scénariste : </p><?php echo scenarFilm(); ?></div>
        <div class="motsclesFilm"><p>Mots cles : </p><?php echo motcleFilm(); ?></div>
    </div>
<script src="modal.js"></script>
</body>
</html>