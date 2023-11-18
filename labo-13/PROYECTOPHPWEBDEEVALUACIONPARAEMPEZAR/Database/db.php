<?php
$servername = "localhost";
$username = "german";
$password = "kenobi1213";
$dbname = "BDPRUEBA5";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "Connected successfully";

// Perform database operations here

// Close connection
$conn->close();
