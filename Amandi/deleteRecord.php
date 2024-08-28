<?php

    include 'config.php';

    if(isset($_GET['deleteid'])){
        $id = $_GET['deleteid'];

        $sql = "DELETE FROM Query WHERE qid = $id";

        $result = mysqli_query($conn, $sql);

        if($result){
            //echo "Deleted Successfully!";
            header('location:display.php');
        }else{
            die(mysqli_error($conn));
        }
    }

?>

<!--php code snippet reference https://youtu.be/72U5Af8KUpA-->