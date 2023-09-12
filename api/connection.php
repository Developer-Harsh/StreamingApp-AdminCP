<?php

// Database connection settings.
$dbhost = "localhost";
$dbuser = "harsh";
$dbpass = "harsh";
$dbname = "tango";

// Create a database connection.
$conn = new mysqli($dbhost, $dbuser, $dbpass, $dbname);

// Check if the connection was successful.
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

//echo "Connected successfully";

?>