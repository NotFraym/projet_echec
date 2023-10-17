<?php include "session_start.php"; ?>
<!DOCTYPE html>
<html lang="fr">
    <head>
        <?php include "include/head.php" ?>
    </head>
    <body class="dark-theme">
        <?php include 'include/header.php'; ?>
        <h2>Bienvenue sur ChessQuizz !</h2>
        <h3>Sur ChessQuizz, venez tester vos connaissances du monde des échecs !</h3>
        <?php
        if (isset($_SESSION['user_nom'])) {
            echo '<h2>Choisissez une catégorie de quiz :</h2>';
            echo '<ul>';
            echo '<li><a href="quiz_ouverture.php">Ouvertures</a></li>';
            echo '<li><a href="quiz_joueurs.php">Joueurs célèbres</a></li>';
            echo '</ul>';
        } else {
            echo '<h3>Afin de commencer, veuillez vous connecter, ou créer un compte !</h3>';
        }
        ?>
        <?php include 'include/footer.php'; ?>
    </body>
</html>
