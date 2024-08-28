<?php
session_start();

// Retrieve data from the database
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

if (isset($_SESSION['memberID'])) {
    $memberID = $_SESSION['memberID'];

    // Execute a query to fetch user profile data
    $stmt = $con->prepare("SELECT * FROM member WHERE memberID = ?");
    $stmt->bind_param("s", $memberID);
    $stmt->execute();

    // Get the result
    $result = $stmt->get_result();

    if (!$result) {
        die("Error executing query: " . mysqli_error($con));
    }

    // Check if the query returned any results
    if (mysqli_num_rows($result) > 0) {
        $profileData = mysqli_fetch_assoc($result);

        // Assign the retrieved values to variables
        $userName = $profileData['username'];
        $password = $profileData['password'];
        $email = $profileData['email'];
        $dob = $profileData['dob'];
        $gender = $profileData['gender'];

        // Store the profile data in the session
        $_SESSION['userName'] = $userName;
        $_SESSION['email'] = $email;
        $_SESSION['dob'] = $dob;
        $_SESSION['gender'] = $gender;
    } else {
        die("No profile data found for memberID: $memberID");
    }

    // Close the prepared statement
    $stmt->close();
} else {
    die("Member ID not found in session");
}

// Close the database connection
mysqli_close($con);
?>

<!DOCTYPE html>
<html>
<head>
    <title>EDIT Your Profile</title>
    <link rel="stylesheet" type="text/css" href="editstyle.css">
</head>
<body>
<center>
    <div class="box">
        <img src="profile.jfif" />
        <form action="update_profile.php" method="POST">
            <div class="input-container">
                <label for="username" style="color: white;">Username:</label>
                <input type="text" id="username" name="username" value="<?php echo $userName; ?>">
            </div>
            <div class="input-container">
                <label for="password" style="color: white;">Password:</label>
                <input type="text" id="password" name="password" placeholder="Password" value="<?php echo $password; ?>">
            </div>
            <div class="input-container">
                <label for="email" style="color: white;">Email:</label>
                <input type="email" id="email" name="email" placeholder="Email" value="<?php echo $email; ?>">
            </div>
            <div class="input-container">
                <label for="dob" style="color: white;">Date Of Birth:</label>
                <input type="date" id="dob" name="dob" placeholder="Date Of Birth" value="<?php echo $dob; ?>">
            </div>
            <div class="input-container">
                <label for="gender" style="color: white;">Gender:</label>
                <input type="text" id="gender" name="gender" placeholder="Gender" value="<?php echo $gender; ?>">
            </div>
            <button style="float: left; margin: 10px 0 0 18.2%;">UPDATE</button>
            <button style="float: right; margin: 10px 18.2% 0 0;" onclick="deleteProfile()">DELETE</button>
        </form>
    </div>
</center>

<!-- Add a comment describing the purpose of the styles -->
<style>
    .input-container {
        display: flex;
        align-items: center;
        margin-bottom: 10px;
    }

    .input-container label {
        flex-basis: 150px;
    }

    .input-container input {
        flex-grow: 1;
    }
</style>

<script>
    function deleteProfile() {
        var confirmDelete = confirm("Are you sure you want to delete your profile?");
        if (confirmDelete) {
            // Send an AJAX request to delete_profile.php
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "delete_profile.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function () {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    alert(xhr.responseText); // Display the response from the server
                    // You can perform further actions after the profile is deleted
                }
            };
            xhr.send("username=<?php echo $userName; ?>");
        }
    }
</script>
</body>
</html>


<!--Reference : https://codepen.io/fat_64/pen/YzPeNwR-->
