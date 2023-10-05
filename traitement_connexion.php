<?php
// Assurez-vous d'avoir démarré la session
session_start();

// Vérifiez si le formulaire de connexion a été soumis
if (isset($_POST['ok'])) {
    // Récupérez les données du formulaire
    $nom_utilisateur = $_POST['nom'];
    $mdp_entre = $_POST['mdp'];

    // Établissez la connexion à la base de données (utilisez vos propres paramètres de connexion)
    include 'config.php';
    $mysqli = new mysqli($shost, $user, $pass, $dbname);

    // Vérifiez la connexion à la base de données
    if ($mysqli->connect_error) {
        die("Erreur de connexion à la base de données : " . $mysqli->connect_error);
    }

    // Préparez une requête pour obtenir le hash du mot de passe de l'utilisateur
    $query = "SELECT mdp FROM utilisateur WHERE user = ?";
    $stmt = $mysqli->prepare($query);

    // Lier le nom d'utilisateur au paramètre de la requête
    $stmt->bind_param("s", $nom_utilisateur);

    // Exécutez la requête
    $stmt->execute();

    // Lier le résultat de la requête à une variable
    $stmt->bind_result($mdp_hash);

    // Récupérez le résultat de la requête
    if ($stmt->fetch()) {
        // Hasher le mot de passe entré par l'utilisateur en SHA-256
        $mdp_entre_hash = hash('sha256', $mdp_entre);

        // Vérifiez si le hash du mot de passe entré correspond au hash enregistré dans la base de données
        if ($mdp_entre_hash === $mdp_hash) {
            // Démarrer la session
            if (session_status() == PHP_SESSION_NONE) {
                session_start();
            }
            

            // Stockez le nom d'utilisateur dans la session
            $_SESSION['user_nom'] = $nom_utilisateur;

            // Redirigez vers la page d'accueil ou une autre page après la connexion réussie
            header('Location: index.php'); // Remplacez par la page d'accueil souhaitée
            exit();
        } else {
            include 'header.php';
            echo "Mot de passe incorrect.";
            include 'footer.php';
        }
    } else {
        include 'header.php';
        echo "Nom d'utilisateur inexistant.";
        include 'footer.php';
    }

    // Fermez la connexion et la requête $stmt
    $stmt->close();
    $mysqli->close();
} else {
    // Redirigez vers la page de connexion si le formulaire n'a pas été soumis
    header('Location: connexion.php'); // Remplacez par la page de connexion
    exit();
}
?>
