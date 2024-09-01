<?php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $password = $_POST['password'];

    // Process the form data (e.g., validate, authenticate, save to database)
    if ($name == "Saad" && $password == "123") {
        $response = "Login successful.";
        $_SESSION['name'] = $name;
    } else {
        $response = "Invalid credentials.";
    }
    echo $response;
}