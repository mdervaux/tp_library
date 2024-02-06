<?php
require_once("Services/Model/ConnectDb.php");
class BookManager extends ConnectDb
{
    private $db;

    public function __construct() {
        $this->db = ConnectDb::getBdd();
    }
    public function getLivres(){
        $req = $this->db->prepare("SELECT * FROM livre INNER JOIN type_livre ON livre.id_type_livre = type_livre.id");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}