<?php
require_once("Services/Model/ConnectDb.php");
class MainManager extends ConnectDb
{
    public function getDatas(){
        $req = $this->getBdd()->prepare("SELECT * FROM livre");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}

