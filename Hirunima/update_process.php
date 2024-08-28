<?php
// update_process.php

// Assuming you have a database connection established, you can update the "diet" table using the retrieved form values

// Retrieve the updated data from the form
$id = $_POST['id'];
$name = $_POST['name'];
$age = $_POST['age'];
$weight = $_POST['weight'];
$height = $_POST['height'];
$meals = $_POST['meals'];

// Assuming you have a database connection established, update the "diet" table
// Modify the following code to match your database structure and update query
    $servername = "localhost";
	$username = "root";
	$password = "";
	$dbname = "gym";

	// Create connection
	$con = new mysqli($servername,$username,$password,$dbname);

	// Check connection
	if ($con->connect_error) {
	 die("Connection failed: " . $con->connect_error);
	}

// Prepare and execute the update query
$stmt = $con->prepare("UPDATE diet SET name=?, age=?, weight=?, height=?, meals=? WHERE id=?");
$stmt->bind_param("sssssi", $name, $age, $weight, $height, $meals, $id);
$stmt->execute();


// Close the statement and database connection
$stmt->close();
$con->close();

// Redirect to showmeal.php
header("Location: showMeal.php");
exit; // Make sure to include the exit statement after the redirect
?>
