<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Customer Request</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/cust_request_view.css">
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/stu_dash_navbar.php');?>
	</div>
	
	<div class="main-container">
		<div class="grid">
			<div class="pro-pic">
				<img src="../../img/customer/109815470-man-avatar-profile-male-face-icon-vector-illustration-.jpg" >
			</div>
			<div class="details">
				<div class="name">
					<h1>Sasindu Subodhaka</h1>
					<h2 style="align-content: center; padding-bottom: 0px;">sasindu@gmail.com</h2>
				</div>	
				<div class="buton">

					<a href="paypal.php" class="view" >Message</a>
				</div>			
			</div>			
		</div>
		<div class="mid-cont">
			<div class="service">
								
				<ul>
				<h2>Services</h2>
				  <li>Recording</li>
				  <li>Mixing</li>
				  <li>Mastering</li>
				  <li>Mixing</li>
				</ul>
			</div>
			<div class="gear">
				
				<ul>
				<h2>Audio Gears</h2>
					<li>Neumann M 150 Tube</li>
					<li>Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</li>
				</ul>
			</div>
		</div>
		<div class="rest">
			<h2>Date & Time</h2>
			<ul>
				<li>2020/12/12</li>
				<li>8.00 - 14.00</li>
			</ul>
		</div>
		<div class="rest">
			<h2>Advance Payment</h2>
			<h3>LKR 15000/=</h3>
			
		</div>
		<a href="cust_request.php" class="view" >Ok</a>
	</div>
	


		
	
	




	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>