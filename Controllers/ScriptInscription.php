<?php
require_once("../Controllers/Manager/UserManager.php");
$usermanager = new UserManager;

    // Récupérer les valeurs des champs du formulaire
    $email = $_POST["email"];
    $password = $_POST["mot_de_passe"];
    $name = $_POST["nom_utilisateur"];

    $usermanager->inscription($name,$email,$password);

