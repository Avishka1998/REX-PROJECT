<?php
  require_once('../../inc/connection.php');
  session_start();

  $userid = $_SESSION['user_id'];

  function build_calendar($month,$year,$array,$blocked_list,$booked_list){
    $daysOfWeek = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');

    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    $numberDays = date('t',$firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'];

    $datetoday = date('Y-m-d');

    $calendar = "<table class='table'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    
    $calendar.= "<a class='cbtn' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    $calendar.= " <a class='cbtn' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    $calendar.= "<a class='cbtn' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    $calendar .= "<tr>";
    foreach($daysOfWeek as $day){
      $calendar .= "<th class='header'>$day</th>"; 
    }
    
    $currentDay = 1;

    $calendar .= "</tr><tr>";
    if($dayOfWeek>0){
      for($k=0;$k<$dayOfWeek;$k++){ 
          $calendar .= "<td class='empty'></td>"; 
      } 
    }
    $month = str_pad($month, 2, "0", STR_PAD_LEFT);
    while($currentDay<=$numberDays){
      if ($dayOfWeek == 7){ 
          $dayOfWeek = 0; 
          $calendar .= "</tr><tr>"; 
      }
      $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT); 
      $date = "$year-$month-$currentDayRel"; 
      $dayname = strtolower(date('l', strtotime($date))); 
      $eventNum = 0; 
      $today = $date==date('Y-m-d')? "today" : "";

      $isblocked = 0;
      for($i=0; $i<count($blocked_list); $i++){
        if($date==$blocked_list[$i]['dates']){
          $isblocked = 1;
          break;
        }
      }

      $isbooked = 0;
      for($i=0; $i<count($booked_list); $i++){
        if($date==$booked_list[$i]['date']){
          $isbooked = 1;
          break;
        }
      }

      if($date<date('Y-m-d')){
        if($isbooked==1){
          $calendar.="<td style='background-color:rgba(247,90,32,0.4);'><h4 style='color:grey;'>$currentDay</h4>";
        }
        else{
          $calendar.="<td><h4 style='color:grey;'>$currentDay</h4>";
        }
      }
      else if($isblocked==1){
        $calendar.="<td style='background-color:rgba(255,234,0,0.5);'><h4 style='color:grey;'>$currentDay</h4>"; 
      }
      else if($isbooked==1){
        $calendar.="<td style='background-color:rgba(247,90,32,0.4);'><h4 style='color:grey;'>$currentDay</h4>";
      }
      else if($date>=date('Y-m-d') && $array['issatblocked']==1 && $dayname == 'saturday'){
        $calendar.="<td style='background-color:rgba(255,234,0,0.5);'><h4 style='color:grey;'>$currentDay</h4>"; 
      }
      else if($date>=date('Y-m-d') && $array['issunblocked']==1 && $dayname == 'sunday'){
        $calendar.="<td style='background-color:rgba(255,234,0,0.5);'><h4 style='color:grey;'>$currentDay</h4>"; 
      }
      else if($date>=date('Y-m-d') && $array['issatblocked']==1 && $dayname != 'saturday'){
        $calendar.="<td><h4>$currentDay</h4>"; 
      }
      else if($date>=date('Y-m-d') && $array['issunblocked']==1 && $dayname != 'sunday'){
        $calendar.="<td><h4>$currentDay</h4>"; 
      }
      else if($date>=date('Y-m-d') && $array['issatblocked']==0 && $dayname == 'saturday'){
        $calendar.="<td><h4>$currentDay</h4>";
      }
      else if($date>=date('Y-m-d') && $array['issunblocked']==0 && $dayname == 'sunday'){
        $calendar.="<td><h4>$currentDay</h4>";
      }
      else{
        $calendar.="<td><h4>$currentDay</h4>"; 
      }
  
      $calendar .="</td>";
      
      $currentDay++; 
      $dayOfWeek++; 
    }

    if ($dayOfWeek!=7){ 
      $remainingDays = 7-$dayOfWeek; 
      for($l=0;$l<$remainingDays;$l++){ 
          $calendar .= "<td class='empty'></td>"; 
      } 
    }
    $calendar .= "</tr>"; 
    $calendar .= "</table>";
    echo $calendar;
}

if(isset($_GET['blocksat'])){
  $x = $_GET['blocksat'];
  $query13 = "UPDATE studio_schedule SET issatblocked = 1 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}
if(isset($_GET['unblocksat'])){
  $x = $_GET['unblocksat'];
  $query13 = "UPDATE studio_schedule SET issatblocked = 0 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}
if(isset($_GET['blocksun'])){
  $x = $_GET['blocksun'];
  $query13 = "UPDATE studio_schedule SET issunblocked = 1 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}
if(isset($_GET['unblocksun'])){
  $x = $_GET['unblocksun'];
  $query13 = "UPDATE studio_schedule SET issunblocked = 0 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}

if(isset($_POST['submit'])){
  if($_POST['date']!=NULL){
    $blockedate = $_POST['date'];
    $query155 = "SELECT * FROM reserved_job WHERE date=$blockedate AND studio_id=$userid";
    $res_set155 = mysqli_query($connection,$query155);
    if(mysqli_num_rows($res_set155)){
      $query15 = "INSERT INTO blocked_dates (sid,dates) VALUES ('$userid','$blockedate')";
      $res_set15 = mysqli_query($connection,$query15);
      header('Location: ../../view/studio/studio_schedule.php');   
    }
  }
}

if(isset($_POST['submit2'])){
  if(isset($_POST['date2'])){
    $blockedate = $_POST['date2'];
    $isblock = 0;
    //Blocked date array creation
    $block_list=[];
    $query16 = "SELECT * FROM blocked_dates WHERE sid=$userid";
    $res_set16 = mysqli_query($connection,$query16);
    if(mysqli_num_rows($res_set16)>0){
      while($row=mysqli_fetch_assoc($res_set16)){
        array_push($block_list,$row);
      }
    }

    for($i=0; $i<count($block_list); $i++){
      if($block_list[$i]['dates']==$blockedate){
        $isblock = 1;
        break;
      }
    }

    if($isblock==1){
      $query17 = "DELETE FROM blocked_dates WHERE sid='$userid' AND dates='$blockedate'";
      $res_set17 = mysqli_query($connection,$query17);
    }
    header('Location: ../../view/studio/studio_schedule.php'); 
  }
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Studio Shedule</title>
	<link rel="stylesheet" type="text/css" href="../../css/studio/studio_schedule.css">
	<link rel="stylesheet" href="../../css/calendar.css">
	<style>
	  .container{
		font-family: sans-serif;
		width: 80%;
		padding-right:15px;
		padding-left:15px;
      }
	</style>
</head>
<body>
	<div class="nav body" style="padding-left: 0;">
		<?php require_once('../../inc/stu_dash_navbar.php');?>
	</div>
  
  <?php   
  $query11 = "SELECT * FROM studio_schedule WHERE id = $user_id";
  $res_set11 = mysqli_query($connection,$query11);
  if(mysqli_num_rows($res_set11)>0){
    $record11 = mysqli_fetch_assoc($res_set11);
  }
  else{
    $query12 = "INSERT INTO studio_schedule (id) VALUES ($user_id)";
    $res_set12 = mysqli_query($connection,$query12);
    $query11 = "SELECT * FROM studio_schedule WHERE id = $user_id";
    $res_set11 = mysqli_query($connection,$query11);
    $record11 = mysqli_fetch_assoc($res_set11);
  }
  //Blocked date array creation
  $blocked_list=[];
  $query16 = "SELECT * FROM blocked_dates WHERE sid=$user_id";
  $res_set16 = mysqli_query($connection,$query16);
  if(mysqli_num_rows($res_set16)>0){
    while($row=mysqli_fetch_assoc($res_set16)){
      array_push($blocked_list,$row);
    }
  }

  $booked_list=[];
  $query17 = "SELECT date FROM reserved_job WHERE studio_id='$userid' AND isplaced = 1";
  $res_set17 = mysqli_query($connection,$query17);
  if(mysqli_num_rows($res_set17)>0){
    while($row=mysqli_fetch_assoc($res_set17)){
      array_push($booked_list,$row);
    }
  }
  ?>

	<div class="row1">
	  <div class="col1">
      <?php
        if($record11['issatblocked']==0){
          echo "<a href='studio_schedule.php?blocksat=$userid'>Block Saturdays</a>";
        }
        else{
          echo "<a href='studio_schedule.php?unblocksat=$userid'>Unblock Saturdays</a>";
        }
        if($record11['issunblocked']==0){
          echo "<a href='studio_schedule.php?blocksun=$userid'>Block Sundays</a>";
        }
        else{
          echo "<a href='studio_schedule.php?unblocksun=$userid'>Unblock Sundays</a>";
        }
        ?>  
          <button class="open-button" onclick="document.getElementById('dateForm').style.display='block'">Block a day</button>
          <button class="open-button open-button-2" onclick="document.getElementById('dateForm2').style.display='block'">Unblock a day</button>
          <button class="open-button open-button-3" onclick="document.getElementById('dateForm3').style.display='block'">VIEW BLOCKED LIST</button> 
	  </div>

	  <div class="col2">
	  	<div class="container"> 
    	<div class="row"> 
      <?php 
        $dateComponents = getdate(); 
        if(isset($_GET['month']) && isset($_GET['year'])){
        $month = $_GET['month']; 			     
        $year = $_GET['year'];
        }
        else{
        $month = $dateComponents['mon']; 			     
        $year = $dateComponents['year'];
        }
        build_calendar($month,$year,$record11,$blocked_list,$booked_list); 
      ?> 
    </div> 
    </div> 
	  </div>
    <?php $todate = date("Y-m-d");?>    
    <div class="modal" id="dateForm">
		  <form action="?" class="form-container animate" method="post">
		    
		    <label for="date" ><b>BLOCKING DATE</b></label><br>
		    <input type="date" name="date" min="<?php echo $todate;?>">

		    <button type="submit" class="btn submit" name="submit">BLOCK</button>
        <button type="button" class="btn submit" onclick="document.getElementById('dateForm').style.display='none'">Cancel</button>
		  </form>
		</div>
    <div class="modal" id="dateForm2">
		  <form action="?" class="form-container animate" method="post">
		    
		    <label for="date2" ><b>UNBLOCKING DATE</b></label><br>
		    <input type="date" name="date2" min="<?php echo $todate;?>">

		    <button type="submit" class="btn submit" name="submit2">UNBLOCK</button>
        <button type="button" class="btn submit" onclick="document.getElementById('dateForm2').style.display='none'">Cancel</button>
		  </form>
		</div>
    <div class="modal" id="dateForm3">
      <div class="modal-content">
        <h3>BLOCKED DATES</h3>
        <?php
          if($record11['issatblocked']==1){
            echo '<h5>* ALL SATURDAYS</h5>';
          }
          if($record11['issunblocked']==1){
            echo '<h5>* ALL SUNDAYS</h5>';
          }
          if(count($blocked_list)>0){
            for($n=0; $n<count($blocked_list); $n++){?>
              <h5>* <?php echo $blocked_list[$n]['dates'];?></h5><?php
            }
          }
          else{
            echo 'NO BLOCKED DATES';
          }
        ?>
      </div>
    </div>
    <script>
		  var modal = document.getElementById('dateForm');
		  window.onclick = function(event){
    	  if(event.target == modal){
          modal.style.display = "none";
    	  }
		  }
      var modal = document.getElementById('dateForm2');
		  window.onclick = function(event){
    	  if(event.target == modal){
          modal.style.display = "none";
    	  }
		  }
      var modal = document.getElementById('dateForm3');
		  window.onclick = function(event){
    	  if(event.target == modal){
          modal.style.display = "none";
    	  }
		  }    	
		</script>    
	</div>

	<?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>