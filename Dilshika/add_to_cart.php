<?php
// Retrieve the data from the request
$pname = $_POST['pname'];
$price = $_POST['price'];
$qty = $_POST['qty'];

// Validate and sanitize the input if needed

// Connect to your database (replace the placeholders with your actual database credentials)
$servername = 'localhost';
$username = 'root';
$password = '';
$dbname = 'gym';

$conn = new mysqli($servername, $username, $password, $dbname);

// Check for any connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare and execute the database insert query
$qty=1;//minimum value of quantity should be 1
$stmt = $conn->prepare("INSERT INTO cart (pname, price, qty) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $pname, $price, $qty);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo "<script>alert('item added to cart');</script>";
	header("Location: cart.php");
	exit;
    
} else {
    echo 'Failed to add item to cart.';
	header("Location :test.html");
}

// Close the database connection
$stmt->close();
$conn->close();

//copy of code

/*$conn = new mysqli($servername, $username, $password, $dbname);

// Check for any connection errors
if ($conn->connect_error) {
    die('Connection failed: ' . $conn->connect_error);
}

// Prepare and execute the database insert query
$stmt = $conn->prepare("INSERT INTO cart (pname, price, qty) VALUES (?, ?, ?)");
$stmt->bind_param("sdi", $pname, $price, $qty);
$stmt->execute();

// Check if the insertion was successful
if ($stmt->affected_rows > 0) {
    echo 'Item added to cart.';
    
} else {
    echo 'Failed to add item to cart.';
}

// Close the database connection
$stmt->close();
$conn->close();*/
?>


<!--References :
    https://www.w3schools.com/php/php_mysql_prepared_statements.asp#:~:text=bind_param()%20function%3A-,%24stmt%2D%3Ebind_param(%22sss%22%2C%20%24firstname,the%20parameter%20is%20a%20string
-->
