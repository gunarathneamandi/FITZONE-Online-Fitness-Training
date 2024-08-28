<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>my webpage</title>
<style>

.wrap{
	width:1200px;             
	margin:10px;
	background:#ddd;
}
.header{
	height:200px;
	background:#333;
}
.nav{
	height:50px;
	background:#000;
}
.container{
	background:#ccc;
}
.left{
	width:70%;
	height:500px;
	float:left;
	background:red;
}
.right{
	width:70%;
	height:200px;
	float:center;
}
.clear{
	clear:both; 
	height: 500px;
	background-color:black
}


.left{
	width:30%;
	height:200px;
	float:left;
	background:white;
}
.right{
	width:40%;
	height:100px;
	float:left;
	background:#333;
}

.h5{
	
	font-family:calibri;
	color: green;
	
	font-size:34px;
	display: flex;
  justify-content: center;
  align-items: center;
	}
	
.health{
	font-family:calibri;
	weight:bold;
	font-size:24px;
	
	
	}
ul li::marker {
  color: green; 
}

.container1{
	float: right;
  width: 33.33%;
  padding: 5px;
	position:relative;
	

}

.text-block{
	position:absolute;
	bottom: 10px;
	color: white;
	padding-right: 128px;
	padding-right:128px;
	background-color:#1DB954;
	opacity:.8;
}

.text-block1{
	position:absolute;
	bottom: 10px;
	color: white;
	padding-right: 128px;
	padding-right:128px;
	background-color:black;
	opacity:.8;
}

.b{
		
		background-color: #1DB954;
		color: black;
		border: none;
        padding: 10px;
        font-size: 16px;
        border-radius: 5px;
        cursor: pointer;
}

.a{
 text-decoration:none;
 color:white;
 }

 

</style>
<head>
<body>
	<?php 
	echo "hello world";
	?>
	<div class="wrap">
		<div class = "header">Try to aviod caffein in the morning and drink a big glass of water.</li>
					<li class = "li"> Never skip your breakfast and make sure to have it on time.</li>
					<li class = "li"> Try to avoid sugary food for snacks and have fruits and nuts instead</li>
					<li class = "li"> Make sure to st</div>
		<div class="left">
			<h1 class = "h5"> Health tips </h1><br><br>
			<ul class = "health">
					<li class = "li"> Try to aviod caffein in the morning and drink a big glass of water.</li>
					<li class = "li"> Never skip your breakfast and make sure to have it on time.</li>
					<li class = "li"> Try to avoid sugary food for snacks and have fruits and nuts instead</li>
					<li class = "li"> Make sure to stay hydrated; drink a lot of water and liquids</li>
					<li class = "li"> Have a fixed sleeping routine and have atleast 6 hours sleep </li>
					<li class = "li"> Try to engage in regular exercises or atleast have a good walk to stay fit</li>
					<li class = "li"> Avoid alchohol </li>
					<li class = "li"> Practice a proper posture</li>
				</ul>
				<button class = "b" >
	<a class = "a"href = "f.html" color="black" font = "17">
		 Get a personlaized diet plan</button>
	</a>
	</div>
			
		<div class="right" class = "container1" class = "text-block">
			<img src = "images/regg.jpeg" >
		</div>
	
		
	
	
	<div class = "container1" >
		
		<div class = "text-block">
			<h3 align = "center"> Get a recommended meal plan for week</center><h3>
			<h4><a class = "a" href = "breakfast.html">Breakfast</a></h4>
			<h4><a class = "a" href = "lunch.html">Lunch</a></h4>
			<h4><a class = "a" href = "dinner.html">Dinner</a></h4>
			<h4><a class = "a" href = "snack.html">Snack</a></h4>
		</div>
		</div>
		
	
		
		<!--<div class="container">
			<div class="right">8888</div>
			<div class="right">4</div>-->
			<!--<div class="right"></div>
		</div>
		<div class="right">6</div>-->
	
	
	<!--<div class = "container1" >
		<a href = "breakfast.html"><img src = "images/a1.jpeg" width = "300" height = "200"></a>
		<div class = "text-block">
			<h4>Breakfast</h4>
		</div>
		</div>
	
	<div class ="container1" >
	<a href = "breakfast.html"><img src = "images/a2.jpeg" width = "300" height = "200"></a>
		<div class = "text-block">
			<h4>Lunch</h4>
		</div>
	</div>
	
	
	
	<div class = "container1">
		<a href = "breakfast.html"><img src = "images/a3.jpeg" width = "300" height = "200"></a>
		<div class = "text-block">
			<h4>Dinner</h4>
		</div>
	</div>
	
	
	<div class = "container1">
		<a href = "breakfast.html"><img src = "images/avacado.jpeg" width = "300" height = "200"></a>
		<div class = "text-block">
			<h4>Snacks</h4>
		</div>
	</div>-->
	
	
	
	
	
	
	
	

</body>
</html>