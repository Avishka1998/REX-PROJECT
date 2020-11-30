<?php 
require_once('../../inc/connection.php');
session_start();
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

		<div class="body">
			<div class="main-container">
				<div class="sub-cont">
				<h2>Lowe Production Studio</h2>
				<div class="item">
				<h3>Date & Time</h3>
				<div class="grid">
					<div class="box1"><p>2020-12-15</p></div>
					<div class="box2"><p>0800 - 1400</p></div>
					<div class="box3">
						<a href="select_date.php" class="edit" >Edit</a>
					</div>
				</div>
				</div>

				<div class="item">
				<h3>Services</h3>
				<div class="grid">
					<div class="box1"><p>Recording</p></div>
					<div class="box2"><p>LKR2500 Per hour</p></div>
				</div>
				<div class="grid">
					<div class="box1"><p>Mixing</p></div>
					<div class="box2"><p>LKR10000</p></div>
				</div>
				<div class="grid">
					<div class="box1"><p>Mastering</p></div>
					<div class="box2"><p>LKR7000</p></div>
					<div class="box3">
						<a href="select_service.php" class="edit" >Edit</a>
					</div>
				</div>
				</div>
				  
				<div class="item">
				<h3>Audio Gears</h3>
				<div class="grid">
					<div class="box1"><p>Neumann M 150 Tube</p></div>
					<div class="box2"><p>LKR5000</p></div>
				</div>
				<div class="grid">
					<div class="box1"><p>Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo</p></div>
					<div class="box2"><p>LKR7500</p></div>
					<div class="box3">
						<a href="select_service.php" class="edit" >Edit</a>
					</div>
				</div>
				</div>
				<div class="item"><h3 style="margin-left:480px;">Total   :   LKR 44500/=</h3></div>

				<div class="row grid">
				  <form action="https://www.sandbox.paypal.com/cgi-bin/webscr" method="post">
					<input type="hidden" name="business" value="recorexonline@gmail.com">
					<input type="hidden" name="cmd" value="_xclick">
					<input type="hidden" name="item_name" value="Instrument pack">
					<input type="hidden" name="item_number" value="1255">
					<input type="hidden" name="amount" value="2.2">
					<input type='hidden' name='return' value="http://localhost/Rex/view/customer/recipt.php">	
					<input type="hidden" name="currency_code" value="USD">
					<input type="submit" name="submit" value="Pay">
				  </form>	
				  <a href="studio_prof.php" class="cancel" >Cancel</a>
				  <img src="../../img/580b57fcd9996e24bc43c530.png" style="display:inline; width:150px; height:45px;">
				</div>
			</div>
		</div>	
	</div>
	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>