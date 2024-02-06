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
            
                echo "Login successful!";
            } else {
            
                echo "Invalid email or password";
            }
        } catch (PDOException $e) {
            return "Database Error: " . $e->getMessage();
        }

    }


}