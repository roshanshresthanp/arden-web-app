<?php
session_start();
// include('auth/auth.php');
require '../auth/auth.php';
require_once '../database/connection.php';

// die($_POST['_method']);
// die($_SERVER["REQUEST_METHOD"]);
// loginController.php


//for message store
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDB();

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO contacts (name, email, message) VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $name, $email, $message);

    // Set parameters and execute
    $name = isset($_POST['name']) ? trim($_POST['name']) : null;
    $message = isset($_POST['message']) ? trim($_POST['message']) : null;
    $email = isset($_POST['email']) ? $_POST['email'] : null;

    if ($stmt->execute()) {
        $_SESSION["success"] = "We have received your message !!";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        // echo "Error: " . $stmt->error;
        $_SESSION["error"] = "Problem in sending message";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    // Close the statement
    $stmt->close();

}


?>
