<?php

function connectDB(){

    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "yoga";

    // Create connection to the database
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection status
    if ($conn->connect_error) {
        die("Database connection failed: " . $conn->connect_error);
    }
    return $conn;
}

function getUsers()
{
    $users = "SELECT id, password, email FROM users";
    $users = connectDB()->query($users);
    return $users;
}

define('YOGA_TYPE',['Hatha',
                    'Ashtanga',
                    'Vinyasa',
                    'Iyengar',
                    'Yin',
                    'Kundalini',
                    'Bikram',
                    'Power',]);
?>