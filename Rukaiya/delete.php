<?php

include 'connect.php';

if(isset($_GET['deleteid'])){
    $id = $_GET['deleteid'];

    $sqli="'delete from 'payment_details' where P_ID ='.$P_ID";//table name payment_details under gym database
    $result = mysqli_query($conn,$sql);
    if($result){ 
        echo "Deleted Succesfully";
      // header('location: table.php');

    }else{
        die(mysqli_error($conn));
    }
}


/*Reference - https://www.youtube.com/watch?v=72U5Af8KUpA*/
?>
