<?php

// Database connection information
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";



// Create database connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check database connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>