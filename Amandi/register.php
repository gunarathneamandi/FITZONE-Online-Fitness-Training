<!DOCTYPE html>
<html>
    <head>
        <title>Register - FITZONE</title>
        <link rel="stylesheet" href="registerStyle.css">

        <script src="registerScript.js"></script>

    </head>

    <body>

        <?php
        // Include the config.php file to establish the database connection
        include 'config.php';
        ?>

        <div class="container-main">

                <div class="left-section">
                    <div class="icons">
                        <img src="images/weight.png" rel="woman login" class="reg-icon">
                        <!--img src="images/man.png" rel="man login" class="reg-icon"-->
                    </div>

                    <div>
                        <h1 class="text">Welcome! <br>Let's get you up and running</h1>
                        <p>
                        Thank you for choosing us.<br>
                        It should only take a couple of minutes to get you started.
                        </p>
                    </div>

                    <img src="images/right-arrow.png" rel="right" class="right-icon">
                    
                </div>
                    
            

            <div class="right-section">
                <h1 class="text2">Register with us</h1>

                <form action="submitRegistration.php" method="POST" id="registrationForm">
                    <!--Section 1-->
                    <fieldset>
                        <legend>Personal Information</legend>

                        <div class="box1">
                            <div class="subsection">
                                <label for="fname">First Name</label>
                                <br>
                                <input type="text" id="fname" placeholder="Emma" name="fname" required>
                            </div>
            
                            <div class="subsection">
                                <label for="fname">Middle Name</label>
                                <br>
                                <input type="text" id="mname" name="mname" placeholder="(Optional)">
                            </div>
            
                            <div class="subsection">
                                <label for="fname">Last Name</label>
                                <br>
                                <input type="text" id="lname" name="lname"  placeholder="Smith" required>
                            </div>
                        </div>

                        <br><br>

                        <div class="line2">
                            <label for="dob">Date of Birth</label>
                            <br>
                            <input type="date" id="dob" name="dob"  required> 
                        </div>

                        <!--DOB validation referances - https://stackoverflow.com/questions/8664486/javascript-code-to-stop-form-submission-->

                        <script>
                                document.getElementById('registrationForm').addEventListener('submit', function(event) {
                                var dobInput = document.getElementById('dob');
                                var dobValue = new Date(dobInput.value);
                                var now = new Date();
                                var minDate = new Date(now.getFullYear() - 18, now.getMonth(), now.getDate());

                                if (dobValue > minDate) {
                                    event.preventDefault(); // Prevent form submission
                                    alert('You must be at least 18 years old to register.'); // Display an error message
                                }
                            });
                        </script>

                        <div class="line2">
                            <label for="gender">Gender</label>
                            <br><br>
                            <input type="radio" id="gender" name="gender" value="m" checked> Male
                            <input type="radio" id="gender" name="gender" value="f"> Female
                        </div>
                    </fieldset>

                    <br><br>

                    <fieldset>
                        <legend>Contact Information</legend>


                        <div class="box1">
                            <div class="subsection">
                                <label for="pno">Phone Number</label>
                                <br>
                                <input type="text" id="pno" name="pno" class="long-input" placeholder="+94 77 555-0163" required >
                            </div>

                            <div class="subsection">
                                <label for="email">E-mail Address</label>
                                <br>
                                <input type="email" id="email" name="email"  class="long-input" placeholder="emma.smith55@gmail.com" required>
                            </div>
                        </div>
                        

                        <br><br>

                        <div class="box1">

                            <label for="address">Address</label>
                            <br><br>

                            <div class="subsection">
                                <label for="line1" style="font-size:12px;">Line 1</label>
                                <br>
                                <input type="text" id="line1" name="line1"  class="long-input" required>
                            </div>
                            
                            <div class="subsection">
                                <label for="line2" style="font-size:12px;">Line 2</label>
                                <br>
                                <input type="text" id="line2" name="line2" class="long-input" required>
                            </div>
                            
                            <div class="subsection">
                                <label for="line3" style="font-size:12px;">Line 3</label>
                                <br>
                                <input type="text" id="line3" name="line3" class="long-input" placeholder="(Optional)">
                            </div>
                            
                        </div>

                    </fieldset>

                    <br><br>

                    <fieldset>
                        <legend>Fitness Goals & Dietary Preferances</legend>

                        <label for="goals">Select all that apply : </label>
                        <br><br>
                        <input type="checkbox" name="goals" value="Weight Loss"> Weight Loss <br>
                        <input type="checkbox" name="goals" value="Muscle Gain"> Muscle Gain <br>
                        <input type="checkbox" name="goals" value="Endurance"> Endurance <br>
                        <input type="checkbox" name="goals" value="Flexibility"> Flexibility <br>
                        <input type="checkbox" name="goals" value="General Fitness"> General Fitness <br>

                        <br>                           
                        
                        Do you have any food allergies? 
                        <input type="radio" name="allergies" value="yes"> Yes
                        <input type="radio" name="allergies" value="no"> No
                        <br><br>
                        <label for="restrict">Dietary Restrictions : </label>
                        <input type="text" id="restrict" name="restrict" class="long-input">                       
                        
                    </fieldset>

                    <br><br>

                    <fieldset>
                        <legend>Portal Information</legend>

                        <label for="username">Username</label>
                        <br>
                        <input type="text" id="username" name="username" placeholder="emma123" class="long-input" required>
                          
                        <br> 

                        <div class="box1">
                            <div class="subsection">
                                <label for="pw">Password</label>
                                <br>
                                <input type="password" id="pw" name="pw" class="long-input" required>
                            </div>

                            <div class="subsection">
                            
                                <label for="pw2">Re-enter Password</label>
                                <br>
                                <input type="password" id="pw2" name="pw2" class="long-input" required>
                            </div>
                        </div>

                        <script>
                            document.getElementById('registrationForm').addEventListener('submit', function(event) {
                                var passwordInput = document.getElementById('pw');
                                var confirmPasswordInput = document.getElementById('pw2');

                                var passwordValue = passwordInput.value;
                                var confirmPasswordValue = confirmPasswordInput.value;

                                if (passwordValue !== confirmPasswordValue) {
                                    event.preventDefault(); // Prevent form submission
                                    alert('Passwords do not match.'); // Display an error message
                                }
                            });
                        </script>

                    </fieldset>

                    <br><br>

                    <fieldset>
                        <legend>Payment Information</legend>

                        <div class="box1">
                            <div class="subsection">
                                <label for="cardnumber">Card Number</label>
                                <br>
                                <input type="text" id="cno" name="cno" class="long-input" style="width:350px;" placeholder="1234 5600 0014 5236" required >
                            </div>

                            <img src="images/visa.png" rel="visa icon" class="card-icon">
                            <img src="images/amex.png" rel="amex icon" class="card-icon">

                            <br><br>
                            <div class="subsection">
                                <label for="cardholder">Cardholder Name</label>
                                <br>
                                <input type="text" id="cardholder" name="cardholder" style="width:350px;" class="long-input" placeholder="Emma Smith" required>
                            </div>
                        </div>
                        

                        <br><br>

                        <div class="box1">

                

                            <div class="subsection">
                                <label for="expiry">Expiry Date</label>
                                <br>
                                <input type="date" id="expiry" name="expiry"  class="long-input" required>
                            </div>
                            
                            <div class="subsection">
                                <label for="cvv">CVV</label>
                                <br>
                                <input type="text" id="cvv" name="cvv" class="long-input" required>
                            </div>
                            
                        </div>

                    </fieldset>

                    <br><br>

                    <div class="btn-container">
                        <input type="button" value="Guidelines" class="button" onclick="showPopup(event)">
                        <input type="submit" value="Submit" class="button">
                        <input type="reset" value="Clear Form" class="button">

                    </div>

                    
                </form>


                <!--POPUP ON CLICKING GUIDELINES BUTTON-->
                <div id="popup" class="popup">
                    <!-- Popup content here -->
                    <h2>Hi,</h2>
                    <p>Follow these steps to register with us</p>

                    <table>
                        <tr>
                            <td style="width:100px;">Required : </td>
                            <td>Please fill out all the sections with * sign</td>
                        </tr>
                        
                        <tr>
                            <td>Email : </td>
                            <td>The email should be in the appropriate format<br>Ex: xxxxx@xxxx.xxx</td>
                        </tr>

                        <tr>
                            <td></td>
                            <td></td>
                        </tr>

                        <tr>
                            <br>
                        </tr>

                        <tr>
                            <td>Password :  </td>
                            <td>Passwords entered in both input fields should be the same<br>
                            Give a strong password with a combination of alphanumerics and special symbols</td>
                        </tr>

                        <tr>
                            <td>Age : </td>
                            <td>You should be 18+ to register with us</td>
                        </tr>

                        
                    </table>

                    <br><br><br>
                    <button onclick="hidePopup()" class="ok">OK</button>
                  </div>

            </div>
        </div>
        
    </body>
</html>