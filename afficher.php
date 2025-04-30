<?php
require_once 'Horaire.php';
$horaire = new Horaire();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $resultat = $horaire->afficher_horaires($nom);
    echo "<h3>Horaires de $nom</h3>";
    while ($row = $resultat->fetch(PDO::FETCH_ASSOC)) {
        echo ucfirst($row['jour']) . " : " . $row['heures'] . " h<br>";
    }
    echo "<br><a href='index.php'>Retour</a>";
}
?>

<div class="container">
    <h2>Afficher les horaires d'un employé</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        <input type="submit" value="Afficher">
    </form>
    <a href="index.html">Retour au menu</a>
</div>
