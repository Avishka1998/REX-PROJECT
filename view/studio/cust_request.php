<?php
require_once('../../inc/connection.php');
session_start(); ?>

<!DOCTYPE html>
<html>
<head> 
	<meta charset="utf-8">
	<title>Pending Jobs</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/cust_request.css">
</head>  
<body>
	<h2 id="finish"></h2>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/stu_dash_navbar.php');?>
	</div>

	<div class="outer">
		<div class="secondary">
		<div class="short-cut">


			<div class="text">
							
				<a href="#finish">Up Coming >></a>
				<a href="#upcoming">Finished >></a>	
				
			</div>
		</div>
		</div>
		<div class="primary">
		<div class="request">

			<h1 id="finish" style="margin-left: 40px;">Up Coming</h1>
			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
						<div class="name">
							<h1>Nuwan Perera</h1>
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
							<p>2020/12/12<br>8.00 a.m</p>
						</div>
					</div>
					<div class="buton">
						<a href="cust_request_view.php" class="view" >View</a>
						  
						 
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
							<h1>Malith lakshan</h1>
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
							<p>2020/12/12<br>8.00 a.m</p>
						</div>
					</div>
					<div class="buton">
						<a href="cust_request_view.php" class="view" >View</a>
						  
						 
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
							<h1>Sadeepa Nuwan</h1>
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
							<p>2020/12/12<br>8.00 a.m</p>
						</div>
					</div>
					<div class="buton">
						<a href="cust_request_view.php" class="view" >View</a>
						  
						 
					</div>
				</div>
			
			</div>
			<h1 id="upcoming" style="margin-left: 40px;">Finished</h1>
			<div class="main-container">
				<div class="grid">
					<div class="pro-pic">
						<img src="../../img/customer/profile.jpg" >
					</div>
			 		<div class="details">
						<div class="name">
							<h1>Sunil Perera</h1>
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
							<p>2020/12/12<br>8.00 a.m</p>
						</div>
					</div>
					<div class="buton">
						<a href="cust_request_view.php" class="view" >View</a>
						<a href="#" class="view" >Finish</a>
						 
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
							<h1>Janaka Attanayaka</h1>
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
							<p>2020/12/12<br>8.00 a.m</p>
						</div>
					</div>
					<div class="buton">
						<a href="cust_request_view.php" class="view" >View</a>
						<a href="#" class="view" >Finish</a>
						
					</div>
				</div>
			
			</div>
			</div>
	</div>	
	

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>