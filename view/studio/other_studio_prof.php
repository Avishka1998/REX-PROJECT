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
	} 
}
?>
<!DOCTYPE html>
<html>
<head>
	<title># Studio</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/other_studio_prof.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>
	<main>
	<div class="container" >
		<div class="cover" style="background-image: url(<?php echo $cover_url?>);" >		  
		  <div class="pic" style="background-image: url(<?php echo $profile_url?>);"></div>
		  <p><?php echo $studio_name ?></p>
		</div>
	</div>
	<div class="container" id="description">
		<?php echo $studio_name ?>  is the most famous recording studio in the world and a global music icon. Originally a nine-bedroom house built in 1829, it was purchased by the Gramophone Company in 1928 who went on to build the world’s first purpose-built recording studio. The St John’s Wood address was chosen for its large garden and ideal location – close enough to the performance spaces of the time, but away from the noise and vibrations of the traffic and trains.
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
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/pGCNVz4USLM" type="video/mp4">
		</iframe>
		</div> 
		
		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/0dUMGM7cu88" type="video/mp4">
		</iframe>
		</div>  
		
		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/QzBACI0YP84" type="video/mp4">
		</iframe>  
		</div>

		<div class="video">
		<iframe width="320" height="240" poster="../../img/studio-mic.jpg" controls src="https://www.youtube.com/embed/taOtlyhftU4" type="video/mp4">
		</iframe>
		</div>  
	</div>

	</main>
	<?php require_once('../../inc/minfooter.php');?>
</body>
</html>