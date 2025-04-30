<?php
$nom = $_POST['nom'];
$heures_contractuelles = $_POST['contractuelles'];
$horaire = new Horaire();
$horaire->verifier_heures($nom, $heures_contractuelles);
?>
