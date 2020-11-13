<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Select Services</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/select_service.css">
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/cust_dash_navbar.php');?>
	</div>
	<div class="body">
	<div class="main-container">
		
		<div class="conver-list">
			<h1>Select Services</h1>
			<label class="container">Recording   :   LKR 2500/= Per hour
			  <input type="checkbox" checked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Mixing   :   LKR 10,000/=
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Mastering   :   LKR 7000/=
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Instrument Hiring
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>

			<div class="container">
		      <div class="col1">
		        <label for="subject">Additional Note</label>
		      </div>
		      <div class="col2">
		        <textarea id="subject" name="subject" placeholder="ex:- Need final track within 5 days" style="height:100px"></textarea>
		     </div>
    		</div>


		</div>
		
		<div class="chat-message-list">
			<h1>Select Audio Gears</h1>
			<label class="container">Neumann M 150 Tube 
			  <input type="checkbox" checked="checked">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Marshall DSL Series DSL40C 40 Watt Valve 2 Channel Combo
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Fender Telecaster Electric guitar 
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">SSL XLogic G Series Compressor
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>
			<label class="container">Vox AC15HW1X 1x12" 15-watt Handwired Tube Combo Amp with Alnico Blue Speaker
			  <input type="checkbox">
			  <span class="checkmark"></span>
			</label>

			<div class="container">
		      <div class="col1">
		        <label for="subject">Additional Note</label>
		      </div>
		      <div class="col2">
		        <textarea id="subject" name="subject" placeholder="ex:- Need 4 notation stands" style="height:100px"></textarea>
		     </div>
    		</div>
						
		</div>
		
 
	</div>


	<div class="row">
        <a href="select_date.php" class="next" style="float: left;">Back</a>
        <a href="cart.php" class="next" style="float: center;">Next</a>
		<a href="studio_prof.php" class="previous" style="float: right;">Cancel</a>
      
    </div>
    <div class="row">
    	
    </div>
	</div>

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>