<html>
<head>
<style>
.popup{
	position : fixed;
	top : 50%;
	left:50%;
	transform: translate(-50%,-50%);
	width: 450px;
	padding: 20px 50px;
	background-color:black;
	color:white;
	border: 1px solid #759AAB;/*#d74f4*/
	border-radius: 15px;
	z-index: 9999;
	box-shadow: 10px 10px 10px rgba(119,118,118,0.3);
}

.popup table tr{
	height : 40px;
}

.popup h2{
	font-family:Segoe UI,Tahoma,Geneva, Verdana, sans-serif;
	font-size: 40px;
	color:#233039;

}

.popup p, td
{
	font-family: Segoe UI,Tahoma,Geneva, Verdana, sans-serif;
	font-size: 16px;
	color:#FDFDFD;
}

.ok{
	font-size: 16px;
	font-family: Segoe UI,Tahoma,Geneva, Verdana, sans-serif;
	color: #fff;
	background-color:#58a4a1;
	padding:10px;
	border-radius:5px;
	width: 100px;
	
}

.ok:hover{
	font-weight: bolder;
	background-color:#f3e16a;
	
}
</style>
</head>
<body>
<?php

// Include the configuration file
      require_once 'config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $cardNumber = $_POST['cno'];
    $cvc = $_POST['cvc'];
    $expDate = $_POST['expdate'];

    $formattedExpDate = date('Y-m-d', strtotime($expDate));

    // Prepare and execute the SQL query to insert data into the payments table
    $query = "INSERT INTO payments (name, email, address, cno, cvc, expdate) 
              VALUES ('$name', '$email', '$address', '$cardNumber', '$cvc', '$formattedExpDate')";
    $result = mysqli_query($con, $query);

    // Check if the query executed successfully
    if ($result) {
		
       // Show the popup after successful insertion
        
		echo"<div id='popup' class='popup'>
    <!-- Popup content here -->
	  <div style='font-size:50px;float:left;margin-right:20px;'>HI</div>  <img src='image/robot2.png'><br>
	<div style='clear: both;'></div>
    <h3>Thank You For Your Order!</h3>
    <table>
      <tr>
        <td>Name:</td>
        <td id='popup-name'> $name</td>
      </tr>
      <tr>
        <td>Card No:</td>
        <td id='popup-card'>$cardNumber</td>
      </tr>
      <tr>
        <td>E-mail:</td>
        <td id='popup-email'>$email</td>
      </tr>
      <tr>
        <td>Delivery address:</td>
        <td id='popup-address'>$address</td>
      </tr>
    </table>
    <br><br>
	
    <button onclick='window.location.href=`cart.php`' class='ok' >OK</button>
  </div>";
  
  
    } else {
        echo "Error inserting payment information: " . mysqli_error($con);
    }
}

// Close the database connection
mysqli_close($con);
?>
</body>
</html>