<?php

class Horaire {
    public $id, $nom, $jour, $heures, $conn;
    private $servername = 'mysql:host=localhost;dbname=dbHoraire';
    private $username = 'root';
    private $password = '';

    public function __construct() {
        try {
            // Connexion à la base de données
            $this->conn = new PDO($this->servername, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            echo 'Connexion réussie<br>';
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
        }
    }

    
    public function ajouter_heure($nom, $jour, $heures) {
        $req = "INSERT INTO horaire (nom, jour, heures) VALUES (:nom, :jour, :heures)";
        $res = $this->conn->prepare($req);
        // Hedi "binValue" este3meltha pour sécuriser l'insertion des données fi bd contre les injections SQL
        //Bech te9ra el valeur
        $res->bindValue(":nom", $nom);
        $res->bindValue(":jour", $jour);
        $res->bindValue(":heures", $heures);
        // Pour excuter la réquette 
        $res->execute();
    }

    public function afficher_horaires($nom) {
        $req = "SELECT id, nom, jour, heures FROM horaire WHERE nom = :nom";
        $res = $this->conn->prepare($req);
        //Bech te9ra el valeur
        $res->bindValue(":nom", $nom);
        // Pour excuter la réquette 
        $res->execute();
        return $res; 
    }

    public function total_heures($nom) {
        $req = "SELECT SUM(heures) as total FROM horaire WHERE nom = :nom";
        $res = $this->conn->prepare($req);
        $res->bindValue(":nom", $nom);
        $res->execute();
        return $res->fetch(); // Renvoie un tableau associatif ['total' => ...]
    }

    public function verifier_heures($nom, $heures_contractuelles) {
        $total = $this->total_heures($nom);
        if ($total && $total['total'] >= $heures_contractuelles) {
            echo "$nom a respecté ses heures contractuelles.<br>";
        } else {
            echo "$nom n'a pas respecté ses heures contractuelles.<br>";
        }
    }
}

?>
