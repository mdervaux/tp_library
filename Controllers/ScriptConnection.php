<?php
require_once("../Controllers/Manager/UserManager.php");
$usermanager = new UserManager;



    // Récupérer les valeurs des champs du formulaire
    $email = $_POST["name"];
    $password = $_POST["password"];

    $usermanager->login($email,$password);

