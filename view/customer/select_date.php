<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Selcet Date & Time</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/select_date.css">
</head>
<body>
  <?php require_once('../../inc/cust_dash_navbar.php');?>

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
				<!-- <input type="date" name="date" value="2014-05-09"> -->

			<div class="calander">
			<div class="thismonth">
			<div class="month">      
			<ul>
			  <li>
				November<span style="font-size:15px"> 2020</span>
			  </li>
			</ul>
			</div>

			<ul class="weekdays">
			<li>Mo</li>
			<li>Tu</li>
			<li>We</li>
			<li>Th</li>
			<li>Fr</li>
			<li>Sa</li>
			<li>Su</li>
			</ul>

			<ul class="days"> 
			<li></li>
			<li></li>
			<li></li>
			<li></li> 
			<li style="background-color:rgba(0,0,0,0.2);">1</li>
			<li style="background-color:rgba(0,0,0,0.2);">2</li>
			<li style="background-color:rgba(0,0,0,0.2);">3</li>
			<li style="background-color:rgba(0,0,0,0.2);">4</li>
			<li style="background-color:rgba(0,0,0,0.2);">5</li>
			<li style="background-color:rgba(0,0,0,0.2);">6</li>
			<li style="background-color:rgba(0,0,0,0.2);">7</li>
			<li style="background-color:rgba(0,0,0,0.2);">8</li>
			<li style="background-color:rgba(0,255,0,0.6);">9</li>
			<li>10</li>
			<li style="background-color:rgba(255,125,0,0.4);">11</li>
			<li style="background-color:rgba(255,125,0,0.4);">12</li>
			<li style="background-color:rgba(255,125,0,0.4);">13</li>
			<li>14</li>
			<li>15</li>
			<li>16</li>
			<li style="background-color:rgba(255,125,0,0.4);">17</li>
			<li style="background-color:rgba(255,125,0,0.4);">18</li>
			<li>19</li>
			<li style="background-color:rgba(255,125,0,0.4);">20</li>
			<li>21</li>
			<li style="background-color:rgba(255,125,0,0.4);">22</li>
			<li>23</li>
			<li>24</li>
			<li>25</li>
			<li>26</li>
			<li>27</li>
			<li>28</li>
			<li>29</li>
			<li>30</li>
			<li>31</li>
			</ul>
		</div>
		</div>

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
				    <a href="select_service.php" class="next">Next</a>
				    <a href="studio_prof.php" class="cancel">Cancel</a>
				</form>
				
			</div>
		</div>
	</div>		

	
<?php require_once('../../inc/minfooter.php');?>
</body>
</html>