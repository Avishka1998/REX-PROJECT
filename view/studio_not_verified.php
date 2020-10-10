<!DOCTYPE html>
<html>
<head>
	<title>Details are not verified..!</title>
	<?php require_once('../inc/navbar.php'); ?>

	<style>
		
		body{
		  background-image:linear-gradient(rgba(255,255,255,0.25),rgba(51, 153, 255,0.25)), url('../img/studio-mic.jpg');
		  background-size: cover;
		  background-position: center center;
		  background-repeat: no-repeat;
		  background-attachment: fixed;
		}

		.textbox{
			padding-top: 15%;
			text-align: center;
			font-family: cursive;
			font-size: 30px;
			color: white;
			padding-bottom: 5%;
		}

		.button-container{
			padding-left: 45%;
			
		}

		.button {

			background-color: #1AB2E7;
			border: none;
			color: white;
			padding: 2% 2%;
			text-align: center;
			text-decoration: none;
			display: inline-block;
			font-family: sans-serif;
			font-size: 100%;
			margin: 4px 2px;
			cursor: pointer;

		}
		
	</style>
</head>
<body>
	<div class="textbox">
		<h1>Your Details are not Vrified <br></h1> 
		We will notify after verifying your details
	</div>
	<div class="button-container">
		<a href="home.php" class="button">Back to Home</a>
	</div> 

</body>
</html>