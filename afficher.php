<div class="container">
    <h2>Afficher les horaires d'un employé</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        <input type="submit" value="Afficher">
    </form>
    <a href="index.html">Retour au menu</a>
</div>




<?php
include 'Horaire.php';  //norbtouh bil page horaire.php
$horaire = new Horaire(); //qui etabli la cnx grace au constructeur li fih el code cnx


// Heda juste il verfie est ce que el form il envoie e data men les inputs ou nn
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Ya5ou el esm el employé men formulaire
    $nom = $_POST['nom'];
    // appel lel function horaire ille majouda fi Class mte3i Horaire.php
    $resultat = $horaire->afficher_horaires($nom);
    echo "<h3>Horaires de l'employé : $nom</h3>";

    if ($resultat->rowCount() > 0) {
        // Table Header
        echo "<table border='1' style='border-collapse: collapse; width: 100%;'>";
        echo "<thead>";
        echo "<tr>";
        echo "<th>ID</th><th>Nom</th><th>Jour</th><th>Heures</th>";
        echo "</tr>";
        echo "</thead>";
        echo "<tbody>";

        // Table Rows
        while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . $row['id'] . "</td>";  // ID mte3 l'employé
            echo "<td>" . $row['nom']. "</td>";  // Nom de l'employé
            echo "<td>" . $row['jour'] . "</td>";  // Jour
            echo "<td>" . $row['heures'] . " h</td>";  // Nombre d'heures
            echo "</tr>";
        }

        echo "</tbody>";
        echo "</table>";
    } else {
        echo "<p>Aucun horaire trouvé pour cet employé.</p>";
    }

    echo "<br><a href='index.html'>Retour</a>";
}
?>


