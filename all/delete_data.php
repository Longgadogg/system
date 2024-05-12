<?php
// Database connection parameters
$host = 'localhost';
$username = 'root';
$password = '';
$database = 'deansoffice';

// Connect to the database
$conn = new mysqli($host, $username, $password, $database);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Get data sent from AJAX request
$professorname = $_POST['professorname'];
$semester = $_POST['semester'];
$schoolyear = $_POST['schoolyear'];

// SQL to delete data
$sql = "DELETE FROM tldb WHERE professorname = ? AND semester = ? AND schoolyear = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("sss", $professorname, $semester, $schoolyear);

// Execute SQL query
if ($stmt->execute()) {
    // If deletion is successful, return success message
    echo "Data deleted successfully";
} else {
    // If deletion fails, return error message
    echo "Error deleting data: " . $conn->error;
}

// Close prepared statement and database connection
$stmt->close();
$conn->close();
?>
