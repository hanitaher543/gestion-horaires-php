<?php
// Inclure la classe Horaire
require_once('Horaire.php');

// Vérifier l'action
$action = $_POST['action'] ?? '';

?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gestion des Horaires</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<h2>Gestion des horaires de travail</h2>

<!-- Formulaire principal avec menu -->
<form method="POST">
    <label>Nom de l'employé :</label>
    <input type="text" name="nom" required><br><br>

    <label>Jour :</label>
    <select name="jour" required>
        <option value="">-- Choisir --</option>
        <option value="lundi">Lundi</option>
        <option value="mardi">Mardi</option>
        <option value="mercredi">Mercredi</option>
        <option value="jeudi">Jeudi</option>
        <option value="vendredi">Vendredi</option>
    </select><br><br>

    <label>Heures travaillées :</label>
    <input type="number" name="heures" min="0" required><br><br>

    <label>Heures contractuelles :</label>
    <input type="number" name="contractuelles" min="0" required><br><br>

    <!-- Actions -->
    <button type="submit" name="action" value="ajouter">1. Ajouter des heures de travail</button>
    <button type="submit" name="action" value="afficher">2. Afficher les horaires</button>
    <button type="submit" name="action" value="total">3. Calculer total des heures</button>
    <button type="submit" name="action" value="verifier">4. Vérifier heures contractuelles</button>
</form>

<?php
// Appel des fichiers selon l'action
if ($action == 'ajouter') {
    include 'ajouter.php'; // Ajouter des heures
} elseif ($action == 'afficher') {
    include 'afficher.php'; // Afficher les horaires
} elseif ($action == 'total') {
    include 'total.php'; // Calculer le total des heures
} elseif ($action == 'verifier') {
    include 'verifier.php'; // Vérifier les heures contractuelles
}
?>

</body>
</html>
