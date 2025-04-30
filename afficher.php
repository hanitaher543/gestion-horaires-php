<?php
$nom = $_POST['nom'];
$horaire = new Horaire();
$res = $horaire->afficher_horaires($nom);

echo "<h3>Horaires de $nom :</h3><ul>";
foreach ($res as $row) {
    echo "<li>" . htmlspecialchars($row['jour']) . ": " . $row['heures'] . " heures</li>";
}
echo "</ul>";
?>
