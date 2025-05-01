<div class="container">
    <h2>Vérifier les heures contractuelles</h2>
    <form method="post">
        Nom: <input type="text" name="nom" required><br>
        Heures contractuelles: <input type="number" name="heures_contractuelles" required><br>
        <input type="submit" value="Vérifier">
    </form>
    <a href="index.html">Retour au menu</a>
</div>



<?php
include 'Horaire.php';  //norbtouh bil page horaire.php
$horaire = new Horaire(); //Pour établir cnx vers BD à travers el constructeur el majoud fih

// Heda juste il verfie est ce que el form il envoie e data men les inputs ou nn
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nom = $_POST['nom'];
    $heures_contractuelles = $_POST['heures_contractuelles'];
    echo "<h3>Résultat pour $nom :</h3>";
    $horaire->verifier_heures($nom, $heures_contractuelles);
    echo "<a href='index.php'>Retour</a>";
}
?>

