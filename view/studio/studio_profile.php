
<!DOCTYPE html>
<html>
<head>
	<title>Edit Details</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/edit_studio_details.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>
	
	<div class="row">
		<div class="pro-pic">
			<label for="myfile"><img src="../../img/customer/584abf432912007028bd9337.png" alt=""></label>
			<input type="file" id="myfile" class="my_file" hidden="true">
		</div>

		<h1>Studio Details</h1>
		
		<button class="open-button" onclick="openForm1()">Edit</button>
		<h2>Name : ABC Studio</h2>

		<div class="form-popup" id="nameForm">
		  <form action=# class="form-container" method="post">  

		    <label for="name"><b>Studio Name</b></label>
		    <input type="text" value="ABC Studo"  name="name">

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
		<h2>Contact No : 1991</h2>
		<div class="form-popup" id="noForm">
		  <form action=# class="form-container" method="post">
		    
		    <label for="text"><b>Contact No</b></label>
		    <input type="text" value="119" name="tele_no" >

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
		<h2>Address : No 50, Thanna, Balangoda</h2>
		<div class="form-popup" id="addForm">
		  <form action=# class="form-container" method="post">
		    
		    <label for="text"><b>Address Line 1</b></label>
		    <input type="text" value="no 50" name="add_1" >
		    <label for="text"><b>Address Line 2</b></label>
		    <input type="text" value="Thanna" name="add_2" >
		    <label for="text"><b>City</b></label>
		    <input type="text" value="Balangoda" name="City" >
		    <label for="text"><b>District</b></label>
		    <input type="text" value="Ratnapura" name="dist" >
		    <label for="text"><b>Postal Code</b></label>
		    <input type="text" value="10500" name="post_code" >

		    <button type="submit_phone" class="btn" name="submit_phone">Save</button>
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
		<h2>Name : Sasindu S.</h2>

		<div class="form-popup" id="ownameForm">
		  <form action=# class="form-container" method="post">  

		    <label for="first_name"><b>First name</b></label>
		    <input type="text" value="ABC Studo"  name="first_name">
		    <label for="last_name"><b>Last name</b></label>
		    <input type="text" value="ABC Studo"  name="last_name">

		    <button type="submit_name" class="btn" name="submit_name">Save</button>
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
		<h2>Email : saindu@mail</h2>

		<div class="form-popup" id="mailForm">
		  <form action=# class="form-container" method="post">  

		    <label for="email"><b>Email</b></label>
		    <input type="email" value="ABC Studo"  name="email">
		    
		    <button type="submit_name" class="btn" name="submit_name">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm5()">Close</button>
		  </form>
		</div>	
		<script>
		function openForm5() {
		  document.getElementById("mailForm").style.display = "block";
		}

		function closeForm5() {
		  document.getElementById("mailForm").style.display = "none";
		}
		</script>

		<button class="open-button" onclick="openForm6()">Edit</button>
		<h2>Contact No : 1981</h2>
		<div class="form-popup" id="ownoForm">
		  <form action=# class="form-container" method="post">
		    
		    <label for="text"><b>Contact No</b></label>
		    <input type="text" value="118" name="owtele_no" >

		    <button type="submit_phone" class="btn" name="submit_phone">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm6()">Close</button>
		  </form>
		</div>
		<script>
		function openForm6() {
		  document.getElementById("ownoForm").style.display = "block";
		}

		function closeForm6() {
		  document.getElementById("ownoForm").style.display = "none";
		}
		</script>	


		<button class="open-button" onclick="openForm7()">Edit</button>
		<h2>Address : No 50, Main road, Haputhale</h2>
		<div class="form-popup" id="owaddForm">
		  <form action=# class="form-container" method="post">
		    
		    <label for="text"><b>Address Line 1</b></label>
		    <input type="text" value="no 50" name="owadd_1" >
		    <label for="text"><b>Address Line 2</b></label>
		    <input type="text" value="main road" name="owadd_2" >
		    <label for="text"><b>City</b></label>
		    <input type="text" value="Haputhale" name="owCity" >
		    <label for="text"><b>District</b></label>
		    <input type="text" value="badulla" name="owdist" >
		    <label for="text"><b>Postal Code</b></label>
		    <input type="text" value="10890" name="owpost_code" >

		    <button type="submit_phone" class="btn" name="submit_phone">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm7()">Close</button>
		  </form>
		</div>
		<script>
		function openForm7() {
		  document.getElementById("owaddForm").style.display = "block";
		}

		function closeForm7() {
		  document.getElementById("owaddForm").style.display = "none";
		}
		</script>


		
		<button class="open-button"  onclick="openForm10()">Change Password</button>

		<div class="form-popup" id="PWForm">
		  <form action="#" class="form-container" method="post">
		    
		  
		    <input type="Password" placeholder="old Password"  name="old_password">

		   
		    <input type="Password" placeholder="New Password" name="password" >

		   
		    <input type="Password" placeholder="Re-Enter New Password"  name="new_password" >

		    <button type="submit_password" class="btn" name="submit_password">Save</button>
		    <button type="button" class="btn cancel" onclick="closeForm10()">Close</button>
		  </form>
		</div>	
		<script>
		function openForm10() {
		  document.getElementById("PWForm").style.display = "block";
		}

		function closeForm10() {
		  document.getElementById("PWForm").style.display = "none";
		}
		</script>
		</h2>




	</div>


	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>