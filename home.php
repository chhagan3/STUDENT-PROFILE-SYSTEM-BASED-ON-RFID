<?php
	$Write="<?php $" . "UIDresult=''; " . "echo $" . "UIDresult;" . " ?>";
	file_put_contents('UIDContainer.php',$Write);
?>

<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<meta charset="utf-8">
		<link href="css/bootstrap.min.css" rel="stylesheet">
		<script src="js/bootstrap.min.js"></script>
		<style>
		html {
			font-family: Arial;
			display: inline-block;
			margin: 0px auto;
			text-align: center;
		}

		ul.topnav {
			list-style-type: none;
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: blue;
			width: 80%;
		}

		ul.topnav li {float: left;}

		ul.topnav li a {
			display: block;
			color: white;
			text-align: center;
			padding: 14px 16px;
			text-decoration: none;
		}

		ul.topnav li a:hover:not(.active) {background-color: #3e8e41;}

		ul.topnav li a.active {background-color: #333;}

		ul.topnav li.right {float: right;}

		@media screen and (max-width: 600px) {
			ul.topnav li.right, 
			ul.topnav li {float: none;}
		}
		
		img {
			display: block;
			margin-left: auto;
			margin-right: auto;
		}
		.des{
			margin: auto;
			padding: 0;
			overflow: hidden;
			background-color: blue;
			width: 80%;
            color: white;
            height: 80px;
            position: relative;
            margin-top: 180px;

		}
		.Prin{
			position: relative;
			
			width: 57%;
			margin-left: 33%;
			margin-top: -280px;
		}
		.nm{
			color: blue;
			font-size: 30px;
			font-family: "Bahnschrift SemiBold";
		}
		.nm1{
			color: blue;
			font-size: 20px;
			font-family: "Bahnschrift SemiBold";
		}
		.ab{
			font-size: 20px;
			font-family: "Bahnschrift SemiBold";
			text-align: justify;
		}
		.btn{
			background: #F4BF00;
			width: 150px;
			height: 50px;
			color: Black;
			font-weight: bold;
		}
		.btn:hover:not(.active) {
			background: blue;
			color: white;
		}
		</style>
		
		<title>TAE</title>
	</head>
	
	<body>
		<h2>KJEs's Trinity Academy of Engineering,Pune<br>
		Students Profile System Based on RFID </h2>
		<ul class="topnav">
			<li><a class="active" href="home.php">Home</a></li>
			<li><a href="user data.php">User Data</a></li>
			<li><a href="registration.php">Registration</a></li>
			<li><a href="read tag.php">Read Tag ID</a></li>
			<li><a href="mca.php">MCA</a></li>
		</ul>
		<br>
		<h3>Welcome to Master Of Computer Application Department</h3>
		
		<img src="img/tae.jpg" alt="" style="width:80%;"><br>
		<img src="img/about.png" width="300px" height="300px" style="margin-left: 10%;">
		
	<div class="Prin"><span class="nm">PRINCIPAL'S MESSAGE</span><br><span class="nm1">
		KJEI’s Trinity Academy of Engineering is established in 2010
	</span><br><br>
	<span class="ab">
		It gives me a great pleasure to be associated with Kalyan Jadhav Educational Institutes. I warmly welcome you to KJEI's Trinity Academy of Engineering. KJ's Educational Institutes is established in the year 2005 with excellent infrastructure spread over 108 acres of green campus with spacious buildings having backdrop of Sahyadri hills.

<br><br>
<a href="know.php"><button class="btn">
	KNOW MORE
</button></a>
	</span> 
	</div>
		
		<br>
		
	</body>
</html>