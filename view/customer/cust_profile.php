<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/edit_cust_details.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/cust_dash_navbar.php');?></div>

	<div class="row">
		<div class="pro-pic">
			<img src="../../img/customer/studio1.png">
		</div>
		
		<h1>Name - Sasindu Subodhaka
		<button class="open-button" onclick="openForm1()">Edit name</button>

		<div class="form-popup" id="nameForm">
		  <form action="#" class="form-container">
		    
		    <label for="f_name"><b>First Name</b></label>
		    <input type="text" value="Sasindu" name="f_name" required>

		    <label for="l_name"><b>Last Name</b></label>
		    <input type="text" value="Subodhaka"  name="l_name" required>

		    <button type="submit" class="btn">Save</button>
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
		</h1>

		<h1>Mobile Number - 1919
		<button class="open-button" onclick="openForm2()">Edit Mobile No.</button>

		<div class="form-popup" id="myForm">
		  <form action="#" class="form-container">
		    
		    <label for="text"><b>Email</b></label>
		    <input type="text" value="1919" name="phoneno" required>

		    <button type="submit" class="btn">Save</button>
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
		</h1>

		<h1>
		<button class="open-button" onclick="openForm3()">Change Password</button>

		<div class="form-popup" id="PWForm">
		  <form action="#" class="form-container">
		    
		    
		    <input type="Password" placeholder="Old Password" name="oldPW" required>

		   
		    <input type="Password" placeholder="New Password" name="newPW" required>

		   
		    <input type="Password" placeholder="Re-Enter New Password"  name="re-newPW" required>

		    <button type="submit" class="btn">Save</button>
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
		</h1>




	</div>


	
</body>
</html>