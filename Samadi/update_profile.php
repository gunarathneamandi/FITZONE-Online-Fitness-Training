<?php
session_start();

// Check if the user is logged in
if (!isset($_SESSION['memberID'])) {
    die("Member ID not found in session");
}

// Retrieve the member ID from the session
$memberID = $_SESSION['memberID'];

// Database connection settings
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

// Retrieve the updated values from the form
$newUserName = $_POST['username'];
$newPassword = $_POST['password'];
$newEmail = $_POST['email'];
$newDOB = $_POST['dob'];
$newGender = $_POST['gender'];

// Prepare and execute the update query
$stmt = $con->prepare("UPDATE member SET username=?, password=?, email=?, dob=?, gender=? WHERE memberID=?");
$stmt->bind_param("sssssi", $newUserName, $newPassword, $newEmail, $newDOB, $newGender, $memberID);

if ($stmt->execute()) {
    echo "Profile updated successfully!";
    //header("Location: http://localhost/samadi/web%20page2/Webpro/");
} else {
    echo "Error updating profile: " . $stmt->error;
}

// Close the prepared statement and database connection
$stmt->close();
$con->close();
?>
