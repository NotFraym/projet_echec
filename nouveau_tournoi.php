<?php include "session_start.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <?php include "include/head.php" ?>
    <title>Nouveau Tournoi - ChessEvent</title>
</head>
<body>
    <h1>Créer un nouveau tournoi</h1>
    <form action="traitement_creation_tournoi.php" method="POST">
        <label for="nom_tournoi">Nom du tournoi :</label>
        <input type="text" name="nom_tournoi" required>

        <label for="type_tournoi">Type de tournoi :</label>
        <select name="type_tournoi" required>
            <option value="Type1">Type 1</option>
            <option value="Type2">Type 2</option>
            <!-- Ajoutez ici les autres types de tournoi -->
        </select>

        <label for="cadence">Cadence :</label>
        <input type="text" name="cadence" required>

        <label for="nb_joueurs">Nombre de joueurs (max 50):</label>
        <input type="number" name="nb_joueurs" id="nb_joueurs_input" min="1" max="50" required>

        <!-- Champ pour les noms et les ELO des joueurs en fonction du nombre saisi -->
        <div id="noms_joueurs">
            <!-- JavaScript sera utilisé pour ajouter dynamiquement les champs de saisie des noms et des ELO des joueurs -->
        </div>

        <input type="submit" value="Créer le tournoi">
    </form>

    <script>
        document.getElementById('nb_joueurs_input').addEventListener('input', function () {
            var nbJoueurs = this.value;
            if (nbJoueurs > 50) {
                this.value = 50; // Si plus de 50 sont saisis, réinitialisez à 50
                nbJoueurs = 50;
            }
            var nomsJoueursDiv = document.getElementById('noms_joueurs');
            nomsJoueursDiv.innerHTML = ''; // Réinitialise les champs existants

            for (var i = 1; i <= nbJoueurs; i++) {
                var labelNom = document.createElement('label');
                labelNom.innerHTML = 'Nom du joueur ' + i + ':';

                var inputNom = document.createElement('input');
                inputNom.type = 'text';
                inputNom.name = 'nom_joueur[]'; // Utilisation de tableau pour les noms des joueurs
                inputNom.required = true;

                var labelElo = document.createElement('label');
                labelElo.innerHTML = 'ELO du joueur ' + i + ':';

                var inputElo = document.createElement('input');
                inputElo.type = 'number';
                inputElo.name = 'elo[]'; // Utilisation de tableau pour les ELO des joueurs
                inputElo.min = 0; // Valeur minimale de l'ELO
                inputElo.required = true;

                var br = document.createElement('br');

                nomsJoueursDiv.appendChild(labelNom);
                nomsJoueursDiv.appendChild(inputNom);
                nomsJoueursDiv.appendChild(labelElo);
                nomsJoueursDiv.appendChild(inputElo);
                nomsJoueursDiv.appendChild(br);
            }
        });
    </script>

    <br><br>

    <?php include 'include/footer.php'; ?>
</body>
</html>
