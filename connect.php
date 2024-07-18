<?php
$host = "localhost"; // Host name
$user = "root";      // MySQL username
$pass = "";          // MySQL password
$db = "login";       // Database name

// Create connection
$conn = new mysqli($host, $user, $pass, $db);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
