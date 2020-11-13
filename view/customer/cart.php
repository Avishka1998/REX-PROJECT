<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/cart.css">
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/cust_dash_navbar.php');?>
	</div>

	<div class="body">
		<div class="main-container">
			<div class="sub-cont">
				<h1>Lowe Production Studio</h1>
				<h2>Date & Time</h2>
				<div class="grid">
					<div class="box1"><h3>2020/12/15</h3></div>
					<div class="box2"><h3>8.00 - 14.00</h3></div>
					<div class="box3">
						<a href="select_date.php" class="edit" >Edit</a>
					</div>
				</div>
				<h2>Services</h2>
				<div class="grid">
					<div class="box1"><h3>Recording</h3></div>
					<div class="box2"><h3>LKR 2500/= Per hour</h3></div>
				</div>
				<div class="grid">
					<div class="box1"><h3>Mixing</h3></div>
					<div class="box2"><h3>LKR 10000/=</h3></div>
				</div>
				<div class="grid">
					<div class="box1"><h3>Mastering</h3></div>
					<div class="box2"><h3>LKR 7000/=</h3></div>
					<div class="box3">
						<a href="select_service.php" class="edit" >Edit</a>
					</div>
				</div>

				<h2>Audio Gears</h2>
				<div class="grid">
					<div class="box1"><h3>Neumann M 150 Tube</h3></div>
					<div class="box2"><h3>LKR 5000/=</h3></div>
				</div>
				<div class="grid">
					<div class="box1"><h3>Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</h3></div>
					<div class="box2"><h3>LKR 7500/=</h3></div>
					<div class="box3">
						<a href="select_service.php" class="edit" >Edit</a>
					</div>
				</div>
				<br>
				<h2>Total   :   LKR 44500/=</h2>

				<div class="row grid">
					
						<a href="paypal.php" class="pay" >Pay</a>
						<a href="studio_prof.php" class="cancel" >Cancel</a>
					
				</div>

				
			</div>
		</div>
	</div>
	
	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>