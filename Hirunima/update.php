<!DOCTYPE html>
<!--update.php-->
<html>
<head>
    <link href="f.css" rel="stylesheet">
    <link rel="stylesheet" href="headcss.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

  <link rel="stylesheet" href="footerStyle.css">
    <style>
      
   button[type= "submit"] {
      background-color: #5885AF;
      color: white;
      padding: 10px 20px;
      border: none;
      border-radius: 4px;
      cursor: pointer;
    }
    
    button[type="submit"]:hover {
      background-color: #45a049;
    }

    
    </style>
</head>
<body class = "body">

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

    <h1 class = "h1">Meal Selection Form</h1>
        <form action="update_process.php" method="post" class = "form">
    
           <label for ="name" class = "label"> 
                Name:<input type = "text" name = "name" value="<?php echo $_GET['name']; ?>"><br><br>
          
                <label for ="age" class = "label">
                Age: <input type="number" class="text" name="age" value="<?php echo $_GET['age']; ?>"><br><br>
           
           <label for ="weight" class = "label">
                Weight: <input type="number" class="text" name="weight" value="<?php echo $_GET['weight']; ?>"><br><br>
           
                <label for ="height" class = "label">
                Height: <input type="number" class="text" name="height" value="<?php echo $_GET['height']; ?>"><br><br>
            
            <label for = "meal" class = "label">How many meals do you have per day?
            <select  name="meals">
                <option value="1 meal" <?php if ($_GET['meals'] == "1 meal") echo "selected"; ?>>1 meal</option>
                <option value="2 meals" <?php if ($_GET['meals'] == "2 meals") echo "selected"; ?>>2 meals</option>
                <option value="3 meals" <?php if ($_GET['meals'] == "3 meals") echo "selected"; ?>>3 meals</option>
                <option value="4 meals" <?php if ($_GET['meals'] == "4 meals") echo "selected"; ?>>4 meals</option>
            </select><br><br><br>
            
            <input type="hidden" name="id" value="<?php echo $_GET['id']; ?>">
            <input type="hidden" name="selectedMeals" value="<?php echo $_GET['meals']; ?>">
            
            <button type="submit" name="submit">Update</button>
    
        </form>

<br><br><br>
    

</body>
</html>
