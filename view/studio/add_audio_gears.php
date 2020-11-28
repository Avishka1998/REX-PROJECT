<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio_Gears</title>
    <link rel="stylesheet" href="../../css/studio/add_services.css">
</head>

<body> 
 <div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>                
           
<div class="column" style="width: 70%;">
       <div class="row">
                <center><h1>Add Your Audio Gears</h1></center>
               
       </div>        
        <?php 
                $query1="SELECT * FROM studio_audio_gear WHERE studio_id=$user_id";
                $result_set1 = mysqli_query($connection,$query1);
                if($result_set1){
                        $rows=mysqli_num_rows($result_set1);
                        if($rows>=1){
                                $temp=1;                                        
                                echo '<form action="../../controller/studio/add_audio_gears_controller.php?studio_id='.$user_id.'&rows='.$rows.'" class="service_form" method="post">';
                                while($record = mysqli_fetch_assoc($result_set1)){
                                        echo '<div class="row" >                               
                                                <div class="column">
                                                                <lable class="description" name="service'.$temp.'"><h2>'.$record['name'].'</h2></lable> 
                                                </div>
                                                <div class="column">
                                                        <div class="slideTwo">	
                                                                <input type="hidden"  id="unchecked_service'.$temp.'"  name="uncheck'.$temp.'"  value="'.$record['name'].'" />                                                                        
                                                                <input type="checkbox"  id="service'.$temp.'"  onclick="openForm'.$temp.'(this)"  name="check'.$temp.'"  value="'.$record['name'].'"  checked/>
                                                                <label for="service'.$temp.'"></label>                  
                                                        </div>
                                                
                                                </div>  
                                                <div class="column" >
                                                        <div class="form-popup" id="dvservice'.$temp.'" >  
                                                                <div class="form__group">
                                                                <input type="text" class="form__input"  name="charge'.$temp.'" value="'.$record['charge'].'" />
                                                                <label for="name" class="form__label">charge per hour</label>
                                                                <input type="text" class="form__input"  name="qty'.$temp.'" value="'.$record['qty'].'" />
                                                                <label for="name" class="form__label">Number of instruments</label>
                                                               
                                                                </div>                               
                                                                        
                                                        </div>	
                                                        <script>
                                                        function openForm'.$temp.'(service'.$temp.') {
                                                                var dvservice'.$temp.' = document.getElementById("dvservice'.$temp.'");
                                                                dvservice'.$temp.'.style.display = service'.$temp.'.checked ? "block" : "none";
                                                        
                                                        } 
                                                
                                                        </script>
                                                </div>  
                                        </div> 
                                        ';
                                        $temp++;
                                }
                                echo '
                                <div class="row">
   
                                        <div class="column" style="padding: 15px 500px;">
                                                <button type="submit_name" class="btn" name="submit_add_audio_gear2">Save</button>
                                        </div>
                
                                </div>
                                </form>
                                ';

                        }
                        else{
                                $query2 = "SELECT * FROM sample_equipment WHERE type=1";
                                $result_set2=mysqli_query($connection,$query2);
                                if($result_set2){
                                        $rows=mysqli_num_rows($result_set2);
                                        echo '<form action="../../controller/studio/add_audio_gears_controller.php?studio_id='.$user_id.'&rows='.$rows.'" class="service_form" method="post">';
                                        while($record = mysqli_fetch_assoc($result_set2)){
                                                echo '<div class="row" >                               
                                                        <div class="column">
                                                                        <lable class="description" name="service'.$record['id'].'" style="width: 150%; padding bottom:20px"><h2>'.$record['name'].'</h2></lable> 
                                                        </div>
                                                        <div class="column">
                                                                <div class="slideTwo">	
                                                                        <input type="checkbox"  id="service'.$record['id'].'"  onclick="openForm'.$record['id'].'(this)"  name="check'.$record['id'].'"  value="'.$record['name'].'" />
                                                                        <label for="service'.$record['id'].'"></label>                  
                                                                </div>
                                                        
                                                        </div>  
                                                        <div class="column" >
                                                                <div class="form-popup" id="dvservice'.$record['id'].'" >  
                                                                        <div class="form__group">
                                                                        <input type="text" class="form__input"  name="charge'.$record['id'].'" placeholder="Charge per day" />
                                                                        <label for="name" class="form__label">charge per hour</label>
                                                                        <input type="text" class="form__input"  name="qty'.$record['id'].'" placeholder="Number of audio gears" />
                                                                        <label for="name" class="form__label">Number of audio gears</label>
                                                                        </div>                               
                                                                                
                                                                </div>	
      
                                                                <script>
                                                                function openForm'.$record['id'].'(service'.$record['id'].') {
                                                                        var dvservice'.$record['id'].' = document.getElementById("dvservice'.$record['id'].'");
                                                                        dvservice'.$record['id'].'.style.display = service'.$record['id'].'.checked ? "block" : "none";
                                                                
                                                                }
                                                        
                                                        
                                                                </script>
                                                        </div>  
                                                </div> 
                                                ';
                                        }
                                        echo '
                                        <div class="row">
                                                <div class="column" style="padding: 10px 500px;">
                                                        <button type="submit_name" class="btn" name="submit_add_audio_gear1">Save</button>
                                                </div>
                        
                                        </div>
                                        </form>
                                        ';

                                }
                                else{
                                        echo "erorr";
                                }

                        }
                }

                
        ?>               

        
         <div class="row">
                <div class="column">
                        <button class="open-button" onclick="document.getElementById('nameForm').style.display='block'"><h4>Other Instrument</h4></button>
                </div>
        </div>
        <div class="row"> 
                <div class="column">
                        <div class="form-popup" id="nameForm">
		        <form action='<?php echo "../../controller/studio/add_audio_gears_controller.php?studio_id=$user_id"?>' class="form-container" method="post">  

		                <label for="service" class="service"><b>Audio Gear Name</b></label>
		                <input type="text" value="" name="instrument_name" placeholder="Enter Audio Gear Name" required>

		                <label for="charge" class="service"><b>Charge</b></label>
                                <input type="text" value=""  name="charge" placeholder="per day" required>
                                
                                <label for="qty" class="service"><b>Number of Audio Gears</b></label>
		                <input type="text" value=""  name="qty" placeholder="Enter the number of audio gears you have" required>

		                <button type="submit_name" class="btn" name="submit_other_instrument">Save</button>
		                <button type="button" class="btn cancel" onclick="document.getElementById('nameForm').style.display='none'">Close</button>
		         </form>
                        </div>	
                        <script>
                                var modal = document.getElementById('nameForm');
                                window.onclick = function(event) {
                                if (event.target == modal) {
                                modal.style.display = "none";
                                 }
                                } 	
		        </script>
                </div>

         </div>
 

                                                   
        <?php  
                if(isset($_GET['added'])){  
                         $massage=$_GET['added']; 
                         function function_alert1($message) { 
                                // Display the alert box  
                                echo "<script>alert('$message');</script>"; 
                        }
                        function_alert1($massage);                                                                         
                                                                               
                 }                             
                else if(isset($_GET['deleted'])){
                        $massage=$_GET['deleted'];
                        function function_alert2($message) {                                  
                                echo "<script>alert('$message');</script>"; 
                        }
                        function_alert2($massage);                                
                }
                if(isset($_GET['updated'])){
                        $massage=$_GET['updated'];
                        function function_alert3($message) {                                  
                                echo "<script>alert('$message');</script>"; 
                        }
                        function_alert3($massage); 
                         
                }
                if(isset($_GET['new_instrument'])){
                        $massage=$_GET['new_instrument'];
                        function function_alert4($message) {                                  
                                echo "<script>alert('$message');</script>"; 
                        }
                        function_alert4($massage); 
                         
                }
                if(isset($_GET['error'])){
                        $massage=$_GET['error'];
                        function function_alert4($message) {                                  
                                echo "<script>alert('$message');</script>"; 
                        }
                        function_alert4($massage); 
                         
                }     
        ?>     
</div>  
<div class="column" style="width: 30%;">
        <div class="row">
                <h1>Your Audio Gears</h1>
                <?php   
                        $query="SELECT * FROM studio_audio_gear WHERE studio_id=$user_id";
                        $result_set= mysqli_query($connection,$query1);
                        if($result_set){
                                if(mysqli_num_rows($result_set)==0){ //check whether the number of services from customers is 0
                                //      $errors[]="There is no services from customers";
                                }
                                else{
                                    //store data in the customer table which takes from database
                                    $table = "<table>";                                    
                                    $table .= "<tr><th>Audio Gear</th><th>Charge(Rs) per day</th><th>Number of audiogears";
                                    while($record =mysqli_fetch_assoc($result_set)){                                    
                                       $table .= "<tr>";
                                       $table.= "<td>".$record['name']."</td>";
                                       $table.= "<td>".$record['charge']."</td>";  
                                       $table.= "<td>".$record['qty']."</td>";                                      
                                       $table.= "</tr>";
                                    }
                                    $table.= "</table>";
                                   
                                }
                                                   
                            }           
                ?>
               
       </div>
       <div class="row" >
                 <?php 
                        if(isset($table)){
                                echo $table;
                        }
                ?>
       </div>


</div>            

</body>
</html>