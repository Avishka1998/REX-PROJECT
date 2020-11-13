<!DOCTYPE html>
<html>
<head>
	<title>Selcet Date & Time</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/select_date.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/cust_dash_navbar.php');?></div>

	<div class="row">
  		<div class="column">
				<div class="center" style="float: left; margin-left: 40%">
					<img src="../../img/profilpic.jpg" style="width: 100%">
					<h1>ABC Studio</h1>
					<h3>Location </h3>
					<h3>Services</h3>
					<p>Mixing <br>Mastering <br>Recording</p>

				</div>
		</div>
	
  		<div class="column" style="color: red">		
			
			<div class="center" style="float:right; margin-right: 40%">
				<input type="date" name="date" value="2014-05-09">

				<form>
					<label for="sttime">Start Time</label>
				    <select id="sttime" name="sttime">
				    	  <option value="0">00.00</option>
					      <option value="1">01.00</option>
					      <option value="2">02.00</option>
					      <option value="3">03.00</option>
					      <option value="4">04.00</option>
					      <option value="5">05.00</option>
					      <option value="6">06.00</option>
					      <option value="7">07.00</option>
					      <option value="8">08.00</option>
					      <option value="9">09.00</option>
					      <option value="10">10.00</option>
					      <option value="11">11.00</option>
					      <option value="12">12.00</option>
					      <option value="13">13.00</option>
					      <option value="14">14.00</option>
					      <option value="15">15.00</option>
					      <option value="16">16.00</option>
					      <option value="17">17.00</option>
					      <option value="18">18.00</option>
					      <option value="19">19.00</option>
					      <option value="20">20.00</option>
					      <option value="21">21.00</option>
					      <option value="22">22.00</option>
					      <option value="23">23.00</option>
				           
				    </select>
					<br>
					<label for="sttime">End Time</label>
				    <select id="sttime" name="sttime">
				    	  <option value="0">00.00</option>
					      <option value="1">01.00</option>
					      <option value="2">02.00</option>
					      <option value="3">03.00</option>
					      <option value="4">04.00</option>
					      <option value="5">05.00</option>
					      <option value="6">06.00</option>
					      <option value="7">07.00</option>
					      <option value="8">08.00</option>
					      <option value="9">09.00</option>
					      <option value="10">10.00</option>
					      <option value="11">11.00</option>
					      <option value="12">12.00</option>
					      <option value="13">13.00</option>
					      <option value="14">14.00</option>
					      <option value="15">15.00</option>
					      <option value="16">16.00</option>
					      <option value="17">17.00</option>
					      <option value="18">18.00</option>
					      <option value="19">19.00</option>
					      <option value="20">20.00</option>
					      <option value="21">21.00</option>
					      <option value="22">22.00</option>
					      <option value="23">23.00</option>
				           
				    </select>
				    <a href="select_service.php" class="next" style="float: left;">Next</a>
				    <a href="studio_prof.php" class="next" style="float: right;">Cancel</a>
				</form>
				
			</div>
		</div>
	</div>		

	

</body>
</html>