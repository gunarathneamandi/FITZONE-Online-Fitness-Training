<?php

include 'connect.php';

        $P_ID = $_GET['updateP_ID'];


if (isset($_POST['Submit'])) {
    $full_name = $_POST['full_name']; // Update the variable names to match the input field names
     // and ensure they match the column names in the database table
    $user_name = $_POST['username'];
    $email = $_POST['email'];
    $phone_number = $_POST['phone'];
    $date_of_birth = $_POST['date_of_birth'];
    $occupation = $_POST['Occupation'];
    $password = $_POST['Password'];
    $confirm_password = $_POST['confirm_password'];
    $payment = $_POST['payment'];


    $sql_query = "INSERT INTO payment_details (full_name, user_name, email, phone_number, date_of_birth, occupation, password, confirm_password, payment)
        VALUES ('$full_name', '$user_name', '$email', '$phone_number', '$date_of_birth', '$occupation', '$password', '$confirm_password','$payment')";

    if (mysqli_query($conn, $sql_query)) {
       echo //"New Details Entry inserted successfully!";


       header("Location: form.html");

    }else{
        die(mysqli_error($conn));
    }
}
/*Reference - https://www.youtube.com/watch?v=72U5Af8KUpA*/

?>


<!doctype html>
<head>
    <link rel="stylesheet" href="forms.css">

</head>

<body>
       <div class = "container" >

        <form action ="" method = "post"><!--"form.php"-->
            

            <h2> Payment </h2>
                <div class = "content">
                    <div class ="input-box">
                        <label for ="full_name">Full Name</label>
                        <input type ="text" placeholder="Enter full name" name = "full_name" required>

                    </div>
                    <div class ="input-box">
                        <label for ="username">Username</label>
                        <input type ="text" placeholder="Enter username" name = "username" required>
                        
                    </div>
                    <div class ="input-box">
                        <label for ="email">Email</label>
                        <input type ="text" placeholder="Enter email" name = "email" required>
                        
                    </div>
                    <div class ="input-box">
                        <label for ="phone">Phone Number</label>
                        <input type ="tel" placeholder="Enter Phone Number" name ="phone" required>
                        
                    </div>

                    <div class ="input-box">
                        <label for ="date_of_birth">Date of Birth</label>
                        <input type ="date" placeholder="Date of Birth" name = "date_of_birth" id= "date_of_birth" required>
                        
                    </div>

                    <div class ="input-box">
                        <label for ="Occupation">Occupation</label>
                        <input type ="Occupation" placeholder="Occupation" name ="Occupation" required>
                        
                    </div>
                    <div class ="input-box">
                        <label for ="password">Password</label>
                        <input type ="password" placeholder="Enter new Password" name ="Password" required>
                        
                    </div>
                    <div class ="input-box">
                        <label for ="confirm_password">Confirm Password</label>
                        <input type ="password" placeholder="Enter new Password" name ="confirm_password" required>
                        
                    </div>
                    <span class ="payment-title">Payment</span>
                        <div class="payment-category">
                                    <input type="radio"  name ="payment" id ="card" value="Card">
                                    <label for ="card">Card</label>
                                    <input type="radio"  name ="payment" id ="paypal" value="Paypal">
                                    <label for ="paypal">Paypal</label>
                        </div>
                    </div>
                    <div class="alert">
                        
<p>Fitzone fitness company is a well established and a reputed company in the industry.Make sure to go through the<a href = #>Terms</a> and <a href = #>Privacy Policy</a>about the company.
    Please go through the <a href = #>Cookies Policy</a>as well. Feel free to contact us on our online platforms regarding any query.</p>

                    </div>
                    <div class="button-container">
                        <button type="submit" name="Update">Submit</button>
                    </div>            
        </form>
       </div>

</body>
</html>