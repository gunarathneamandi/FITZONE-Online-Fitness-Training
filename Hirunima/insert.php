<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "gym";

// Create connection
$con = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($con->connect_error) {
	die("Connection failed: " . $con->connect_error);
}

// Prepare the SQL statement
$stmt = $con->prepare("INSERT INTO diet (name, age, weight, height, meals) VALUES (?, ?, ?, ?, ?)");

// Bind the form inputs to the SQL statement parameters
$stmt->bind_param("siiis", $_POST['name'], $_POST['age'], $_POST['weight'], $_POST['height'], $_POST['meals']);

// Execute the statement
if ($stmt->execute()) {
	header("Location: showMeal.php");
    exit(); // Make sure to exit after redirection
} else {
	echo "Error inserting data: " . $stmt->error;
}

// Close the connection and statement
$stmt->close();
$con->close();
?>