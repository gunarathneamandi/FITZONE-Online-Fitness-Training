<?php
  
  include 'connect.php';

  /*session_start(); // Start the session*/

    
?>


<!DOCTYPE html>
                                            <!--update.php-->
<html>
<head>
   <title>display </title>
    <style>
      
   button[type= "Add User"] {
      background-color: blueviolet;
      color: whitesmoke;
      padding: 10px 20px;
      border: none;
      font-weight: bolder;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      color:whitesmoke;
    }
    button[type= "update"] {
      background-color: plum;
      color: whitesmoke;
      padding: 10px 20px;
      border: none;
      font-weight: bolder;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      color:whitesmoke;
    }
    button[type= "delete"] {
      background-color: peru;
      color: whitesmoke;
      padding: 10px 20px;
      border: none;
      font-weight: bolder;
      border-radius: 5px;
      cursor: pointer;
      margin: 10px;
      color:whitesmoke;
    }
  table {
    border-collapse: collapse;
    width: 100%;
    border: 1px solid black;
  }

  th, td {
    border: 1px solid black;
    padding: 8px;
  }
    
    </style>
</head>
<body>
<button type="Add User"><a href="user.php" > Add User</a></button><br><br>

<table>
    <thead>
  <tr>
    <th>P_ID</th>
    <th>Full Name</th>
    <th>Username</th>
    <th>Email</th>
    <th>Phone Number</th>
    <th>Date of Birth</th>
    <th>Occupation</th>
    <th>Password</th>
    <th>Confirm Password</th>
    <th>Payment</th>
    <th>Operations</th>
    
    
  </tr>
    </thead>
    <tbody>

    <?php

  $sql="select * from payment_details";// table name is payment details under gym database

  $result=mysqli_query($conn,$sql);
  if($result){

    while($row=mysqli_fetch_assoc($result)){

$P_ID=$row['P_ID'];    
$full_name=$row['full_name'];
$user_name=$row['user_name'];
$email=$row['email'];
$phone_number=$row['phone_number'];
$date_of_birth=$row['date_of_birth'];
$occupation=$row['occupation'];
$password=$row['password'];
$confirm_password=$row['confirm_password'];
$payment=$row['payment'];


/*// Retrieve session values
$P_ID = $_SESSION['P_ID'];
$full_name = $_SESSION['full_name'];
$user_name = $_SESSION['user_name'];
$email = $_SESSION['email'];
$phone_number = $_SESSION['phone_number'];
$date_of_birth = $_SESSION['date_of_birth'];
$occupation = $_SESSION['occupation'];
$password = $_SESSION['password'];
$confirm_password = $_SESSION['confirm_password'];
$payment = $_SESSION['payment'];*/



// Store values in the session
/*
$_SESSION['P_ID'] = $P_ID;
$_SESSION['full_name'] = $full_name;
$_SESSION['user_name'] = $user_name;
$_SESSION['email'] = $email;
$_SESSION['phone_number'] = $phone_number;
$_SESSION['date_of_birth'] = $date_of_birth;
$_SESSION['occupation'] = $occupation;
$_SESSION['password'] = $password;
$_SESSION['confirm_password'] = $confirm_password;
$_SESSION['payment'] = $payment;

*/
echo '<tr>

<td>'.$P_ID.'</td>
<td>'.$full_name.'</td>
<td>'.$user_name.'</td>
<td>'.$email.'</td>   
<td>'.$phone_number.'</td>
<td>'.$date_of_birth.'</td>
<td>'.$occupation.'</td>
<td>'.$password.'</td>
<td>'.$confirm_password.'</td>
<td>'.$payment.'</td>



<td><button type="update"><a href ="update.php? updateP_ID='.$P_ID.'"> Update</a></button</td>
<td><button type="delete"><a href ="delete.php? deleteP_ID='.$P_ID.'"> Delete</a></button></td>
</tr>';

}

 }
 /*Reference - https://www.youtube.com/watch?v=72U5Af8KUpA*/

?>
 
 
  </tbody>
</table>

</body>

</html>