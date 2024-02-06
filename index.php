<?php
session_start();
define("URL", str_replace("index.php","",(isset($_SERVER['HTTPS'])? "https" : "http").
    "://".$_SERVER['HTTP_HOST'].$_SERVER["PHP_SELF"]));

require_once("./Controllers/MainController.controller.php");
require_once("./Controllers/BookController.controller.php");
$mainController = new MainController();
$bookController = new BookController();

try {
    if(empty($_GET['page'])){
        $page = "accueil";
    } else {
        $url = explode("/", filter_var($_GET['page'],FILTER_SANITIZE_URL));
        $page = $url[0];
    }

    switch($page){
        case "accueil" : $mainController->accueil();
            break;
        case "page1" : $bookController->index();
            break;
        case "connection" : $mainController->connection();
            break;
        case "page3" : $mainController->page3();
            break;
        case "inscription" : $mainController->inscription();
            break;
        default : throw new Exception("La page n'existe pas");
    }
} catch (Exception $e){
    $mainController->pageErreur($e->getMessage());
}



