<?php
require_once('../../inc/connection.php');
session_start(); ?>
<!DOCTYPE html>
<html>
<head>  
	<meta charset="utf-8">
	<title>Rate & Finish</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/view_pending.css">
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/cust_dash_navbar.php');?>
	</div>
	
	<div class="main-container">
		<div class="grid">
			<div class="pro-pic">
				<img src="../../img/customer/109815470-man-avatar-profile-male-face-icon-vector-illustration-.jpg" >
			</div>
			<div class="details">
				<div class="name">
					<h1>Davie 504</h1>
					<h2 style="align-content: center; padding-bottom: 0px;">davie@gmail.com</h2>
				</div>	
				<div class="buton">

					
					<button class="view" onclick="openForm()">Message</button>
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
		<div class="btn">
			<a href="pendings.php" class="view" >Rate & Finish</a>
			<a href="cust_complaint.php" class="complaint" >Complaint</a>
		</div>
		

		<div class="chat-popup" id="myForm">
		  <form action="/view_finished.php" class="form-container">
		    <h1>Studio Name</h1>

		    <label for="msg"><b>Message</b></label>
		    <textarea placeholder="Type message.." name="msg" required></textarea>

		    <button type="submit" class="btn" onclick="closeForm()">Send</button>
		    <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		  </form>
		</div>
	</div>

	
	<script>
		function openForm() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm() {
		  document.getElementById("myForm").style.display = "none";
		}
	</script>

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>