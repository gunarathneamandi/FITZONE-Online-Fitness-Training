<html>
    <head>
    <link rel="stylesheet" href="headcss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="footerStyle.css">

    <style>
        .card {
            background-image: linear-gradient(to right top, #65ffc6, #71f8bb, #7af1b1, #82eaa8, #88e39f);
            border: 1px solid #ccc;
            padding: 10px;
            margin-bottom: 30px;
            border-radius: 20px;
            width: 800px;
            position: relative;
            left: 300px;
            box-shadow: 0 2px 8px rgba(0, 0, 2, 4);
        }

        .card h2,
        .card p {
            font-size: 18px;
            font-weight: bold;
            left: 45px;
            position: relative;

        }
        
        .update{
            position: relative;
            margin-top: -20px;
        }
        .card-buttons {
            display: flex;
            justify-content: flex-end;
            margin-top: 10px;
            position: relative;
            margin-top: -20px;
        }
        
        .card-buttons button {
            padding: 8px 16px;
            margin-left: 5px;
            border-radius: 4px;
            font-size: 16px;
            font-weight: bold;
        }
        
        .card-buttons button.update {
            background-color: #007bff;
            color: #fff;
            cursor:pointer;
        }
        
        .card-buttons button.delete {
            background-color: #dc3545;
            color:#fff;
            cursor:pointer;
        }

       


    </style>
    </head>

    <body>

    <header>
    <!--logo-->
    <div style="background-color:black;margin:0;">

        <img src="images/fitzonelogo.png"style="margin-left:30%;">

        </div>

        <!--nav bar-->
        <div class="navbar">
        <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='#';">Home</button>
        <div class="dropdown-content">
            <a href="../Amandi/homepage.php #about-us">About Us</a>
            <a href="../Amandi/homepage.php #instructor-section">Instructors</a>
        </div>
        </div>
        
        <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='#';">Programs</button>
        <div class="dropdown-content">
            <a href="../Rukaiya/Programs.html">Online Programs</a>
            <a href="../Rukaiya/Offline Classes.html">Offline Programs</a>
        </div>
        </div>
        
        <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='#';">Health Tips</button>
        <div class="dropdown-content">
            <a href="new.html">Health & Meals</a>
            <a href="form.html">Customized </a>
        </div>
        </div>
        
        <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='#';">Clothing and Accessories</button>
        <div class="dropdown-content">
            <a href="../Dilshika/clothing.html #section1">New Arrivals</a>
            <a href="../Dilshika/clothing.html #section2">Men's Collection</a>
            <a href="../Dilshika/clothing.html #section3">Woman's Collection</a>
            
        </div>
        </div>

        <div class="dropdown">
        <button class="dropbtn" onclick="window.location.href='#';">Supplement</button>
        <div class="dropdown-content">
            <a href="../Dilshika/Supplement.html #section1">Protien</a>
            <a href="../Dilshika/Supplement.html #section2">Pre Workout</a>
        </div>
        </div>
        
        <div class="cart" >
        <a href="../Samadi/loginpage.html"><i class="bi bi-person-circle"></i></a>
        </div>
        <div class="cart" >
        <a href="../Dilshika/cart.php"><i class="bi bi-cart-fill"></i></a>
        </div>
    </div>
</header>

        <br><br>

<?php
    require 'config.php';

    // Create connection
    $con = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($con->connect_error) {
        die("Connection failed: " . $con->connect_error);
    }

    $query = "SELECT id, name, age, weight, height, meals FROM diet";
    $result = mysqli_query($con, $query);

    while ($row = mysqli_fetch_assoc($result)) {
        $id = $row['id'];
        $name = $row['name'];
        $age = $row['age'];
        $weight = $row['weight'];
        $height = $row['height'];
        $meals = $row['meals'];



        // Handle delete request
        if (isset($_POST['delete'])) {
            $idToDelete = $_POST['id'];
            $deleteQuery = "DELETE FROM diet WHERE id = $idToDelete";
            if (mysqli_query($con, $deleteQuery)) {
                echo "Record deleted successfully.";
                header("Refresh:0"); // Refresh the page
            } else {
                echo "Error deleting record: " . mysqli_error($con);
            }
        }

        //References : https://www.w3schools.com/sql/default.asp

        // Handle update request
        if (isset($_POST['update'])) {
            $idToUpdate = $_POST['id'];
            $selectQuery = "SELECT name, age, weight, height, meals FROM diet WHERE id = $idToUpdate";
            $selectResult = mysqli_query($con, $selectQuery);

            if ($selectResult) {
                $data = mysqli_fetch_assoc($selectResult);
                $nameToUpdate = $data['name'];
                $ageToUpdate = $data['age'];
                $weightToUpdate = $data['weight'];
                $heightToUpdate = $data['height'];
                $mealsToUpdate = $data['meals'];

                // Pass the data to the update form using URL parameters
                $url = "update.php?id=$idToUpdate&name=$nameToUpdate&age=$ageToUpdate&weight=$weightToUpdate&height=$heightToUpdate&meals=$mealsToUpdate";
                header("Location: $url");
                exit();
            } else {
                echo "Error retrieving record: " . mysqli_error($con);
            }
        }


            //References : https://www.w3schools.com/sql/default.asp

    ?>

    <div class="card">
        <h2><?php echo $name; ?></h2>
        <p>Age: <?php echo $age; ?></p>
        <p>Weight: <?php echo $weight; ?></p>
        <p>Height: <?php echo $height; ?></p>
        <p>Meal Type: <?php echo $meals; ?></p>

        <div class="card-buttons">
            <form method="post">
                <input type="hidden" name="id" value="<?php echo $id; ?>">
                <button class="update" name="update">Update</button>
                <button class="delete" name="delete">Delete</button>
            </form>
        </div>
    </div>

    <?php
    }
    ?>

    <br><br><br>

    <!--footer starts here-->
    <footer class="footer-container" id="contact">

<br><br>

<div class="container7">
    <div class="box8">
        <h1 class="company-name">FITZONE</h1>
        <p class="moto">Sweat Now, shine later</p>
    </div>

    <div class="socialmedia-nav">
        <h2 class="socials-head">Follow us on our socials</h2>
        <br>
        <ul>
                                   
            <li>
                <div class="whatsapp-box">
                    <a href="https://chat.whatsapp.com/HIP4QTVhnRfI8J6kNImjiS" target="_blank">
                        <img src="images/whatsapp.png" rel="whatsapp icon" class="sm">
                    </a>

                    <!--div class="qr-popup">
                        <p style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                            Scan Me
                        </p>
                        <img src="images/qr.jpeg" rel="QR CODE" class="qr">
                    </div-->
                </div> 
                
            </li>

            <li>
                <a href="" target="_blank">
                    <img src="images/facebook.png" rel="fb icon" class="sm">
                </a>
            </li>

            <li>
                <a href="" target="_blank">
                    <img src="images/instagram.png" rel="ig icon" class="sm">
                </a>
            </li>

            <li>
                <a href="" target="_blank">
                    <img src="images/twitter.png" rel="linkedin icon" class="sm">
                </a>
            </li>

            <li>
                <a href="" target="_blank">
                    <img src="images/youtube.png" rel="yt icon" class="sm">
                </a>
            </li>
        </ul>
    </div>
            
    
</div>

<br><br>
<div class="container8">
    <div class="box9">
        
        <h2>Company</h2>
        <br>
        <ul>
            <li><a href="../Amandi/homepage.php #about-us">About Us</a></li>
            <li><a href="../Amandi/homepage.php #contact">Contact Us</a></li>
            <li><a href="../Amandi/homepage.php #instructor-section">Instructors</a></li>
            <li><a href="#">Achievements</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>
        
    </div>

    <div class="box9">
        <h2>Admissions</h2>
        <br>
        <ul>
            <li><a href="../Amandi/register.php">Instructions</a></li>
            <br><br>
            <li><a href="../Amandi/register.php" class="footer-register">Register Now</a></li>
            <br> 
        </ul>
    </div>

    <div class="box9">
        <h2>Related</h2>
        <br>
        <ul>
            <li><a href="new.html">Health Tips</a></li>
            <li><a href="form.html">Dietary Plans</a></li>
            <li><a href="#">Fitness Stories</a></li>
            <br>
            <br>
                
        </ul>
        
    </div>

    <div class="box9">
        
        <h2>Contact</h2>
        <br>
        <ul>
               
            <li>Contact Us(9:AM to 8:PM IST)</li>

                <ul class="pno">
                    <li>✆ +94 33 282 2387</li>
                    <li>✆ +94 77 282 9744</li>
                    <li>✆ +94 70 282 9745</li>
                </ul>
            <li>Email : <u>fitzone@gmail.com</u></li>
        </ul>
        
    </div>

</div>

<br><br>

<div class="container8">
    <div class="box9">
        <h2 class="affiliates-txt">Our Affiliates : 
        <img src="images/foa1.png" rel="foa logo" class="partners-logo">
        <img src="images/carnage.png" rel="carnage logo" style=" width:150px; height:auto; transform: translateY(20%);" class="partners-logo">
        </h2>
    </div>
</div>

<br><br>

<div>
    <hr class="footer-line">
    <div class="lastline">

        

        <p class="line">
            Copyrights 
            <a href="../Amandi/homepage.php">&copy;2023 FITZONE online fitness training.</a>
            All rights reserved. | Solution by 
            <a href="">SLIIT undergraduates</a>
            
            <p class="last"><a href="#">Terms of Use</a></p>
            <p class="last"><a href="../Amandi/privacyPolicy.html">Privacy Policy</a></p>
        </p>
    </div>

    <div><a href="#top" class="fixed-arrow">↑</a></div>
</div>




</footer>
<!--footer ends here-->

</body>
</html>