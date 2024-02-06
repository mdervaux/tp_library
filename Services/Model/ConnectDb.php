<?php
abstract class ConnectDb{
    private static $instance;
    private function construct()
    {
    }

    protected static function setBdd(){
        if (self::$instance === null) {
            self::$instance = new PDO("mysql:host=localhost;dbname=tp_library;charset=utf8", "root", "");
            self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_WARNING);
        }
    }

    protected function getBdd(){
        if(self::$instance === null){
            self::setBdd();
        }
        return self::$instance;
    }


    private function clone() {
        // Bloquer la méthode clone
        throw new Exception("Clonage interdit");
    }
    private function wakeup() {
        // Bloquer la méthode __wakeup
        throw  new Exception("Wakeup interdit");
    }
}