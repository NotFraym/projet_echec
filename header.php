<?php
if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

?>

<header>
    <a href="index.php"><h1>Chess Event</h1></a>

    <?php
    if (isset($_SESSION['user_nom'])) {
        $nom_utilisateur = $_SESSION['user_nom'];
        echo '<span>Bienvenue, ' . htmlspecialchars($nom_utilisateur) . '</span>';
        echo '<a href="deconnexion.php">Déconnexion</a>';
    }

    if (!isset($_SESSION['user_nom'])) {
        echo '<a href="connexion.php">Connexion</a>';
        echo '<a href="inscription.php">Inscription</a>';
    }
    ?>
</header>
