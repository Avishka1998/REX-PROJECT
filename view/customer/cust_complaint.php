<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../css/cust_dash.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/cust_dash_navbar.php'); ?></div>

	<div class="row">
    <form action="../../controller/customer/cust_complaint_controller.php" method="post" >
		<!-- <div class="row"> -->
			<div class="dropdown">
			<button type="send" onclick="myFunction()" class="dropbtn">Select a studio</button>
			<div id="myDropdown" class="dropdown-content">
				<input type="text" placeholder="Search.." id="myInput" onkeyup="filterFunction()">
				<a href="#about">About</a>
				<a href="#base">Base</a>
				<a href="#blog">Blog</a>
				<a href="#contact">Contact</a>
				<a href="#custom">Custom</a>
				<a href="#support">Support</a>
				<a href="#tools">Tools</a>
			</div>
			</div>
        <!-- </div> -->
			<script>
			/* When the user clicks on the button,
			toggle between hiding and showing the dropdown content */
			function myFunction() {
			document.getElementById("myDropdown").classList.toggle("show");
			}

			function filterFunction() {
				var input, filter, ul, li, a, i;
				input = document.getElementById("myInput");
				filter = input.value.toUpperCase();
				div = document.getElementById("myDropdown");
				a = div.getElementsByTagName("a");
				for (i = 0; i < a.length; i++) {
					txtValue = a[i].textContent || a[i].innerText;
					if (txtValue.toUpperCase().indexOf(filter) > -1) {
					a[i].style.display = "";
					} else {
					a[i].style.display = "none";
					}
				}
			}
			</script>
		
		<!-- <div class="row"> -->
				<?php 
					$query="SELECT description FROM complaint WHERE field='0' LIMIT 4";
					$result_set=mysqli_query($connection,$query);
					if($result_set){
						echo "<label for='complaint'>Choose a complaint:</label>";
						echo "<select id='complaint' name='complaints'>";
						while($record=mysqli_fetch_assoc($result_set)){
							echo "<option value='$record[description]'>".$record['description']."</option>";
						}
						echo '</select>';

					}
				?>	
		<!-- </div>		 -->
       
		<!-- <div class="row"> -->
		<button type="submit" name="submit"></button>
		<!-- </div> -->
	  </form>
	  </div>
  	

</body>
</html>