<!DOCTYPE html>
<html lang="fr">
<head>
    <?php 
    include "include/head.php";
    include "session_start.php"; 
    ?>
</head>
<body class="dark-theme">
    <?php include 'include/header.php'; ?>

    <h1>Gestion du Quizz</h1>

    <h2>Paramètres des catégories</h2>

    <!-- Formulaire de création de catégorie -->
    <h3>Création d'une catégorie :</h3>
    <form action="traitement_creation_categorie.php" method="post" enctype="multipart/form-data">
        <label for="nom_categorie">Nom de la catégorie :</label>
        <input type="text" id="nom_categorie" name="nom_categorie" required>
        <label for="image_categorie">Image de la catégorie :</label>
        <input type="file" id="image_categorie" name="image_categorie" accept="image/*" required>
        <button type="submit">Créer la catégorie</button>
    </form>

    <!-- Liste des catégories -->
    <h3>Liste des catégories :</h3>
    <table>
        <tr>
            <th>ID</th>
            <th>Nom de la catégorie</th>
            <th>Image de la catégorie</th>
            <th>Actions</th>
        </tr>
        <?php
        include 'config.php';
        $conn = new mysqli($shost, $user, $pass, $dbname);

        if ($conn->connect_error) {
            die("Erreur de connexion à la base de données : " . $conn->connect_error);
        }

        $query = "SELECT id_categorie, nom_categorie, nom_fichier FROM categorie";
        $result = $conn->query($query);

        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id_categorie"] . "</td>";
            echo "<td>" . $row["nom_categorie"] . "</td>";
            // Afficher l'image à 100x100 pixels
            echo "<td><img src='" . $row["nom_fichier"] . "' alt='" . $row["nom_categorie"] . "' width='100' height='100'></td>";
            echo "<td>";
            echo "<form action='traitement_suppr_categorie.php' method='post'>";
            echo "<input type='hidden' name='id' value='" . $row["id_categorie"] . "'>";
            echo "<button type='submit'>Supprimer</button>";
            echo "</form>";
            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>

    <?php include 'include/footer.php'; ?>
</body>
</html>
