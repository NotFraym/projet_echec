<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion - ChessEvent</title>

</head>

<body>

<?php include 'header.php'; ?>
    
<main>

    <h1>Connexion</h1>

    <form action="traitement_inscription.php" method="POST">

        <label for="username">Nom d'utilisateur :</label>
        <input type="text" id="username" name="username" required><br><br>
            
        <label for="mdp">Mot de passe :</label>
        <input type="password" id="mdp" name="mdp" required><br><br>
              
        </select><br><br>
            
        <input type="submit" value="S'inscrire">

        </form>

    </main>

<?php include 'footer.php'; ?>

</body>
</html>