<!DOCTYPE html>
<?php
    $server_name = 'localhost';
    $username = 'root';
    $password = '';
    $database_name = 'gym';

    $conn = mysqli_connect($server_name, $username, $password, $database_name);
    if (!$conn) {
        die("Connection Failed: " .mysqli_connect_error());
    }
?>



<html lang="en">
    <head>
        
        <title>Update</title>
     
        </head>

        <body>
            <div class = "container">

                <button class="button-container button"><a href="form.html"> User </a></button><br><br>
               
                <table class="table table-bordered border-primary">
  <thead>
    <tr>
      <th scope="col">P_ID</th>
      <th scope="col">Full Name</th>
      <th scope="col">User Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone Number</th>
      <th scope="col">Date of Birth</th>
      <th scope="col">Occupation</th>
      <th scope="col">Password</th>
      <th scope="col">Confirm Password</th>
      <th scope="col">Payment</th>
    </tr>
  </thead>
  <tbody>

  <?php

  $sql ="Select * from ' payment_details'";
  $result =mysqli_query($con,$sql);
  if($result){
  $row=mysqli_fetch_assoc($result);
  echo $row['name'];
  }
/*Reference - https://www.youtube.com/watch?v=72U5Af8KUpA*/

  ?>

    
</table>
            
</div>
        </body>
</html>