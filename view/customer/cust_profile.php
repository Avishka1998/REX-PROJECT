<?php 
require_once('../../inc/connection.php');
session_start(); 
?>
<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/edit_cust_details.css">
</head>
<body>
	<?php require_once('../../inc/cust_dash_navbar.php');?>
	<?php 
		
		$query="SELECT * FROM customer WHERE c_id = $user_id"; //query to get data of the logged customer ($user id is included from cust_dash_navbar.php)
		$result_set=mysqli_query($connection,$query);
		if($result_set){
						$record = mysqli_fetch_assoc($result_set);
				
		}		
	?>
	<div class="row">
		<div class="pro-pic">
		<?php $url = "../../img/customer/$record[image]";?>
		<img src=<?php echo $url; ?> alt="" width="230px" height="230px">
		</div>
		<div class="upload">
			
				<form action="<?php echo "../../controller/customer/cust_profile_edit_controller.php?c_id=$user_id"?>" class="form-container" method="post" enctype="multipart/form-data" style="background-color:rgba(255, 255, 255, 0);"> 
					<label for="myfile"><img src="../../img/customer/584abf432912007028bd9337.png" alt=""></label>
					<input type="file" id="myfile" class="my_file" hidden="true" name="image">
					<button type="submit_image" class="image-button" name="submit_image" >Upload</button>
				</form>	
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

		<?php echo '<h2>Name: '. $record["first_name"] . ' '. $record["last_name"];?>
		<button class="open-button" onclick="openForm1()">Edit</button>

		<div class="form-popup" id="nameForm">
		  <form action=<?php echo "../../controller/customer/cust_profile_edit_controller.php?c_id=$user_id"?> class="form-container" method="post">  

		    <label for="first_name"><b>First Name</b></label>
		    <input type="text" value=<?php echo $record['first_name']?> name="first_name" >

		    <label for="last_name"><b>Last Name</b></label>
		    <input type="text" value=<?php echo $record['last_name']?>  name="last_name">

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
		</h2>

		<?php echo '<h2>Mobile: '. $record["tele_no"];?>
		<button class="open-button" onclick="openForm2()">Edit</button>

		<div class="form-popup" id="myForm">
		  <form action=<?php echo "../../controller/customer/cust_profile_edit_controller.php?c_id=$user_id"?> class="form-container" method="post">
		    
		    <input type="text" value=<?php echo $record['tele_no']?> name="tele_no" >

		    <button type="submit_phone" class="btn" name="submit_phone">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm2()">Close</button>
		  </form>
		</div>
		<script>
		function openForm2() {
		  document.getElementById("myForm").style.display = "block";
		}

		function closeForm2() {
		  document.getElementById("myForm").style.display = "none";
		}
		</script>	
		</h2>

		<h2>
		<button class="open-button" onclick="openForm3()">Change Password</button>

		<div class="form-popup" id="PWForm">
		  <form action="<?php echo "../../controller/customer/cust_profile_edit_controller.php?c_id=$user_id"?>" class="form-container" method="post">
		    
		  
		    <input type="Password" placeholder="old Password"  name="old_password">

		   
		    <input type="Password" placeholder="New Password" name="password" >

		   
		    <input type="Password" placeholder="Re-Enter New Password"  name="new_password" >

		    <button type="submit_password" class="btn" name="submit_password">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm3()">Close</button>
		  </form>
		</div>	
		<script>
		function openForm3() {
		  document.getElementById("PWForm").style.display = "block";
		}

		function closeForm3() {
		  document.getElementById("PWForm").style.display = "none";
		}
		</script>
		</h2>
	</div>
	
	<?php require_once('../../inc/minfooter.php');?>	
</body>
</html>