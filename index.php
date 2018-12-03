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
        <h3>Films préférés des D Codeurs du Lac</h3>
    </header>

    <main>
        <h1>Recherche de films</h1>

        <form action="" method="POST">

            
                <label>Titre
                    <input type="text" name="film">
                </label>
            
                <label>Acteur
                    <input type="text" name="acteur">
                </label>

                <label>Genre
                    <select name="genre">
                        <option value=""></option>
                    </select>
                </label>
            
                <label>Réalisateur
                    <input type="text" name="realisateur">
                </label>
            
                <label>Société prod
                    <input type="text" name="socProd">
                </label>
            
                <label>Pays
                    <select name="pays">
                        <option value=""></option>
                    </select>
                </label>
            
                <label>Annee
                    <input type="number" name="annee" >
                </label>
            
                <label>Mots clés
                    <input type="text" name="motsCles">
                </label>
            
                <input type="submit" value="Recherche">
           

        </form>
    </main>

    <footer>
    </footer>

</body>
</html>