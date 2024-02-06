
<?php
class UserController extends ConnectDb {

    private $db;

    public function __construct() {
        $this->db = ConnectDb::getBdd();
    }

    public function inscription($name, $password){
        $req = $this->db->prepare("INSERT INTO utilisateur (nom_utilisateur, mot_de_passe) VALUES (:name, :password)");
        $req->execute([
            "name" => $name,
            "password" => $password
        ]);
        $req->closeCursor();

    }
}