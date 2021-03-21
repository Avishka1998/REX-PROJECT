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
		<?php require_once('../../inc/cust_dash_navbar.php');?>
		<div class="secondary">
		  <div class="btnbox">
		    <a href="#finish">Finished >></a>
		    <a href="#upcoming">Up Coming >></a>
		  </div>
		</div>
								
		<div class="primary">
			<h1 id="finish" style="margin-left: 40px;">FINISHED</h1>
			<?php 
			  echo "<table>";
			  echo "<tr>";
			  echo "<td>"."</td>";
			  echo "<td>"."</td>";
			  echo "<td>"."</td>";
			  echo "</tr>";
			  echo "</table>";	
			?>
			
			<h1 id="upcoming" style="margin-left: 40px;">UP COMING</h1>
			<?php 
			  echo "<table>";
			  echo "<tr>";
			  echo "<td>"."</td>";
			  echo "<td>"."</td>";
			  echo "<td>"."</td>";
			  echo "</tr>";
			  echo "</table>";	
			?>
		</div>	
	

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>