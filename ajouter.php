<?php
require_once 'Horaire.php';
$horaire = new Horaire();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $jour = $_POST['jour'];
    $heures = $_POST['heures'];
    $horaire->ajouter_heure($nom, $jour, $heures);
    echo "Heures ajoutées avec succès ! <a href='index.php'>Retour</a>";
}
?>

<div class="container">
    <h2>Ajouter des heures de travail</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        Jour: 
        <select name="jour">
            <option value="lundi">Lundi</option>
            <option value="mardi">Mardi</option>
            <option value="mercredi">Mercredi</option>
            <option value="jeudi">Jeudi</option>
            <option value="vendredi">Vendredi</option>
        </select><br>
        Heures: <input type="number" name="heures" required><br>
        <input type="submit" value="Ajouter">
    </form>
    <a href="index.html">Retour au menu</a>
</div>
