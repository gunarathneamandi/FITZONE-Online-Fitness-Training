
<!--php code snippet reference https://youtu.be/72U5Af8KUpA-->
<?php
        //include the config.php file to establish the database connection
        include 'config.php';

        $id = $_GET['updateid'];

        $sql = "SELECT * FROM Query WHERE qid = $id ";
        $result = mysqli_query($conn, $sql);

        $row = mysqli_fetch_assoc($result);

        $email = $row['email'];
        $question = $row['query'];
        $desc = $row['description'];

        if(isset($_POST["update"])){
            $email = $_POST["email"];
            $question = $_POST["question"];
            $description = $_POST["desc"];

            //sql query to update Query table in database
            $sql = "UPDATE Query SET email = '$email', query = '$question', description = '$description' WHERE qid = $id";

            $result = mysqli_query($conn, $sql);
            if($result){
                //echo "Updated Successfully!";
                header('location:display.php');
                
            }else{
                die(mysqli_error($conn));
            }
        }
?>


<!DOCTYPE html>
<html>
    <head>
        <title>Homepage - Fitzone</title>
        <link rel="stylesheet" href="updateRecordStyle.css">
        <link rel="stylesheet" href="headcss.css">
        <link rel="stylesheet" href="footerStyle.css">
        <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">


        <script src="homepageScript.js"></script>
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
                    <a href="homepage.php #about-us">About Us</a>
                    <a href="homepage.php #instructor-section">Instructors</a>
                </div>
                </div>
                
                <div class="dropdown">
                <button class="dropbtn" onclick="window.location.href='#';">Programs</button>
                <div class="dropdown-content">
                    <a href="../Rukaiya/Programs.html">Online Programs</a>
                    <a href="../Rukaiya/Online Classes.html">Offline Programs</a>
                </div>
                </div>
                
                <div class="dropdown">
                <button class="dropbtn" onclick="window.location.href='#';">Health Tips</button>
                <div class="dropdown-content">
                    <a href="../Hirunima/new.html">Health & Meals</a>
                    <a href="../Hirunima/form.html">Customized </a>
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
    
        <br><br><br>
    
        <h2 class="main-heading"><span class="word-up">Update</span> your query! <br>Keep an eye on your inbox for a detailed email showcasing the perfect matches.</h2>
        <br><br>

        <!--form to update the details thats already stored in the database-->
        <form method="POST" class="main-form">

            <label for="email">Your Email</label>
            <br><br>
            <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required value="<?php echo $email;?>">
            <br><br>

            <label for="question">Select query</label>
            <br><br>
            <select id="question" name="question" value="<?php echo $query;?>">
                <option value="Equipments needed for workouts?">Equipments needed for workouts?</option>
                <option value="Results I could expect from the program?">Results I could expect from the program?</option>
                <option value="How do I cancel my membership?">How do I cancel my membership?</option>
                <option value="Any discounts available?">Any discounts available?</option>
                <option value="Other">Other</option>
            </select>
            <br><br>

            <label for="description">Describe your query here</label>
            <br><br>
            <textarea rows="4" cols="20" name="desc" id="desc" value="<?php echo $desc;?>"></textarea>

            <br><br>

            <div class="btns">
                <button type="submit" class="query-btn" name="update">Update</button>
                <input type="reset" value="Clear" class="query-btn">
            </div>
                                
        </form>

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
            <li><a href="homepage.php #about-us">About Us</a></li>
            <li><a href="homepage.php #contact">Contact Us</a></li>
            <li><a href="homepage.php #instructor-section">Instructor</a></li>
            <li><a href="#">Achievements</a></li>
            <li><a href="#">Gallery</a></li>
        </ul>

        </div>

        <div class="box9">
        <h2>Admissions</h2>
        <br>
        <ul>
            <li><a href="register.php">Instructions</a></li>
            <br><br>
            <li><a href="register.php" class="footer-register">Register Now</a></li>
            <br> 
        </ul>
        </div>

        <div class="box9">
        <h2>Related</h2>
        <br>
        <ul>
            <li><a href="../Hirunima/new.html">Health Tips</a></li>
            <li><a href="../Hirunima/form.html">Dietary Plans</a></li>
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
            <a href="homapage.php">&copy;2023 FITZONE online fitness training.</a>
            All rights reserved. | Solution by 
            <a href="">SLIIT undergraduates</a>
            
            <p class="last"><a href="#">Terms of Use</a></p>
            <p class="last"><a href="privacyPolicy.html">Privacy Policy</a></p>
        </p>
        </div>

        <div><a href="#top" class="fixed-arrow">↑</a></div>
        </div>




        </footer>
        <!--footer ends here-->
                            
    </body>
    </html>