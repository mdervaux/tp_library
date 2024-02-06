<?php

class ConnectDb {
    private static $instance;
    private $host = "localhost";
    private $dbname = "tp_library";
    private $charset = "utf-8";
    private $username = "root";
    private $password = "";

    private function __construct() {
        self::$instance = new PDO("mysql:host={$this->host};dbname={$this->dbname};charset={$this->charset}", $this->username, $this->password);
        self::$instance->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    public static function getInstance() {
        if (self::$instance == null) {
            self::$instance = new ConnectDb();
        }
    }
}