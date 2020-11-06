<?php 
require_once('../../inc/connection.php');
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/edit_studio_details.css">
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDRPjxeL78zpFysY_Im4Me74oUEdH9-PFc&callback=initMap&libraries=&v=weekly" defer></script>

</head>
<body>
	<div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>

	<?php 	
	  $query="SELECT * FROM studio WHERE studio_id = $user_id"; //query to get data of the logged studio ($user id is included from studio_dash_navbar.php)
	  $result_set=mysqli_query($connection,$query);
	  if($result_set){
		$record = mysqli_fetch_assoc($result_set);		
		}
		
	  $query2 = "SELECT * FROM owner INNER JOIN studio ON studio.owner_id = owner.owner_id WHERE studio.studio_id = $user_id";
	  $result_set2 = mysqli_query($connection,$query2);
	  if($result_set2){
		$record2= mysqli_fetch_assoc($result_set2);
	  }	
	?>
	
	<div class="row">
		<div class="pro-pic">
			<label for="myfile"><img src="../../img/customer/584abf432912007028bd9337.png" alt=""></label>
			<input type="file" id="myfile" class="my_file" hidden="true">
		</div>

		<div class="error">
	      <?php
			if(isset($_GET['errors']) && !empty($_GET['errors'])){
			  $str_arr = unserialize(urldecode($_GET['errors']));
    		  foreach($str_arr as $error){
				echo $error . '<br>';
				}
			}
		  ?>
		</div>

		<h1>Studio Details</h1>
		
		<button class="open-button" onclick="openForm1()">Edit</button>
		<h2>Name : <?php echo $record['studio_name']; ?></h2>

		<div class="form-popup" id="nameForm">
		  <form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">  

		    <label for="name"><b>Studio Name</b></label>
		    <input type="text" value="<?php echo $record['studio_name']; ?>"  name="name">

		    <button type="submit_name" class="btn" name="submit_name">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm1()">Close</button>
		  </form>
		</div>	
		<script>
		function openForm1() {
		  document.getElementById("nameForm").style.display = "block";
		}

		function closeForm1() {
		  document.getElementById("nameForm").style.display = "none";
		}
		</script>

		
		<button class="open-button" onclick="openForm2()">Edit</button>
		<h2>Contact No : <?php echo $record['s_tele_no'] ?></h2>
		<div class="form-popup" id="noForm">
		  <form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">
		    
		    <label for="text"><b>Contact No</b></label>
		    <input type="text" value="<?php echo $record['s_tele_no'];?>" name="tele_no" >

		    <button type="submit_phone" class="btn" name="submit_phone">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
		  </form>
		</div>
		<script>
		function openForm2() {
		  document.getElementById("noForm").style.display = "block";
		}

		function closeForm2() {
		  document.getElementById("noForm").style.display = "none";
		}
		</script>	


		<button class="open-button" onclick="openForm3()">Edit</button>
		<h2>Address : <?php echo $record['s_address_line1']. ', '. $record['s_address_line2']. ', '. $record['s_city']. ', '. $record['distric']. '.'; ?></h2>
		<div class="form-popup" id="addForm">
		  <form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">
		    
		    <label for="text"><b>Address Line 1</b></label>
		    <input type="text" value="<?php echo $record['s_address_line1']; ?>" name="add_1" >
		    <label for="text"><b>Address Line 2</b></label>
		    <input type="text" value="<?php echo $record['s_address_line2']; ?>" name="add_2" >
		    <label for="text"><b>City</b></label>
		    <input type="text" value="<?php echo $record['s_city']; ?>" name="City" >
		    <label for="text"><b>District</b></label>
		    <input type="text" value="<?php echo $record['distric']; ?>" name="dist" >
		    <label for="text"><b>Postal Code</b></label>
		    <input type="text" value="<?php echo $record['postalcode']; ?>" name="post_code" >

		    <button type="submit_address" class="btn" name="submit_address">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
		  </form>
		</div>
		<script>
		function openForm3() {
		  document.getElementById("addForm").style.display = "block";
		}

		function closeForm3() {
		  document.getElementById("addForm").style.display = "none";
		}
		</script>
		
		<h1>Owner Details</h1>
		<button class="open-button" onclick="openForm4()">Edit</button>
		<h2>Name : <?php echo $record2['first_name']. ' '. $record2['last_name']; ?></h2>

		<div class="form-popup" id="ownameForm">
		  <form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">  

		    <label for="first_name"><b>First name</b></label>
		    <input type="text" value="<?php echo $record2['first_name']; ?>"  name="first_name">
		    <label for="last_name"><b>Last name</b></label>
		    <input type="text" value="<?php echo $record2['last_name']; ?>"  name="last_name">

		    <button type="submit_name" class="btn" name="submit_ow_name">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm4()">Close</button>
		  </form>
		</div>	
		<script>
		function openForm4() {
		  document.getElementById("ownameForm").style.display = "block";
		}

		function closeForm4() {
		  document.getElementById("ownameForm").style.display = "none";
		}
		</script>


		<button class="open-button" onclick="openForm5()">Edit</button>
		<h2>Contact No : <?php echo $record2['tp_number']; ?></h2>
		<div class="form-popup" id="ownoForm">
		  <form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">
		    
		    <label for="text"><b>Contact No</b></label>
		    <input type="text" value="<?php echo $record2['tp_number']; ?>" name="owtele_no" >

		    <button type="submit_phone" class="btn" name="submit_ow_phone">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm5()">Close</button>
		  </form>
		</div>
		<script>
		function openForm5() {
		  document.getElementById("ownoForm").style.display = "block";
		}

		function closeForm5() {
		  document.getElementById("ownoForm").style.display = "none";
		}
		</script>
		
		<button class="open-button2" onclick="openForm6()">Change Password</button>

		<div class="form-popup" id="PWForm">
		  <form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">
		    <input type="Password" placeholder="old Password"  name="old_password">
		    <input type="Password" placeholder="New Password" name="password" >		   
		    <input type="Password" placeholder="Re-Enter New Password"  name="new_password" >

		    <button type="submit_password" class="btn" name="submit_ow_password">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm6()">Close</button>
		  </form>
		</div>	
		<script>
		function openForm6() {
		  document.getElementById("PWForm").style.display = "block";
		}

		function closeForm6() {
		  document.getElementById("PWForm").style.display = "none"; //end of main
		}
		</script>

		<script>
		  function initMap() {
  			const stu = {lat: <?php echo $record['latitude'];?>, lng: <?php echo $record['longitude'];?>};
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

		<button class="open-button2" title="1.open Google Maps.
2.Right-click the place or area on the map.
3.Select What's here? At the bottom.
4.you’ll see a card with the coordinates." onclick="openForm7()">Change Location</button>

		<div class="form-popup" id="LocForm">
		<form action="<?php echo "../../controller/studio/studio_profile_edit_controller.php?s_id=$user_id"?>" class="form-container" method="post">
			<label for="text"><b>Latitude</b></label>
			<input type="text" value="<?php echo $record['latitude']; ?>" name="latitude">
			<label for="text"><b>Longitude</b></label>
			<input type="text" value="<?php echo $record['longitude']; ?>" name="longitude">

			<button type="submit_location" class="btn" name="submit_location">Save</button>
			<button type="button" class="btn cancel" onclick="closeForm7()">Close</button>
		</form>	
		</div>
		<script>

		function openForm7() {
	   	  document.getElementById("LocForm").style.display = "block";
		}

		function closeForm7() {
		  document.getElementById("LocForm").style.display = "none";
		}
		</script>  
	</div>

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>