<?php

abstract class ConnectDb {
    private static $instance;

    private function __construct() {
    }
    private static function setBdd() {
        self::$instance = new PDO("mysql:host=localhost;dbname=tp_library;charset=utf-8", "root", "");
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    protected function getBdd() {
        if (self::$instance == null) {
            self::setBdd();
        }
        return self::$instance;
    }
    public function __clone() {
        throw new Exception("Impossible de créer une copie", 1);
    }

    public function __wakeup() {
        throw new Exception("Impossible de rétablir la connexion à la bdd", 1);

    }

}