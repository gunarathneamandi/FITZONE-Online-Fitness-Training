<?php
// Database connection details
$host = "localhost";
$username = "root";
$password = " ";
$dbname = "gym";

// Create connection
$conn = new mysqli($host, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Create operation
if (isset($_POST['submit'])) {
    $location = $_POST['location'];
    
    $sql = "INSERT INTO locations (location) VALUES ('$location')";
    
    if ($conn->query($sql) === TRUE) {
        echo "Location created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close database connection
$conn->close();
?>
