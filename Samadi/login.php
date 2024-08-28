
<?php
session_start();

// Check if the form is submitted
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve the username and password from the form
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Perform the necessary validation and authentication
    if (!empty($username) && !empty($password)) {
        $servername = "localhost";
        $dbusername = "root";
        $dbpassword = "";
        $dbname = "gym";

        // Create connection
        $con = new mysqli($servername, $dbusername, $dbpassword, $dbname);
        if ($con->connect_error) {
            die("Connection failed: " . $con->connect_error);
        }

        // Prepare and bind the query to prevent SQL injection
        $stmt = $con->prepare("SELECT * FROM member WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();

        // Get the result
        $result = $stmt->get_result();

        // Check if a row is returned
        if ($result->num_rows > 0) {
            // Authentication successful
            $row = $result->fetch_assoc();
            $memberID = $row['memberID'];
            
            // Store memberID in the session
            $_SESSION['memberID'] = $memberID;

            
            // Set a session cookie
            setcookie('memberID', $memberID, time() + (86400 * 30), '/'); // Cookie expires after 30 days

            header('Location:userprofile.html');
            exit;
        } else {
            // Incorrect username or password
            echo '<script type="text/javascript">';
            echo 'alert("Incorrect Username or Password");';
            echo 'window.location.href = "samadi - Copy/web page2/web page2/index.html";';
            echo '</script>';
        }

        // Close the prepared statement and database connection
        $stmt->close();
        $con->close();
    } else {
        // Username or password is empty
        echo '<script type="text/javascript">';
        echo 'alert("Please enter both username and password");';
        echo 'window.location.href = "http://localhost/samadi/web%20page2/Webpro/";';
        echo '</script>';
    }
}
?>


<!--Reference : https://www.youtube.com/watch?v=JDn6OAMnJwQ-->



