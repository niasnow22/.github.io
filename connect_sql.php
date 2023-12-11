<?php
$host = "localhost";
$user = "sosada1";
$pass = "sosada1";
$dbname = "sosada1";

// Create connection
$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    echo "Could not connect to server\n";
    die("Connection failed: " . $conn->connect_error);
}

?>
