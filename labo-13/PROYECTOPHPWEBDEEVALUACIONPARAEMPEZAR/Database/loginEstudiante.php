<?php


function autenticarEstudiante($user, $clave)
{
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

    // Query to check if the user exists
    $query = "SELECT * FROM users WHERE username = '$sanitizedUsername' AND password = '$sanitizedPassword'";
    $result = $conn->query($query);

    // Check if the query was successful
    if ($result) {
        // Check if a row was returned (authentication successful)
        if ($result->num_rows > 0) {
            // Authentication successful
            $conn->close();
            return true;
        } else {
            // Authentication failed
            $conn->close();
            return false;
        }
    } else {
        // Query execution failed
        die("Error: " . $conn->error);
    }
    // Close connection
    $conn->close();
}
// Call the function if it's a GET request
if ($_SERVER['REQUEST_METHOD'] === 'GET') {
    echo yourPhpFunction();
}
