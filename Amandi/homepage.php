<?php
        //include the config.php file to establish the database connection
        include 'config.php';

        if(isset($_POST["submit"])){
            $email = $_POST["email"];
            $question = $_POST["question"];
            $description = $_POST["desc"];

            $sql = "INSERT INTO Query (email, query, description) VALUES ('$email', '$question', '$description')";

            $result = mysqli_query($conn, $sql);
            if($result){
            //echo "<script>alert('Data inserted successfully')</script>";
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
        <link rel="stylesheet" href="homepageStyle.css">
        <link rel="stylesheet" href="headcss.css">

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
                    <a href="#about-us">About Us</a>
                    <a href="#instructor-section">Instructors</a>
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


        <!--slideshow referenced from https://www.w3schools.com/howto/howto_js_slideshow.asp-->


    <div class="slideshow">
        <div class="slideshow-imgs">
            <div class="slides">
                <img src="images/coverimg11.jpg" style="width:100%">
                <div class="slidetext">Staying fit just got simpler. Grab your membership.</div>
                <span class="slide-btn-active"><a href="register.php" class="slide-button">Become a Member</a></span>
            </div>
            <div class="slides">
                <img src="images/coverimg4.jpg" style="width:100%">
                <div class="slidetext">Experience Excellence: Meet Our Accomplished Team of Instructors</div>
                <span class="slide-btn-active"><a href="#instructor-section" class="slide-button">Instructors</a></span>
            </div>
            <div class="slides">
                <img src="images/coverimg6.jpg" style="width:100%">
                <div class="slidetext">Experience hassle-free shopping on our website.</div>
                <span class="slide-btn-active"><a href="../Dilshika/clothing.html" class="slide-button">Shopping Portal</a></span>
            </div>
        </div>
        <br>
        <div class="sliders">
            <div class="bars">
                <span class="bar" onclick="currentSlide(1)"></span>
                <span class="bar" onclick="currentSlide(2)"></span> 
                <span class="bar" onclick="currentSlide(3)"></span> 
            </div>
            <!--div class="arrows">
                <a class="prev" onclick="plusSlides(-1)"><img src="images/rightarrow.svg" style="transform: rotate(-180deg);"></a>
                <a class="next" onclick="plusSlides(1)"><img src="images/rightarrow.svg"></a>
            </div-->
        </div>
    </div>

        
    <script>
        function showSlides(n) {
            let i;
            let slides = document.getElementsByClassName("slides");
            let bar = document.getElementsByClassName("bar");

            if (n > slides.length) {slideIndex = 1}

            if (n < 1) {slideIndex = slides.length}

            for (i = 0; i<slides.length; i++) {
                slides[i].style.display = "none";
            }

            for (i = 0; i<bar.length; i++) {
                bar[i].className = bar[i].className.replace(" active", "")
            }

            slides[slideIndex-1].style.display = "block";
            bar[slideIndex-1].className += " active";
        }

        let slideIndex = 1;
        showSlides(slideIndex);

        function plusSlides(n) {
            showSlides(slideIndex +=n);
        }

        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

    </script>

        <div class="about" id="about-us">
            <br><br><br>
                
            <h1 class="side-heading">
                Discover our <span class="highlight1">purpose</span>
            </h1>
                    
            <br>
                    
            <p class="text1">
                Top-notch guidance, motivation, and resources to  empower and inspire you.
                <br>Join Fitzone today!
            </p>
            <br><br>
            <div class="words">

                

                <h2 style="text-align: right; font-size: 50px; margin-right:280px; color:aqua;">74% increase</h2>
                <br>
                <p style="text-align: right; font-size: 25px; margin-right: 280px ;">
                    in member satisfaction<br>
                    after continuous training with fitzone
                </p>
            </div>

            <br><br>

            <br><br><br><br>
            <a class="enroll-box"  href="register.php">
                 Register now and enjoy all the perks of membership.

            </a>

            <br><br><br><br><br>
        </div>


        

        
        
        <br><br><br><br>


        <div class="instructor-section" id="instructor-section">
            <table cellspacing="50px">
                <tr>
                    <td rowspan="3">
                        <div class="person1">
                            <img src="images/ins1.jpg" rel="Instructor 1" class="profile-icon">
                            <br>
                            <p class="name">
                                Instructor T Samantha
                            <br>AFPA certified</p>

                            <p class="expertise">
                                
                                <br>
                                <b>EXPERTISE : </b>Weight Loss Training, <br>Yoga Professional
                            </p>
                            
                        </div>

                        <br><br><br>
                        
                        <div class="person1" >
                            <img src="images/ins4.jpg" rel="Instructor 3" class="profile-icon">
                            <br>
                            <p class="name">
                                    Instructor Jonathan Lee
                                    <br>Pilates Method Alliance Certified
                            </p>
    
                            <p class="expertise">
                                <br>
                                <b>EXPERTISE : </b> Pilates Training 
                            </p>
                                
                        </div>
    
                        
                    </td>

                    <td>
                        <div class="person1">
                            <img src="images/ins2.jpg" rel="Instructor 2" class="profile-icon">
                            <br>
                            <p class="name">
                                Instructor Andrew Clark
                                <br>NSCA and NETA certified
                            </p>

                            <p class="expertise">
                                <br>
                                <b>EXPERTISE : </b> Strength Training
                            </p>
                            
                        </div>
                    </td>

                    <td>
                        <div class="person1">
                            <img src="images/trainer.jpg" rel="Instructor 2" class="profile-icon">
                            <br>
                            <p class="name">
                                Trainer Michael Davis
                                <br>ACSM,NASM and NETA certified
                            </p>

                            <p class="expertise">
                                <br>
                                <b>EXPERTISE : </b> Strength Training Professional
                            </p>
                            
                        </div>
                    </td>

                </tr>

                <tr>
                    <td>
                        <div class="person1" >
                            <img src="images/ins3.jpg" rel="Instructor 3" class="profile-icon">
                            <br>
                            <p class="name">
                                Instructor Lauren Scott
                                <br>ACSM certified
                            </p>

                            <p class="expertise">
                                <br>
                                <b>EXPERTISE : </b> Flexibility Training, <br>HIIT
                            </p>
                            
                        </div>

                    </td>

                    <td>
                        
                        <h1 style="font-size: 40px;  width:300px; font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif; ;">Our Instructors</h1>
                    </td>
                </tr>

                <tr>
                    <td>
                        <div class="person1" >
                            <img src="images/ins5.jpg" rel="Instructor 3" class="profile-icon">
                            <br>
                            <p class="name">
                                Instructor Amanda Reed
                                <br>NCSF certified
                            </p>

                            <p class="expertise">
                                <br>
                                <b>EXPERTISE : </b> Pre- and Post-natal fitness
                            </p>
                            
                        </div>

                    </td>
                </tr>
                    

                
            </table>
        </div>
    

        <br><br><br><br><br><br><br>

        <p class="prompts">
            Beat the clock! Enroll now and kick-start your fitness journey!

        </p>
        <a href="../Rukaiya/Programs.html" class="direct-btn">→</a>

        <br><br><br><br><br>

        

        


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

                                <div class="qr-popup">
                                    <p style="text-align: center; font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;">
                                        Scan Me
                                    </p>
                                    <img src="images/qr.jpeg" rel="QR CODE" class="qr">
                                </div>
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
                        <li><a href="#about-us">About Us</a></li>
                        <li><a href="#contact">Contact Us</a></li>
                        <li><a href="#instructor-section">Instructors</a></li>
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

                    <div class="fixed-query">
                        <a href="" onclick="showPopup(event)" class="question-mark">?</a>

                        <!--the query popup box-->

                        <div id="query-popup" class="query-popup">
                            
                            <h2>Need a hand?</h2>
                            <br><br>
                            <form method="POST" action="homepage.php">
                                <label for="email">Your Email</label>
                                <br><br>
                                <input type="text" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required>
                                <br><br>

                                <label for="question">Select query</label>
                                <br><br>
                                <select id="question" name="question">
                                    <option value="Equipments needed for workouts?">Equipments needed for workouts?</option>
                                    <option value="Results I could expect from the program?">Results I could expect from the program?</option>
                                    <option value="How do I cancel my membership?">How do I cancel my membership?</option>
                                    <option value="Any discounts available?">Any discounts available?</option>
                                    <option value="Other">Other</option>
                                </select>
                                <br><br>

                                <label for="description">Describe your query here</label>
                                <br><br>
                                <textarea rows="4" cols="20" name="desc" id="desc" placeholder="..."></textarea>

                                <br><br>
                                <div class="btns">
                                    <input type="submit" value="Send" class="query-btn" name="submit">
                                    <input type="reset" value="Clear" class="query-btn">
                                </div>
                                
                            </form>
                            <br><br>

                            <hr>

                            <br><br><br>
                            
                            
                            <button onclick="hidePopup()" class="ok" style="transform:translateX(60%);">Close</button>
                          </div>

                    </div>

                    <p class="line">
                        Copyrights 
                        <a href="#">&copy;2023 FITZONE online fitness training.</a>
                        All rights reserved. | Solution by 
                        <a href="">SLIIT undergraduates</a>
                        
                        <p class="last"><a href="#">Terms of Use</a></p>
                        <p class="last"><a href="privacyPolicy.html">Privacy Policy</a></p>
                    </p>
                </div>
    
                <div><a href="#top" class="fixed-arrow">↑</a></div>
            </div>

            

            
        </footer>

        
    </body>
</html>