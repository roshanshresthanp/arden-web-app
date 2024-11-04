<?php
session_start();
// include('auth/auth.php');
require '../auth/auth.php';
require_once '../database/connection.php';

// die('hiiii');
// loginController.php


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    
    $conn = connectDB();

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO categories (title, description, status, image) VALUES (?, ?, ?, ?)");
    $stmt->bind_param("ssss", $title, $description, $status, $img);

    // Set parameters and execute
    $title = isset($_POST['title']) ? trim($_POST['title']) : null;
    $description = isset($_POST['description']) ? trim($_POST['description']) : null;
    $status = isset($_POST['status']) ? $_POST['status'] : 1;
    $img = isset($_POST['image']) ? $_POST['image'] : null;

    if ($stmt->execute()) {
        // echo "New record added successfully.";

        $_SESSION["message"] = "Record Added Successfully";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    } else {
        echo "Error: " . $stmt->error;
    }
    // Close the statement
    $stmt->close();

} else {
    echo "Something is wrong, please try again later";
}
?>
