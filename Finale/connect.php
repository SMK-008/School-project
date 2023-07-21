<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "school_project";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check the connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

?>