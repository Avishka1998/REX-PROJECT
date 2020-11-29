<?php 
require_once('../../inc/connection.php');
session_start(); 
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title>Customer Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/cust_dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<?php require_once('../../inc/cust_dash_navbar.php');?>
<div class="container">		
	<form action="../../controller/customer/cust_dash_controller.php" method="post">
  		<input type="text" name="search" placeholder="Search..">
		<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
			
			<label class="type">
               <input type="radio" id="all" name="type" value="all" checked="checked" class="option-input radio">All
            </label>
            <label class="type">
               <input type="radio" id="name" name="type" value="name" class="option-input radio">Name
            </label>
            <label class="type">
               <input type="radio" id="service" name="type" value="service" class="option-input radio">Service
            </label>
            <label class="type">
               <input type="radio" id="distric" name="type" value="distric" class="option-input radio">Distric
            </label>
	</form>
	
	<div class="row">
		<?php 
				$query="SELECT * FROM studio WHERE verified=1 AND email_verified=1";
				$result_set=mysqli_query($connection,$query);
				if($result_set){
					while($record =mysqli_fetch_assoc($result_set)){
						if($record['profile']){
							$profile =$record['profile'];
						}
						else{
							$profile = "studio1.png";
						}
						echo '<div class="column">'; 																			
									echo "<img src='../../img/studio/$profile' height='180' width='180' >";
									echo "<h4><a href='studio_prof.php?studio_id=$record[studio_id]'>$record[studio_name] </a><br></h4>";
									echo '<div class="rating">';
										echo '<span class="fa fa-star checked"></span>';
										echo '<span class="fa fa-star checked"></span>';
										echo '<span class="fa fa-star checked"></span>';
										echo '<span class="fa fa-star checked"></span>';
										echo '<span class="fa fa-star checked"></span>';
									echo '</div>';
							
						echo '</div>';
					}
					
					}					
		?>
	</div>

</div>	
<?php require_once('../../inc/minfooter.php'); ?>	
</body>
</html>