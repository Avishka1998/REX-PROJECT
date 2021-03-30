<?php

  function build_calendar($month,$year,$array,$blocked_list,$booked_list){
    $daysOfWeek = array('Sun','Mon','Tue','Wed','Thu','Fri','Sat');

    $firstDayOfMonth = mktime(0,0,0,$month,1,$year);
    $numberDays = date('t',$firstDayOfMonth);
    $dateComponents = getdate($firstDayOfMonth);     //details of month's first date (array)
    $monthName = $dateComponents['month'];
    $dayOfWeek = $dateComponents['wday'];

    $datetoday = date('Y-m-d');       //today
    
    //defining the calendar table
    $calendar = "<table class='table'>";
    $calendar .= "<center><h2>$monthName $year</h2>";
    
    $calendar.= "<a class='cbtn' href='?month=".date('m', mktime(0, 0, 0, $month-1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month-1, 1, $year))."'>Previous Month</a> ";
    $calendar.= " <a class='cbtn' href='?month=".date('m')."&year=".date('Y')."'>Current Month</a> ";
    $calendar.= "<a class='cbtn' href='?month=".date('m', mktime(0, 0, 0, $month+1, 1, $year))."&year=".date('Y', mktime(0, 0, 0, $month+1, 1, $year))."'>Next Month</a></center><br>";
    
    $calendar .= "<tr>";
    foreach($daysOfWeek as $day){
      $calendar .= "<th class='header'>$day</th>"; 
    }
    
    $currentDay = 1;      //day index (1-30)

    $calendar .= "</tr><tr>";
    if($dayOfWeek>0){
      for($k=0;$k<$dayOfWeek;$k++){ 
          $calendar .= "<td class='empty'></td>";     //empty dates before first day
      } 
    }

    $month = str_pad($month, 2, "0", STR_PAD_LEFT);     //month index

    while($currentDay<=$numberDays){  

      if ($dayOfWeek == 7){ 
          $dayOfWeek = 0; 
          $calendar .= "</tr><tr>"; 
      }

      $currentDayRel = str_pad($currentDay, 2, "0", STR_PAD_LEFT);       //date
      $date = "$year-$month-$currentDayRel"; 
      $dayname = strtolower(date('l', strtotime($date))); 
      $eventNum = 0; 
      $today = $date==date('Y-m-d')? "today" : "";

      $isblocked = 0;
      for($i=0; $i<count($blocked_list); $i++){         //return studio's blocked dates
        if($date==$blocked_list[$i]['dates']){
          $isblocked = 1;
          break;
        }
      }

      $isbooked = 0;
      for($i=0; $i<count($booked_list); $i++){        //return completely booked job list
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

if(isset($_GET['blocksat'])){                   //blocking all saturdays instantly
  $x = $_GET['blocksat'];
  $query13 = "UPDATE studio_schedule SET issatblocked = 1 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}
if(isset($_GET['unblocksat'])){             //unblocking all saturdays instantly
  $x = $_GET['unblocksat'];
  $query13 = "UPDATE studio_schedule SET issatblocked = 0 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}
if(isset($_GET['blocksun'])){         //blocking all sundays instantly
  $x = $_GET['blocksun'];
  $query13 = "UPDATE studio_schedule SET issunblocked = 1 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}
if(isset($_GET['unblocksun'])){         //unblocking all sundays instantly
  $x = $_GET['unblocksun'];
  $query13 = "UPDATE studio_schedule SET issunblocked = 0 WHERE id = $x";
  $res_set13 = mysqli_query($connection,$query13);
  header('Location: ../../view/studio/studio_schedule.php'); 
}

if(isset($_POST['submit'])){          //blocking an inputted date
  if($_POST['date']!=NULL){
    $blockedate = $_POST['date'];
    $query155 = "SELECT * FROM reserved_job WHERE date=$blockedate AND studio_id=$userid AND isplaced=1";
    $res_set155 = mysqli_query($connection,$query155);
    if(mysqli_num_rows($res_set155)>0){
      $query15 = "INSERT INTO blocked_dates (sid,dates) VALUES ('$userid','$blockedate')";
      $res_set15 = mysqli_query($connection,$query15);
      header('Location: ../../view/studio/studio_schedule.php');   
    }
  }
}

if(isset($_POST['submit2'])){         //unblocking an inputted date
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

    for($i=0; $i<count($block_list); $i++){           //check if the inputted date is in the blocked list
      if($block_list[$i]['dates']==$blockedate){
        $isblock = 1;
        break;
      }
    }

    if($isblock==1){            //deleting the particular blocked date if yes
      $query17 = "DELETE FROM blocked_dates WHERE sid='$userid' AND dates='$blockedate'";
      $res_set17 = mysqli_query($connection,$query17);
    }
    header('Location: ../../view/studio/studio_schedule.php'); 
  }
}

$query11 = "SELECT * FROM studio_schedule WHERE id = $userid";
$res_set11 = mysqli_query($connection,$query11);
if(mysqli_num_rows($res_set11)>0){
  $record11 = mysqli_fetch_assoc($res_set11);
}
else{
  $query12 = "INSERT INTO studio_schedule (id) VALUES ($userid)";
  $res_set12 = mysqli_query($connection,$query12);
  $query11 = "SELECT * FROM studio_schedule WHERE id = $userid";
  $res_set11 = mysqli_query($connection,$query11);
  $record11 = mysqli_fetch_assoc($res_set11);
}
//Blocked date array creation
$blocked_list=[];
$query16 = "SELECT * FROM blocked_dates WHERE sid=$userid";
$res_set16 = mysqli_query($connection,$query16);
if(mysqli_num_rows($res_set16)>0){
  while($row=mysqli_fetch_assoc($res_set16)){
    array_push($blocked_list,$row);
  }
}
//Booked job list
$booked_list=[];
$query17 = "SELECT date FROM reserved_job WHERE studio_id='$userid' AND isplaced = 1";
$res_set17 = mysqli_query($connection,$query17);
if(mysqli_num_rows($res_set17)>0){
  while($row=mysqli_fetch_assoc($res_set17)){
    array_push($booked_list,$row);
  }
}
?>