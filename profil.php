<?php
include "session_start.php";
?>

<!DOCTYPE html>
<html lang="fr">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - ChessEvent</title>

</head>

<body>

<?php include 'header.php'; ?>

<script src="action_user.js"></script>
    
<h3><p>Paramètres du compte</p></h3>
<br>

<br>
<button onclick="supprimerCompte()">Supprimer mon compte</button>


<?php include 'footer.php'; ?>

</body>
</html>
