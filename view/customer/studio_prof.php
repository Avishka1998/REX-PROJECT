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
	} 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title># Studio</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/studio_prof.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/cust_dash_navbar.php');?></div>
	<main>
	<div class="container">
		<div class="cover">
		  <a class="button" href="https://www.youtube.com">Message</a>
		  <div class="pic"></div>
		  <p>JB Studios</p>
		</div>
	</div>
	<div class="container" id="description">
		JB Studios is the most famous recording studio in the world and a global music icon. Originally a nine-bedroom house built in 1829, it was purchased by the Gramophone Company in 1928 who went on to build the world’s first purpose-built recording studio. The St John’s Wood address was chosen for its large garden and ideal location – close enough to the performance spaces of the time, but away from the noise and vibrations of the traffic and trains.
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
			<video width="320" height="240" poster="../../img/studio-mic.jpg" controls>
      		  <source src="https://www.youtube.com/watch?v=bNjFLv_73hk" type="video/mp4">
			</video>
		</div> 

		<div class="video">
			<video width="320" height="240" poster="../../img/studio-mic.jpg" controls>
      		  <source src="https://www.youtube.com/watch?v=bNjFLv_73hk" type="video/mp4">
			</video>
		</div> 

		<div class="video">
			<video width="320" height="240" poster="../../img/studio-mic.jpg" controls>
		      <source src="www.youtube.com/watch?v=bNjFLv_73hk" type="video/mp4">
			</video>
		</div> 

		<div class="video">
			<video width="320" height="240" poster="../../img/studio-mic.jpg" controls>
		      <source src="www.youtube.com/watch?v=bNjFLv_73hk" type="video/mp4">
			</video>
		</div> 
	</div>

	<div class="container botbtn">
      <a id="bot1" class="button" href="/action_page2.php">Make a Reservation</a>
	  <a id="bot2" class="button" href="cust_complaint.php">complaint</a>
	</div>
	</main>
	<?php require_once('../../inc/minfooter.php');?>
</body>
</html>