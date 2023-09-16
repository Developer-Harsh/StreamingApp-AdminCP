<?php
// database connection settings
require_once('connection.php');

// SQL query to retrieve data from the live_users table
$sql = "SELECT * FROM coins_purchase";
$result = mysqli_query($conn, $sql);

if (!$result) {
    die("Error: " . mysqli_error($conn));
}

// Fetch data and convert it to an associative array
$data = [];
while ($row = mysqli_fetch_assoc($result)) {
    $data[] = $row;
}

// Return the data as JSON
header("Content-Type: application/json");
echo json_encode($data);

// Close the database connection
mysqli_close($conn);
?>
