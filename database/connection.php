<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "tekstronaut";

// Create connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);


// Check connection status

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
echo "Database connected successfully";

$sql = "SELECT id, name, email FROM users";
$result = $conn->query($sql);

// Check if the table has any records
if ($result->num_rows > 0) {
    // Output data for each row
    while($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . " - Name: " . $row["name"] . " - Email: " . $row["email"] . "<br>";
    }
} else {
    echo "0 results";
}

?>