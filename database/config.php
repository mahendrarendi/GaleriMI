<?php
// Database Configuration
$dbHost = "localhost";
$dbUser = "root";
$dbPass = "";
$dbName = "galerimi";

// Create Connection
$conn = new mysqli($dbHost, $dbUser, $dbPass, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
