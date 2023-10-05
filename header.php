<header>
    <a href="index.php"><h1>Chess Event</h1></a>

    <?php
    if (isset($_SESSION['user_nom'])) {
        $nom_utilisateur = $_SESSION['user_nom'];
        echo '<span>Bienvenue, ' . htmlspecialchars($nom_utilisateur) . '</span>';

        // Vérifiez le statut de l'utilisateur
        if (isset($_SESSION['user_statut']) && $_SESSION['user_statut'] == 'admin') {
            echo '<a href="administration.php">Administration</a>';
        }
        
        // Lien vers la page "profil.php"
        echo '<a href="mes_tournois.php">Mes tournois</a>';
        echo '<a href="profil.php">Profil</a>';

        echo '<a href="deconnexion.php">Déconnexion</a>';
    }

    if (!isset($_SESSION['user_nom'])) {
        echo '<a href="connexion.php">Connexion</a>';
        echo '<a href="inscription.php">Inscription</a>';
    }
    ?>
</header>
