<?php

    // Include the config.php file to establish the database connection
    include 'config.php';

    $firstname = $_POST["fname"];
    $middlename = $_POST["mname"];
    $lastname = $_POST["lname"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["pno"];
    $email = $_POST["email"];
    $add_line1 = $_POST["line1"];
    $add_line2 = $_POST["line2"];
    $add_line3 = $_POST["line3"];
    $fitness_goals = $_POST["goals"];
    $allergies = $_POST["allergies"];
    $restrictions = $_POST["restrict"];
    $uname = $_POST["username"];
    $pword = $_POST["pw"];
    $card_number = $_POST["cno"];
    $cardholder_name = $_POST["cardholder"];
    $expiry_date = $_POST["expiry"];
    $cvv = $_POST["cvv"];

    //inserting values into the table
    $sql = "INSERT INTO Member (
        first_name, 
        middle_name,
        last_name, 
        dob,
        gender,
        phone_number,
        email,
        line1,
        line2,
        line3,
        fitness_goal,
        allergies,
        restrictions,
        username,
        password,
        card_number,
        cardholder_name,
        expiry,
        cvv) 

        VALUES (
            '$firstname',
            '$middlename',
            '$lastname',
            '$dob',
            '$gender',
            '$phone',
            '$email',
            '$add_line1',
            '$add_line2',
            '$add_line3',
            '$fitness_goals',
            '$allergies',
            '$restrictions',
            '$uname',
            '$pword',
            '$card_number',
            '$cardholder_name',
            '$expiry_date',
            '$cvv')";

    
if(mysqli_query($conn, $sql)){
    echo "<Script>alert('Record Inserted Successfully!')</script>";
    header ("Location:homepage.php");  //redirects the user to the homepage

}
else{
    echo "<script>alert('Error in Insertion! Retry again later')</script>";
}


//closing the connection
mysqli_close($conn);



//php code snippet references - https://youtu.be/72U5Af8KUpA