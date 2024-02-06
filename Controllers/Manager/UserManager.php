<?php
require_once("../Services/Model/ConnectDb.php");
Class UserManager extends ConnectDb {

    private $db;
    public function __construct() {
        $this->db= ConnectDb::getBdd();
    }


    public function login($username , $password) {
        try{
            $stmt = $this->db->prepare("SELECT * FROM utilisateur WHERE nom_utilisateur = :nom_utilisateur AND mot_de_passe = :password");
            $stmt->bindParam(':nom_utilisateur', $username);
            $stmt->bindParam(':password', $password);
            $stmt->execute();

            if ($stmt->rowCount() == 1) {           
                header('Location: ../public/media/ok.html');
            } else {
                header('Location: ../public/media/failed.html');
            }
        } catch (PDOException $e) {
            return "Database Error: " . $e->getMessage();
        }

    }

    public function inscription($username,$mail,$password) {
        try{
            $stmt = $this->db->prepare("INSERT INTO utilisateur(nom_utilisateur,mot_de_passe,email,id_role) VALUES(:nom_utilisateur,:password,:email,2)");
            $stmt->bindParam(':nom_utilisateur', $username);
            $stmt->bindParam(':password', $password);
            $stmt->bindParam(':email', $mail);
            $stmt->execute();

            if ($stmt->rowCount() == 1) { 
                
                echo "Utilisateur ajouté avec succés";
            } else {
               
                echo "CA MARCHE PAAAAAAAAAAAAAAAAAAAAAAAAS";
            }
        } catch (PDOException $e) {
            return "Database Error: " . $e->getMessage();
        }


    }


}