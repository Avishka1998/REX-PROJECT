<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../css/cust_dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php require_once('../../inc/cust_dash_navbar.php');?>
<div class="container">	 
	<div class="0">
	<form action="../../controller/customer/cust_dash_controller.php" method="post">
  		<input type="text" name="search" placeholder="Search..">
		<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
	</form>
	</div>

	<div class="row">
  		<div class="column">
  			<img src="../../img/studio1.png">
  			<h3>Stuido 1</h3>
  			<div class="rating">
	  			<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
			</div>
  		</div>
  		<div class="column">
  			<img src="../../img/studio2.png">
  			<h3>Stuido 2</h3>
  			<div class="rating">
	  			<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
			</div>
  		</div>
  		<div class="column">
  			<img src="../../img/studio3.png">
  			<h3>Stuido 3</h3>
  			<div class="rating">
	  			<span class="fa fa-star checked"></span>
				<span class="fa fa-star checked"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
				<span class="fa fa-star"></span>
			</div>
  		</div>
	</div>

</div>	
<?php require_once('../../inc/minfooter.php'); ?>	
</body>
</html>