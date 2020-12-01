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
<div class="column" style="width:40%">
		<div class="row" >
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
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">1</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">2</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">3</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">4</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">5</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">6</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">7</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">8</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">9</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">10</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">11</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">12</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">13</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">14</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">15</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">16</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">17</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">18</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">19</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">20</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">21</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">22</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">23</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">24</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">25</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">26</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">27</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">28</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">29</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">30</button></li>
							<li><button  value='Show Layer'onclick="setVisibility('sub3', 'inline');">31</button></li>
						</ul>
  				</div>
    
		 </div> 
	</div>
	
	<script language="JavaScript">
	function setVisibility(id, visibility) {
	document.getElementById(id).style.display = visibility;
	}
	</script>
	<div id="sub3" class="row">
 		<div class="calander">
	 		<div class="container">  
		 		<div class="slot1">
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
						
						<input type="checkbox"  id="service1" onclick="openForm2(this)" name="check1" />
						<label for="service1"></label> 
					</div>
					<div class="hh2">
						<h2>Available</h2>
					</div>
		 		</div>
		 		<div class="slot1">
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
		 	
		 		<div class="slot1">
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
			 		
			 		<input type="checkbox"  id="service3" onclick="openForm2(this)" name="check1" />
			 		<label for="service3"></label> 
			  	</div>
			  	<div class="hh2">
			  		<h2>Available</h2>
			  	</div>
		 	</div>
	    </div> 
	    
</div>

    <div class="calander">
			<input type=button name=type value='Save'  class="next" onclick="setVisibility('sub3', 'none');"; /> 
    </div>                                           

</div>

</div>
<!-- next column aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa-->
<div class="column" style="width:60%">
		<div class="row1" style="bottom: 280px;	right:10px">
			<h1>Set Your Default Time Slots</h1>
		</div>
		<div class="row1" > 
			<div class="column1" style="width: 30%;">
				<h3>Monday</h3>
			</div>
			<div class="column1" style="width: 70%;">
			<div class="container">  
		 		<div class="slot">
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
						
						<input type="checkbox"  id="service4" onclick="openForm2(this)" name="check1" />
						<label for="service4"></label> 
					</div>
					<div class="hh2">
						<h2>Available</h2>
					</div>
				 </div>
			</div>
		</div>

			</div>		
	 		
		<div class="row1">
			<div class="column1" style="width: 30%;">
				<h3>Tuesday</h3>
			</div>
			<div class="column1" style="width: 70%;">
			<div class="container">
		 		<div class="slot">
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
						
						<input type="checkbox"  id="service6" onclick="openForm2(this)" name="check1" />
						<label for="service6"></label> 
					</div>
					<div class="hh2">
						<h2>Available</h2>
					</div>
		 		</div>
			</div>
			</div>
		</div>
		<div class="row1" >
		    <div class="column1" style="width: 30%;">
				<h3>Wednesday</h3>
			</div>
			<div class="column1" style="width: 70%;">
			<div class="container" >	
		 		<div class="slot">
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
			 		
			 		<input type="checkbox"  id="service7" onclick="openForm2(this)" name="check1" />
			 		<label for="service7"></label> 
			  	</div>
			  	<div class="hh2">
			  		<h2>Available</h2>
			  	</div>
		 	</div>   
		</div>
		</div>
	</div>
		<div class="row1">
		    <div class="column1" style="width: 30%;">
				<h3>Thursday</h3>
			</div>
			<div class="column1" style="width: 70%;">
			<div class="container" >	
		 		<div class="slot">
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
			 		
			 		<input type="checkbox"  id="service8" onclick="openForm2(this)" name="check1" />
			 		<label for="service8"></label> 
			  	</div>
			  	<div class="hh2">
			  		<h2>Available</h2>
			  	</div>
		 	</div>   
		</div>
	</div>
	</div>
	<div class="row1" > 
			<div class="column1" style="width: 30%;">
				<h3>Friday</h3>
			</div>
			<div class="column1" style="width: 70%;">		
	 		<div class="container">  
		 		<div class="slot">
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
						
						<input type="checkbox"  id="service9" onclick="openForm2(this)" name="check1" />
						<label for="service9"></label> 
					</div>
					<div class="hh2">
						<h2>Available</h2>
					</div>
				 </div>
			</div>
		</div>
		</div>
		<div class="row1" > 	
			<div class="column1" style="width: 30%;">
				<h3>Saturday</h3>
			</div>
			<div class="column1" style="width: 70%;">	
	 		<div class="container">  
		 		<div class="slot">
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
						
						<input type="checkbox"  id="service10" onclick="openForm2(this)" name="check1" />
						<label for="service10"></label> 
					</div>
					<div class="hh2">
						<h2>Available</h2>
					</div>
				 </div>
			</div>
		</div>
		</div>
		<div class="row1" > 	
		    <div class="column1" style="width: 30%;">
				<h3>Sunday</h3>
			</div>
			<div class="column1" style="width: 70%;">	
	 		<div class="container">  
		 		<div class="slot">
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
						
						<input type="checkbox"  id="service11" onclick="openForm2(this)" name="check1" />
						<label for="service11"></label> 
					</div>
					<div class="hh2">
						<h2>Available</h2>
					</div>
				 </div>
			</div>
			</div>
			</div> 
			<div class="row1">
				<div class="column1">
				<div class="calander">
					<input type=button name=type value='Save'  class="next" ; /> 
				</div>
			

			</div>
		</div>
	



	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>