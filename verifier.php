<?php
require_once 'Horaire.php';
$horaire = new Horaire();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $heures_contractuelles = $_POST['heures_contractuelles'];
    echo "<h3>Résultat pour $nom :</h3>";
    $horaire->verifier_heures($nom, $heures_contractuelles);
    echo "<a href='index.php'>Retour</a>";
}
?>

<div class="container">
    <h2>Vérifier les heures contractuelles</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        Heures contractuelles: <input type="number" name="heures_contractuelles" required><br>
        <input type="submit" value="Vérifier">
    </form>
    <a href="index.html">Retour au menu</a>
</div>
