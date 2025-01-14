<?php
session_start();
require '../auth/auth.php';
require_once '../database/connection.php';

//for update
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['_method']) && $_POST['_method'] == 'PUT') {
    
    // Set parameters and execute
    $question = isset($_POST['question']) ? trim($_POST['question']) : null;
    $status = isset($_POST['status']) ? $_POST['status'] : 1;
    $a = isset($_POST['a']) ? $_POST['a'] : null;
    $b = isset($_POST['b']) ? $_POST['b'] : null;
    $d = isset($_POST['d']) ? $_POST['d'] : null;
    $c = isset($_POST['c']) ? $_POST['c'] : null;
    $correct = isset($_POST['correct']) ? $_POST['correct'] : null;
    
    $id = $_POST['id'];
    $conn = connectDB();
    $stmt = $conn->prepare("UPDATE questions SET question = ?, a = ?, b = ?, c = ?, d = ?, correct = ?,  status = ? WHERE id = ?");
    $stmt->bind_param("ssssssii", $question, $a, $b, $c, $d, $correct, $status, $id);

    if ($stmt->execute()) {
        $_SESSION["success"] = "Question Updated Successfully";
        header("Location: " . url('admin/question/show'));
        exit();
    } else {
        $_SESSION["error"] = "Problems in updating Question";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    $stmt->close();

    exit();

}

//for delete
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['_method']) && $_POST['_method'] == 'DELETE') {
    
    $id = $_POST['id'];
    $conn = connectDB();
    $stmt = $conn->prepare("DELETE FROM questions WHERE id = ?");
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        $_SESSION["success"] = "Question Deleted Successfully";
        header("Location: " . url('admin/question/show'));
        exit();
    } else {
        $_SESSION["error"] = "Problems in deleting Question";
        header("Location: " . url('admin/question/show'));
        exit();
    }
    // Close the statement
    $stmt->close();
    exit();

}


//for create
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $conn = connectDB();

    // die('here');

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO questions (question, a, b, c, d, status, correct) VALUES (?, ?, ?, ?, ?, ?, ?)");
    $stmt->bind_param("sssssss", $question, $a, $b, $c, $d, $status, $correct);

    // Set parameters and execute
    $question = isset($_POST['question']) ? trim($_POST['question']) : null;
    $c = isset($_POST['c']) ? trim($_POST['c']) : null;
    $status = isset($_POST['status']) ? $_POST['status'] : 1;
    $correct = isset($_POST['correct']) ? $_POST['correct'] : null;
    $a = isset($_POST['a']) ? $_POST['a'] : null;
    $b = isset($_POST['b']) ? $_POST['b'] : null;
    $d = isset($_POST['d']) ? $_POST['d'] : null;

    if ($stmt->execute()) {
        $_SESSION["success"] = "Question Added Successfully";
        header("Location: " . $_SESSION['previous_page']);
        exit();
    } else {
        // echo "Error: " . $stmt->error;
        $_SESSION["error"] = "Problem in adding question";
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
    // Close the statement
    $stmt->close();

}



?>
