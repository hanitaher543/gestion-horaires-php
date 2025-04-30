<?php
require_once 'Horaire.php';
$horaire = new Horaire();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $total = $horaire->total_heures($nom);
    echo "<h3>Total d'heures de $nom : " . $total['total'] . " h</h3>";
    echo "<a href='index.php'>Retour</a>";
}
?>

<div class="container">
    <h2>Calculer le total des heures</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        <input type="submit" value="Calculer">
    </form>
    <a href="index.html">Retour au menu</a>
</div>
