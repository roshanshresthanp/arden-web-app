<?php

// require '../auth/auth.php';
// require '../database/connection.php';
// require __DIR__ . '/../database/connection.php';

require_once __DIR__ . '/../config.php';
const USERNAME = 'stha901@gmail.com';
const PASSWORD = 'password';
// die($results)

// echo getUsers();


// Login function
function login($username, $password) {

    // $conn = connectDB();
    // $sql = "SELECT id, password, email, role FROM users";
    // $result = $conn->query($sql);
    // die($result);
    $sql = "SELECT id, password, email FROM users";
    // $result = $conn->query($sql);

    if ($username === USERNAME && $password === PASSWORD) {
        $_SESSION['logged_in'] = true;
        // return true;
        // echo $_SESSION['logged_in'];
        header("Location: ".url('dashboard')."");


        // header("Location: http://" . $_SERVER['HTTP_HOST'] . "/dashboard");

        exit();
    }
    // echo "loinn failde";
    $_SESSION["message"] = "Please enter correct email or password !!";
    header("Location: " . $_SERVER['HTTP_REFERER']);
    exit();
}

// Logout function
function logout() {
    unset($_SESSION['logged_in']);
    session_destroy();
    header("Location: home");
    exit();
}

// Check if user is logged in
function isAuthenticated() {
    return isset($_SESSION['logged_in']) && $_SESSION['logged_in'] === true;
}

// Protect route function
function protectRoute() {
    if (!isAuthenticated()) {
        header('Location: /login');
        exit();
    }
}
?>
