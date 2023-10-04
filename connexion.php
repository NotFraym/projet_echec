<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription_connexion.css" media="screen" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ChessEvent</title>

</head>

<body>

<?php include 'header.php'; ?>

<form id="connexion" method="POST" action="traitement_connexion.php">
        <label for="nom">Nom d'utilisateur :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp"  required>
        <br>
        <input type="submit" value="Se connecter" name="ok">
    </form>
    
<?php include 'footer.php'; ?>

</body>
</html>