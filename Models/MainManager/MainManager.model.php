<?php
require_once("Services/Model/ConnectDb.php");
class MainManager extends ConnectDb
{
    private $db;

    public function __construct() {
        $this->db = ConnectDb::getBdd();
    }
    public function getDatas(){
        $req = $this->db->prepare("SELECT * FROM livre");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }

    public function getTitle(){
        
    }
    public function getAuthor(){
    }

    


}