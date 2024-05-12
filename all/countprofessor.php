<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "deansoffice";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Query to count professors
$sql = "SELECT COUNT(*) as count FROM allprof";
$result = $conn->query($sql);

// Check if query was successful
if ($result) {
    // Fetch result
    $row = $result->fetch_assoc();
    $countedProfessors = $row['count'];
} else {
    $countedProfessors = "N/A";
}

// Close connection
$conn->close();
?>
