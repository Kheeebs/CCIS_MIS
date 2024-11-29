<?php
$host = "localhost";  // MySQL host
$username = "root";   // MySQL username (usually 'root' for local development)
$password = "";       // MySQL password (leave empty for local server)
$dbname = "ccis_mis";  // Your database name

// Create a connection to the database
$conn = new mysqli($host, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
