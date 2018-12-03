<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>Filmathèque DCL </title>
</head>
<body>
    
    <header>
        <h1>Films préférés des D Codeurs du Lac</h1>
    </header>

    <main>
        <h1>Recherche de films</h1>

        <form action="" method="POST">

            <label>Titre</label>
            <input type="text" name="film">

            <label>Acteur</label>
            <input type="text" name="acteur">

            <label>Genre</label>
            <select name="genre">
                <option value=""></option>
            </select>

            <label>Réalisateur</label>
            <input type="text" name="realisateur">

            <label>Société de prod</label>
            <input type="text" name="socProd">

            <label>Pays</label>
            <select name="pays">
                <option value=""></option>
            </select>

            <label>Annee</label>
            <input type="number" name="annee" >

            <label>Mots clés</label>
            <input type="text" name="motsCles">

            <input type="submit" value="Recherche">

        </form>
    </main>

    <footer>
    </footer>

</body>
</html>