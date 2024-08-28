<!DOCTYPE html>
<html>
<head>
  <title>Cart</title>
  <link href="csstest.css" rel="stylesheet">
  <link href="footerStyle.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  
  
</head>
<body>

<!--logo-->
<div style="background-color:black;margin:0;">
  <img src="image/2.png"style="margin-left:30%;">
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
      <a href="clothing.html #section1">New Arrivals</a>
      <a href="clothing.html #section2">Men's Collection</a>
      <a href="clothing.html #section3">Woman's Collection</a>
	  
    </div>
  </div>
  
  <div class="dropdown">
    <button class="dropbtn" onclick="window.location.href='#';">Supplement</button>
    <div class="dropdown-content">
      <a href="Supplement.html #Section1">Protien</a>
      <a href="Supplement.html #Section">Pre Workout</a>
    </div>
   </div>
   
   
   <div class="cart" >
     <a href="../Samadi/loginpage.html"><i class="bi bi-person-circle"></i></a>
   </div>
  <div class="cart" >
    <a href="cart.php"><i class="bi bi-cart-fill"></i></a>
  </div>
</div>

  <h1>Your Cart</h1>
  <div>
    <?php
      /// Include the configuration file
      require_once 'config.php';

      // Check if the delete button is clicked
      if (isset($_POST['delete'])) {
        $id = $_POST['delete'];

        // Delete the item from the cart table based on the provided ID
        $deleteQuery = "DELETE FROM cart WHERE id = $id";
        $con->query($deleteQuery);
      }

      // Check if the update button is clicked
      if (isset($_POST['update'])) {
        $id = $_POST['update'];
        $quantity = isset($_POST['quantity'][$id]) ? $_POST['quantity'][$id] : 0; // Use $id as index

        // Update the quantity for the item in the cart table based on the provided ID
        $updateQuery = "UPDATE cart SET qty = $quantity WHERE id = $id";
        $con->query($updateQuery);
      }

      // Perform the SELECT query
      $query = "SELECT id, pname, qty, price FROM cart";
      $result = $con->query($query);

      // Check if the query was successful
      if ($result) {
          // Display the table header
          echo '
          <table class="show-item" style="width: 100%;">
              <tr>
                  <th>Product</th>
                  <th>Quantity</th>
                  <th>Price</th>
                  <th>Action</th>
              </tr>
          ';
          
          $subtotal = 0; // Initialize subtotal variable

          
          // Loop through the rows and display the cart items
          while ($row = $result->fetch_assoc()) {
              // Calculate the subtotal for each row
			    
              $subtotalRow = $row['qty'] * $row['price'];
              
              echo '
                <tr>
                    <td>' . $row['pname'] . '</td>
                    <td>
                        <form class="update-form" method="post">
                            <input type="number"  max= "10" name="quantity[' . $row['id'] . ']" value="' . $row['qty'] . '" class="locked-quantity" disabled>
                    </td>
                    <td>' . $row['price'] . '</td>
                    <td>
                        <button class="update-btn" name="update" value="' . $row['id'] . '">Update</button> 
                        <button class="confirm-btn" onclick="enableQuantity(event, ' . $row['id'] . ')">Edit</button> 
                        <button class="delete-btn" name="delete" value="' . $row['id'] . '">Remove</button>
                        </form>
                    </td>
					
                </tr>
                ';
              // Add the row subtotal to the overall subtotal
              $subtotal += $subtotalRow;
          }
          if($subtotal ==0)
          {
            echo '<div style="border:solid gray;padding-left:30px;max-width:300px;" class="center">
			<div style="display:inline;"> 
			
			<div style="display:inline-block;">
			<h2 style="font-size:37px;">HI<h2>
			</div>
			
			<div style="display:inline-block;"><span><img src="image/robot.png" width="40" height="35" ></span></div>
			
			</div>
			<h3>Your cart is empty</h3><br>
            <a href="test.html" class="add-cart">shop Clothings</a>
			<a href="Supplement.html" class="add-cart">shop Supplements</a><br><br><br>
			</div><br><br><br>';
			
			}
          // Close the table
          echo '</table>';

          // Calculate the total by adding the subtotal and the delivery charge
          $total = $subtotal + 2;

          // Display the subtotal and total
          echo '
		  <div style="display:inline;width:100%;" class="align-form">
			  <div style ="display:inline-block;>
			  
			    <!--display cart details-->
                <form method="post">
				
				  <fieldset class="summary">
					<legend><h2>Summary</h2></legend>
					<table border="0">
					<tr>
					<td>
					<p>Sub-total</td>
					 <td> <input type="text" name="subtotal" pattern="[0-9]+" value="$' . $subtotal . '" readonly class="readonly-content"></p></td>
					
					</tr>
					
					<tr>
					<td>
					<p>Delivery charge</td>
					
					<td>
					  <input type="text" value="$2" name="dcharge" readonly></p></td>
					  
					  
					</tr>
					
					<tr>
					
					<td>
					<p><strong>Total</strong></td>
					
					<td>
					  <input style ="font-size: 23px;font-weight:bold;"type="text" name="total" value="$' . $total . '" readonly></p>
					</td>
					
					</tr>
					
					</table>
				
				  </fieldset>
				  
				</form> 
           
				</div>
				
			 <div style ="display:inline-block;padding:30px;margin-left:150px;" class="center">
			    
				<!--get user details-->
				  <form method="post" action="insert_payment.php">
				  <fieldset class="pay-now">
					<legend><h2>Pay Now</h2></legend>
					
		
					  
					  <label for="name"> Name</label><br>
					  <input type="text" name="name" required placeholder="Your Name">
					 
				  
					  <br><br>
					  <label for="email">Enter email addresses:</label><br>
					  <input type="email" id="email" name="email" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}$" required placeholder ="Your email (ex:abc.gmail.com)">
					  <br><br>

					  <label for="address">Enter delivery address</label><br>
					  <textarea cols="50" rows="3" id="address" name="address" required placeholder="Your Address"></textarea>
						<br><br> 

					  <label for="cno">Enter card number:</label><br>
					  <input type="text" id="cno" name="cno" required>
					  <br><br>

					  <label for="email">Enter CVC:</label><br>
					  <input type="text" id="cvc" name="cvc" required>
					  <br><br>

					  <label for="email">Enter EXP Date:</label><br>
					  <input type="date" id="expdate" name="expdate" required>
					  <br><br>
					  <input type="submit" class="pay-btn" id="pay-btn" name="submitbtn" value="PAYBTN" >
					  <br><br>

				   
				  </fieldset>
			  
			      </form>
			  </div>
		  </div>
          ';
      } else {
          // Display an error message if the query fails
          echo 'Error: ' . $con->error;
      }

      // Close the database connection
      $con->close();
    ?>
 </div>
 
<!--enable quantity button-->
   <script>
  function enableQuantity(button) {
    var row = button.parentNode.parentNode;
    var quantityInput = row.querySelector('input[name="quantity[]"]');
    quantityInput.disabled = false;
  }


  function enableQuantity(event, id) {
    event.preventDefault();
    const quantityInput = document.querySelector(`input[name="quantity[${id}]"]`);
    quantityInput.disabled = false;
  }
</script>

<!--References : https://alvarotrigo.com/blog/disable-button-javascript/#:~:text=To%20disable%20a%20button%20using,disabled%20JavaScript%20property%20to%20false%20-->


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
                                <img src="image/whatsapp.png" rel="whatsapp icon" class="sm">
                            </a>

                        </div> 
                        
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="image/facebook.png" rel="fb icon" class="sm">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="image/instagram.png" rel="ig icon" class="sm">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="image/twitter.png" rel="linkedin icon" class="sm">
                        </a>
                    </li>

                    <li>
                        <a href="" target="_blank">
                            <img src="image/youtube.png" rel="yt icon" class="sm">
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

<!--References : 
  https://youtu.be/SlF1VNXHD1o
  https://youtu.be/72U5Af8KUpA
-->
