<?php 
require_once('../../inc/connection.php');
session_start();
$studio_id = $_SESSION['studio_id'];
$job = $_SESSION['job'];

$query = "SELECT paypal FROM studio WHERE studio_id = $studio_id";
$result_set = mysqli_query($connection,$query);
$record = mysqli_fetch_assoc($result_set);
$paypal = $record['paypal'];

$query2 = "SELECT * FROM studio WHERE studio_id = $studio_id";
$result_set2 = mysqli_query($connection,$query2);
$record2 = mysqli_fetch_assoc($result_set2);

$query3 = "SELECT * FROM reserved_job WHERE studio_id = $studio_id";
$result_set3 = mysqli_query($connection,$query3);
$record3 = mysqli_fetch_assoc($result_set3);

$query4 = "SELECT * FROM reserved_services WHERE job_id = $job";
$result_set4 = mysqli_query($connection,$query4);
$array4 = [];
while($record4=mysqli_fetch_assoc($result_set4)){
  array_push($array4,$record4);
}

$query5 = "SELECT * FROM reserved_audio_gear WHERE job_id = $job";
$result_set5 = mysqli_query($connection,$query5);
$array5 = [];
while($record5=mysqli_fetch_assoc($result_set5)){
  array_push($array5,$record5);
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Cart</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/cart.css">
	<script>
  	  function target_popup(form) {
      window.open('', 'formpopup', 'width=450,height=550,resizeable,scrollbars');
      form.target = 'formpopup';
	  }
	</script>
</head>
<body>
    <?php require_once('../../inc/cust_dash_navbar.php');?>  
	<div class="row11">	
	  <div class="container">
	    <h2><?php echo $record3['date']; echo '<br>'; echo $record2['studio_name'];?></h2> 
		<div class="row1">
		  <h3>Services</h3>
		  <div class="row111">	  
	  	  <div id="col1">
	  	  <?php
			$total = 0;
			for($i=0;$i<count($array4);$i++){
		      $sern = $array4[$i]['service_name'];  
			  $query41 = "SELECT * FROM studio_service WHERE studio_id = '$studio_id' AND service_name = '$sern'";
			  $result_set41 = mysqli_query($connection,$query41);
			  $record41 = mysqli_fetch_assoc($result_set41);
			  echo "<p>$record41[service_name]</p>";
			  echo '<br>'; 
			}
		  ?>  	
		  </div>
		  <div id="col2">
		  <?php
			for($i=0;$i<count($array4);$i++){
				$sern = $array4[$i]['service_name'];  
				$query41 = "SELECT * FROM studio_service WHERE studio_id = '$studio_id' AND service_name = '$sern'";
				$result_set41 = mysqli_query($connection,$query41);
				$record41 = mysqli_fetch_assoc($result_set41);
				echo "<p>$record41[service_charge] LKR</p>";
				echo '<br>';
				$total = $total + $record41['service_charge'];
			}
		  ?>	
		  </div>
		  </div>
		</div>
		<?php if(count($array5)>0){?>	
		<div class="row2">
		  <h3>Additional Equipments</h3>	
		  <div class="row222">	
		  <div id="col1">
		  <?php
			for($i=0;$i<count($array5);$i++){
			  $audn = $array5[$i]['audio_id'];  
			  $query51 = "SELECT * FROM studio_audio_gear WHERE audio_id = '$audn'";
			  $result_set51 = mysqli_query($connection,$query51);
			  $record51 = mysqli_fetch_assoc($result_set51);
			  echo "<p>$record51[name]</p>";
		      echo '<br>';     	  
			}
		  ?>
		  </div>
		  <div id="col2">
		  <?php
			for($i=0;$i<count($array5);$i++){
			  $audn = $array5[$i]['audio_id'];  
			  $query51 = "SELECT * FROM studio_audio_gear WHERE audio_id = '$audn'";
			  $result_set51 = mysqli_query($connection,$query51);
			  $record51 = mysqli_fetch_assoc($result_set51);
			  echo "<p>$record51[charge] LKR</p>";
			  echo '<br>';
			  $total = $total + $record51['charge'];     	  
			}
		  ?>
		  </div>
		  </div>
		</div>
		<?php }?>

		<div class="row3">
		  <div id="col1">
			<?php echo "<h3>Total</h3>";?>
		  </div>
		  <div id="col2">
		    <?php echo "<h3 style='width:55%; text-align:right;'>$total LKR</h3>";?> 	
		  </div>	
		</div>

	  <div class="row grid">
	    <img src="../../img/580b57fcd9996e24bc43c530.png" style="display:inline; width:150px; height:45px;">   
	    <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
		  <input type="hidden" name="business" value=<?php echo $paypal;?>>
		  <input type="hidden" name="cmd" value="_xclick">
		  <input type="hidden" name="item_name" value="Instrument pack">
	  	  <input type="hidden" name="item_number" value=<?php echo $job;?>>
		  <input type="hidden" name="amount" value="5">
		  <input type='hidden' name='return' value="http://localhost/Rex/view/customer/recipt.php?jobid=<?php echo $job;?>">	
		  <input type="hidden" name="currency_code" value="USD">
		  <input type="submit" name="submit" value="SUBMIT">
		</form>	

		<form action="studio_prof.php" method="post">
		  <input type="submit" value="CANCEL">	
		</form>
	  </div>

	  </div>	
	</div>

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>