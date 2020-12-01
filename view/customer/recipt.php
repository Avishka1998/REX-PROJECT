<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment Successful</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/recipt.css">
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/cust_dash_navbar.php');?>
	</div>
	<div class="body">
		<div class="main-container">
			<div class="sub-cont">
				<h1>Payment Successful..!</h1>
				<h3>Studio Details</h3>
				<div class="grid">
					<div class="box1">
						<h2>Studio name </h2>
					</div>
					<div class="box2">
						<h2>: Lowe Production Studio</h2>
					</div>
				</div>
				<div class="grid">
					<div class="box1">
						<h2>Studio Address </h2>
					</div>
					<div class="box2">
						<h2>: No 15, Main street, Thanna, Balangoda</h2>
					</div>
				</div>
				<div class="grid">
					<div class="box1">
						<h2>Studio Contact No. </h2>
					</div>
					<div class="box2">
						<h2>: 0775556428</h2>
					</div>
				</div>
				<div class="grid">
					<div class="box1">
						<h2>Email </h2>
					</div>
					<div class="box2">
						<h2>: studio@gmail.com</h2>
					</div>
				</div>
				<h3>Services</h3>
				<div class="grid">
					<div class="box1">
						<h2>Recording </h2>
					</div>
					<div class="box2">
						<h2>: 8 hours X LKR 2500/=</h2>
					</div>
				</div>
				<div class="grid">
					<div class="box1">
						<h2>Mixing </h2>
					</div>
					<div class="box2">
						<h2>: LKR 10000/=</h2>
					</div>
				</div>
				<div class="grid">
					<div class="box1">
						<h2>Mastering </h2>
					</div>
					<div class="box2">
						<h2>: LKR 7000/=</h2>
					</div>
				</div>
				<h3>Audio Gears</h3>
				<div class="grid">
					<div class="box1">
						<h2>Neumann M 150 Tube </h2>
					</div>
					<div class="box2">
						<h2>: LKR 5000/=</h2>
					</div>
				</div>
				<div class="grid">
					<div class="box1">
						<h2>Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo </h2>
					</div>
					<div class="box2">
						<h2>: LKR 7500/=</h2>
					</div>
				</div>
				<div class="grid" style="padding-left: 1%;">
					<div class="box1">
						<h3>Total </h3>
					</div>
					<div class="box2">
						<h3>: LKR 44500/=</h3>
					</div>
				</div>
				<div class="btn">
					<a href="cust_dash.php" class="back" >Finish</a>
				</div>
			</div>
		</div>
	</div>

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>