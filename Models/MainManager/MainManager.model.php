<?php
require_once("Services/Model/Model.php");
class MainManager extends Model
{
    public function getDatas(){
        $req = $this->getBdd()->prepare("SELECT * FROM matable");
        $req->execute();
        $datas = $req->fetchAll(PDO::FETCH_ASSOC);
        $req->closeCursor();
        return $datas;
    }
}

