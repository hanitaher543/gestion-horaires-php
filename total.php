<div class="container">
    <h2>Calculer le total des heures</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        <input type="submit" value="Calculer">
    </form>
    <a href="index.html">Retour au menu</a>
</div>



<?php
include 'Horaire.php';  //norbtouh bil page horaire.php
$horaire = new Horaire(); //qui etabli la cnx grace au constructeur li fih el code cnx

// Heda juste il verfie est ce que el form il envoie e data men les inputs ou nn
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $total = $horaire->total_heures($nom);
    echo "<h3>Total d'heures de $nom : " . $total['total'] . " h</h3>";
    echo "<a href='index.php'>Retour</a>";
}
?>

