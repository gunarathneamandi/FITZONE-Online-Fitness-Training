<?php
    // Assuming you have a database connection and necessary queries

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

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $username = $_POST['username'];

        // Execute a query to delete the profile
        $query = "DELETE FROM member WHERE username = '$username'";

        if (mysqli_query($con, $query)) {
            // Deletion successful
            echo "Profile deleted successfully";
            // Redirect to the same page
            header("Location: http://localhost/samadi/web%20page2/Webpro/");
            exit;
        } else {
            // Error occurred during deletion
            echo "Error deleting profile: " . mysqli_error($con);
        }
    }

    // Close the database connection
    mysqli_close($con);
?>
