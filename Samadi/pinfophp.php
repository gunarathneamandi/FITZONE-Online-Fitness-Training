
<?php
$fullname = $_POST['fullname'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$gender = $_POST['gender'];
$dob = $_POST['dob'];
$age = $_POST['age'];

// Process the data as per your requirements
// For example, you can store it in a database, send an email, etc.

echo '<script>window.localStorage.removeItem("formData");</script>';
?>
