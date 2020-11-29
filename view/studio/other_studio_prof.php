<?php
require_once('../../inc/connection.php');
session_start();

if(isset($_GET['studio_id'])){
	//echo $_GET['studio_id'];
	$query="SELECT * FROM studio WHERE studio_id=$_GET[studio_id]";
	$result_set=mysqli_query($connection,$query);
	if($result_set){
		$studio_record=mysqli_fetch_assoc($result_set);
		$studio_id=$studio_record['studio_id'];
		$_SESSION['studio_id']=$studio_id;
		// $_SESSION['user_id'];
		//get cover photo and profile photo if they are exist 
		if($studio_record['cover']){
			$cover_url="../../img/studio/$studio_record[cover]"; //get the cover path 	
		}
		else{
			$cover_url="../../img/studio/studio_cover.jpg"; //get the default photo	
		}
		if($studio_record['profile']){
			$profile_url="../../img/studio/$studio_record[profile]"; //get the profile path
		}
		else{
			$profile_url="../../img/studio/studio_profile.jpg"; //get the profile path
		}
		
		$studio_name=$studio_record['studio_name'];//ge studio name
		$description = $studio_record['description'];

		$query2 = "SELECT * FROM studio_portfolio WHERE studio_id = '$studio_id'";
		$result_set2 = mysqli_query($connection,$query2);
		$port_record = mysqli_fetch_assoc($result_set2);
	} 
}



?>
<!DOCTYPE html>
<html>
<head>
	<title>Studio</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/studio_prof.css">
	<script src="https://kit.fontawesome.com/a076d05399.js"></script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRPjxeL78zpFysY_Im4Me74oUEdH9-PFc&callback=initMap&libraries=&v=weekly" defer></script>
</head>
<body>
	<div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>
	<main>
	<div class="container">
		<div class="cover" style="background-image: url(<?php echo $cover_url?>);">
		  
		  
		  <div class="pic" style="background-image: url(<?php echo $profile_url?>);"></div>
		  <p><?php echo $studio_name ?></p>
		</div>
	</div>
	<div class="container" id="description">
	  <p><?php echo $description;?></p>
	</div>

	<div class="container details">
		  <h2>Details</h2>
		  <div class="detailist">	  	
          <div class="place">
            <span class="fas fa-map-marker-alt"></span>
            <span class="text"><?php echo $studio_record['s_address_line1'].', '.$studio_record['s_address_line2'].', '.$studio_record['s_city'].'.';?></span>
		  </div>
		  <div class="phone">
            <span class="fas fa-phone-alt"></span>
            <span class="text"><?php echo $studio_record['s_tele_no']; ?></span>
		  </div>
		  <div class="email">
            <span class="fas fa-envelope"></span>
            <span class="text"><?php echo $studio_record['s_email']; ?></span>
		  </div>
		  </div>
	
		  <script>
		  function initMap() {
  			const stu = {lat: <?php echo $studio_record['latitude'];?>, lng: <?php echo $studio_record['longitude'];?>};
  			const map = new google.maps.Map(document.getElementById("map"), {
    		  zoom: 20,
    		  center: stu,
  			});
  			const marker = new google.maps.Marker({
      		  position: stu,
      		  map: map,
  			});	  
		  }
		  </script>
		  <div id="map"></div> 
	</div>

	<div class="container" style="top: 10%; padding-bottom: 5%">
		<h2>Services</h2>
		<div class="service clearfix">
		  <a href="#">Recording</a>
		  <a href="#">Mixing</a>
		  <a href="#">Dubbing</a>
		</div>
	</div>

	<div class="container portfolio">
		<h2>Portfolio</h2>
		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/<?php echo $port_record['port1']?>" type="video/mp4">
		</iframe>
		</div> 
		
		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/<?php echo $port_record['port2']?>" type="video/mp4">
		</iframe>
		</div>  
		
		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/<?php echo $port_record['port3']?>" type="video/mp4">
		</iframe>  
		</div>

		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/<?php echo $port_record['port4']?>" type="video/mp4">
		</iframe>
		</div>  
	</div>

	</main>
	<?php require_once('../../inc/minfooter.php');?>
</body>
</html>