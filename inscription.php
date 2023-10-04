<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="inscription_connexion.css" media="screen" type="text/css"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inscription - ChessEvent</title>
</head>
<body>
    <?php include 'header.php'; ?>

    <div id="messageDiv">
        <!-- Les messages seront affichés ici -->
    </div>

    <form id="inscriptionForm" method="POST">
        <label for="nom">Nom d'utilisateur :</label>
        <input type="text" id="nom" name="nom" required>
        <br>
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp"  required>
        <br>
        <label for="mdp"> Vérification du mot de passe :</label>
        <input type="password" id="c_mdp" name="c_mdp" required>
        <br>
        <input type="submit" value="S'inscrire" name="ok">
    </form>

    <?php include 'footer.php'; ?>

