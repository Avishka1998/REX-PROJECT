<?php
require_once('../../inc/connection.php');
session_start(); ?>

<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Pending Jobs</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/pendings.css">
</head>  
<body>
	<h2 id="finish"></h2>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/cust_dash_navbar.php');?>
	</div>

	<div class="outer">
		<div class="secondary">
		<div class="short-cut">


			<div class="text">
								
				<a href="#finish">Finished >></a>
				<a href="#upcoming">Up Coming >></a>
			</div>
		</div>
		</div>
		<div class="primary">
		<div class="request">

			<h1 id="finish" style="margin-left: 40px;">Finished</h1>
			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
						<div class="name">
							<h1>Stargate studio</h1>
						</div>
						<div class="mid-cont">
							<div class="service">
								<h2>Services</h2>
								<p>* Recording<br>* Mixing<br>* Mastering<br>* Mixing</p>
							</div>
							<div class="gear">
								<h2>Audio Gears</h2>
								<p>* Neumann M 150 Tube<br>* Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</p>
							</div>
						</div>
						
						<div class="rest">
							<h2>Date & Time</h2>
							<p>2020/12/12<t>8.00</p>
						</div>
					</div>
					<div class="buton">
						<a href="view_finished.php" class="view" >View</a>
						<a href="#" class="view" >Rate & Finish</a>
						<a href="cust_complaint.php" class="complaint" >Complaint</a>
					</div>
				</div>
			
			</div>
			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
						<div class="name">
							<h1>Lowe Productions</h1>
						</div>
						<div class="mid-cont">
							<div class="service">
								<h2>Services</h2>
								<p>* Recording<br>* Mixing<br>* Mastering<br>* Mixing<br>* Mixing</p>
							</div>
							<div class="gear">
								<h2>Audio Gears</h2>
								<p>* Neumann M 150 Tube<br>* Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</p>
							</div>
						</div>
						
						<div class="rest">
							<h2>Date & Time</h2>
							<p>2020/12/12<t>8.00</p>
						</div>
					</div>
					<div class="buton">
						<a href="view_finished.php" class="view" >View</a>
						<a href="#" class="view" >Rate & Finish</a>
						<a href="cust_complaint.php" class="complaint" >Complaint</a>
					</div>
				</div>
			
			</div>
			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
						<div class="name">
							<h1>Hybrid Studio</h1>
						</div>
						<div class="mid-cont">
							<div class="service">
								<h2>Services</h2>
								<p>* Recording<br>* Mixing<br>* Mastering<br>* Mixing<br>* Mixing</p>
							</div>
							<div class="gear">
								<h2>Audio Gears</h2>
								<p>* Neumann M 150 Tube<br>* Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</p>
							</div>
						</div>
						
						<div class="rest">
							<h2>Date & Time</h2>
							<p>2020/12/12<t>8.00</p>
						</div>
					</div>
					<div class="buton">
						<a href="view_finished.php" class="view" >View</a>
						<a href="#" class="view" >Rate & Finish</a>
						<a href="cust_complaint.php" class="complaint" >Complaint</a>
					</div>
				</div>
			
			</div>
			<h1 id="upcoming" style="margin-left: 40px;">Up Coming</h1>
			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
						<div class="name">
							<h1>Master Sound</h1>
						</div>
						<div class="mid-cont">
							<div class="service">
								<h2>Services</h2>
								<p>* Recording<br>* Mixing<br>* Mastering<br>* Mixing<br>* Mixing</p>
							</div>
							<div class="gear">
								<h2>Audio Gears</h2>
								<p>* Neumann M 150 Tube<br>* Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</p>
							</div>
						</div>
						
						<div class="rest">
							<h2>Date & Time</h2>
							<p>2020/12/12<t>8.00</p>
						</div>
					</div>
					<div class="buton">
						<a href="view_ongoing.php" class="view" >View</a>
						<a href="cust_complaint.php" class="complaint" >Complaint</a>
					</div>
				</div>
			
			</div>

			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
	 					<div class="name">
							<h1>Sumiga Records</h1>
						</div>
						<div class="mid-cont">
							<div class="service">
								<h2>Services</h2>
								<p>* Recording<br>* Mixing<br>* Mastering<br>* Mixing<br>* Mixing</p>
							</div>
							<div class="gear">
								<h2>Audio Gears</h2>
								<p>* Neumann M 150 Tube<br>* Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</p>
							</div>
						</div>
						
						<div class="rest">
							<h2>Date & Time</h2>
							<p>2020/12/12<t>8.00</p>
						</div>
					</div>
					<div class="buton">
						<a href="view_ongoing.php" class="view" >View</a>
						<a href="cust_complaint.php" class="complaint" >Complaint</a>
					</div>
				</div>
			
			</div>
			</div>
	</div>	
	

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>