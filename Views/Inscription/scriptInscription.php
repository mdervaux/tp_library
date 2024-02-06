<?php
require_once '/path/to/UserController.php';

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the form data
    $username = $_POST['identifiant'];
    $password = $_POST['password'];
   

    // Create an instance of the UserController
    $userController = new UserController();

    // Call the registration method
    $userController->inscription($username, $password);
    //afficher message de confirmation
    echo "Inscription réussie";
}
