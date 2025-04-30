<?php
// Récupérer les données du formulaire
$nom = $_POST['nom'];
$jour = $_POST['jour'];
$heures = $_POST['heures'];

// Ajouter les heures de travail
$horaire = new Horaire();
$horaire->ajouter_heure($nom, $jour, $heures);
echo "<p>✅ Heures ajoutées pour $nom ($jour : $heures heures).</p>";
?>
