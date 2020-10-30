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

	<form>
  		<input type="text" name="search" placeholder="Search..">
	</form>    

	<div class="container">
		<div class="cover">
			<div>
				<div class="pic"></div>
			</div>
			<div>
				<h3><?php echo $studio_record['studio_name']?></h3>
			</div>
			
		</div>
	</div>

	<div class="container" style="border-bottom: 2px solid silver;">
	<form action="" class="">
		<button type="submit" class="button" style="padding-left: 5px" formaction="/action_page2.php"><span>Make A Reservation </span></button>
		<button type="submit" class="button" style="float: right;"  formaction="/action_page2.php"><span>Message </span></button>
		<button type="submit" class="button" style="float: right;" formaction=<?php echo "cust_complaint.php"; ?>><span>Add a complaint </span></button>
	</form>
	</div>
	

	<div class="container" style="top: 5%; font-size: 20px; text-align: justify;">
		Abbey Road Studios is the most famous recording studio in the world and a global music icon. Originally a nine-bedroom house built in 1829, it was purchased by the Gramophone Company in 1928 who went on to build the world’s first purpose-built recording studio. The St John’s Wood address was chosen for its large garden and ideal location – close enough to the performance spaces of the time, but away from the noise and vibrations of the traffic and trains.
	</div>

	<div class="container" style="top: 10%; padding-bottom: 10%">
		<h2>Services</h2>
	</div>

	<div class="container" style="top: 10%;">
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
		

	</div>

</body>
</html>