<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Services</title>
    <link rel="stylesheet" href="../../css/studio/add_services.css">
</head>

<body> 
 <div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>                
           
<div class="column" style="width: 60%;">
       <div class="row">
                <center><h1>Add Your Services</h1></center>
               
       </div>        
        <?php 
                $query1="SELECT * FROM studio_service WHERE studio_id=$user_id";
                $result_set1 = mysqli_query($connection,$query1);
                if($result_set1){
                        $rows=mysqli_num_rows($result_set1);
                        if($rows>=1){
                                $temp=1;                                        
                                echo '<form action="../../controller/studio/add_services_controller.php?studio_id='.$user_id.'&rows='.$rows.'" class="service_form" method="post">';
                                while($record = mysqli_fetch_assoc($result_set1)){
                                        echo '<div class="row" >                               
                                                <div class="column">
                                                                <lable class="description" name="service'.$temp.'"><h2>'.$record['service_name'].'</h2></lable> 
                                                </div>
                                                <div class="column">
                                                        <div class="slideTwo">	
                                                                <input type="hidden"  id="unchecked_service'.$temp.'"  name="uncheck'.$temp.'"  value="'.$record['service_name'].'" />                                                                        
                                                                <input type="checkbox"  id="service'.$temp.'"  onclick="openForm'.$temp.'(this)"  name="check'.$temp.'"  value="'.$record['service_name'].'"  checked/>
                                                                <label for="service'.$temp.'"></label>                  
                                                        </div>
                                                
                                                </div>  
                                                <div class="column" >
                                                        <div class="form-popup" id="dvservice'.$temp.'" >  
                                                                <div class="form__group">
                                                                <input type="text" class="form__input"  name="charge'.$temp.'" value="'.$record['service_charge'].'" />
                                                                <label for="name" class="form__label">charge per hour</label>
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
                                                <button type="submit_name" class="btn" name="submit_service2">Save</button>
                                        </div>
                
                                </div>
                                </form>
                                ';

                        }
                        else{
                                $query2 = "SELECT * FROM service";
                                $result_set2=mysqli_query($connection,$query2);
                                if($result_set2){
                                        $rows=mysqli_num_rows($result_set2);
                                        echo '<form action="../../controller/studio/add_services_controller.php?studio_id='.$user_id.'&rows='.$rows.'" class="service_form" method="post">';
                                        while($record = mysqli_fetch_assoc($result_set2)){
                                                echo '<div class="row" >                               
                                                        <div class="column">
                                                                        <lable class="description" name="service'.$record['service_id'].'"><h2>'.$record['name'].'</h2></lable> 
                                                        </div>
                                                        <div class="column">
                                                                <div class="slideTwo">	
                                                                        <input type="checkbox"  id="service'.$record['service_id'].'"  onclick="openForm'.$record['service_id'].'(this)"  name="check'.$record['service_id'].'"  value="'.$record['name'].'" />
                                                                        <label for="service'.$record['service_id'].'"></label>                  
                                                                </div>
                                                        
                                                        </div>  
                                                        <div class="column" >
                                                                <div class="form-popup" id="dvservice'.$record['service_id'].'" >  
                                                                        <div class="form__group">
                                                                        <input type="text" class="form__input"  name="charge'.$record['service_id'].'" placeholder="Enter the charge" />
                                                                        <label for="name" class="form__label">charge per hour</label>
                                                                        </div>                               
                                                                                
                                                                </div>	
                                                                <script>
                                                                function openForm'.$record['service_id'].'(service'.$record['service_id'].') {
                                                                        var dvservice'.$record['service_id'].' = document.getElementById("dvservice'.$record['service_id'].'");
                                                                        dvservice'.$record['service_id'].'.style.display = service'.$record['service_id'].'.checked ? "block" : "none";
                                                                
                                                                }
                                                        
                                                        
                                                                </script>
                                                        </div>  
                                                </div> 
                                                ';
                                        }
                                        echo '
                                        <div class="row">
                                                <div class="column" style="padding: 10px 500px;">
                                                        <button type="submit_name" class="btn" name="submit_service1">Save</button>
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
                        <button class="open-button" onclick="openForm()"><h4>Other Services</h4></button>
                </div>
        </div>
        <div class="row"> 
                <div class="column">
                        <div class="form-popup" id="nameForm">
		        <form action='<?php echo "../../controller/studio/add_services_controller.php?studio_id=$user_id"?>' class="form-container" method="post">  

		                <label for="service" class="service"><b>Service Name</b></label>
		                <input type="text" value="" name="service_name" placeholder="Enter Your Service Name" required>

		                <label for="charge" class="service"><b>Service charge</b></label>
		                <input type="text" value=""  name="charge" placeholder="per hour" required>

		                <button type="submit_name" class="btn" name="submit_other_service">Save</button>
		                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		         </form>
                        </div>	
                        <script>
                        function openForm() {
                                document.getElementById("nameForm").style.display = "block";
                        }

                        function closeForm() {
                                document.getElementById("nameForm").style.display = "none";
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
                if(isset($_GET['new_service'])){
                        $massage=$_GET['new_service'];
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
<div class="column" style="width: 40%;">
        <div class="row">
                <h1>Your Services</h1>
                <?php   
                        $query="SELECT * FROM studio_service WHERE studio_id=$user_id";
                        $result_set= mysqli_query($connection,$query1);
                        if($result_set){
                                if(mysqli_num_rows($result_set)==0){ //check whether the number of services from customers is 0
                                //      $errors[]="There is no services from customers";
                                }
                                else{
                                    //store data in the customer table which takes from database
                                    $table = "<table>";                                    
                                    $table .= "<tr><th>Service</th><th>Charge(Rs) per hour</th>";
                                    while($record =mysqli_fetch_assoc($result_set)){                                    
                                       $table .= "<tr>";
                                       $table.= "<td>".$record['service_name']."</td>";
                                       $table.= "<td>".$record['service_charge']."</td>";                                       
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