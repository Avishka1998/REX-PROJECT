<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Studio Shedule</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/studio_schedule.css">
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/stu_dash_navbar.php');?>
	</div>

	<div class="calander"> 
      <div class="thismonth">
       <div class="month">      
	       <ul>
	         <li>
	            This Month<br>
	            <span style="font-size:18px">2020</span>
	         </li>
	       </ul>
       </div>

      <ul class="weekdays" style="text-align: left;">
	      <li>Mo</li>
	      <li>Tu</li>
	      <li>We</li>
	      <li>Th</li>
	      <li>Fr</li>
	      <li>Sa</li>
	      <li>Su</li>
      </ul>

      <ul class="days" style="text-align: left;">  
	      <li>1</li>
	      <li>2</li>
	      <li>3</li>
	      <li>4</li>
	      <li>5</li>
	      <li>6</li>
	      <li>7</li>
	      <li>8</li>
	      <li>9</li>
	      <li>10</li>
	      <li>11</li>
	      <li>12</li>
	      <li>13</li>
	      <li>14</li>
	      <li>15</li>
	      <li>16</li>
	      <li>17</li>
	      <li>18</li>
	      <li>19</li>
	      <li>20</li>
	      <li>21</li>
	      <li>22</li>
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
 	<div class="calander">
	 	<div class="container">  
		 	<div class="row">
		 		<div class="time">
		 			<form>
							<label for="sttime">From</label>
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
							<label for="sttime">To</label>
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
						    
						</form>
		 		</div>
		 		<div class="h2">
		 			<h2>Away</h2>
		 		</div> 		
			 	<div class="slideTwo">
			 		
			 		<input type="checkbox"  id="service2" onclick="openForm2(this)" name="check1" />
			 		<label for="service2"></label> 
			  	</div>
			  	<div class="hh2">
			  		<h2>Available</h2>
			  	</div>
		 	</div>
		 	<div class="row">
		 		<div class="time">
		 			<form>
							<label for="sttime">From</label>
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
							<label for="sttime">To</label>
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
						    
						</form>
		 		</div>
		 		<div class="h2">
		 			<h2>Away</h2>
		 		</div> 		
			 	<div class="slideTwo">
			 		
			 		<input type="checkbox"  id="service2" onclick="openForm2(this)" name="check1" />
			 		<label for="service2"></label> 
			  	</div>
			  	<div class="hh2">
			  		<h2>Available</h2>
			  	</div>
		 	</div>
		 	
		 	<div class="row">
		 		<div class="time">
		 			<form>
							<label for="sttime">From</label>
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
							<label for="sttime">To</label>
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
						    
						</form>
		 		</div>
		 		<div class="h2">
		 			<h2>Away</h2>
		 		</div> 		
			 	<div class="slideTwo">
			 		
			 		<input type="checkbox"  id="service2" onclick="openForm2(this)" name="check1" />
			 		<label for="service2"></label> 
			  	</div>
			  	<div class="hh2">
			  		<h2>Available</h2>
			  	</div>
		 	</div>
	    </div> 
	    
    </div>
    <div class="calander">
    	<a href="studio_schedule.php" class="next">save</a>
    </div>                                           




	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>