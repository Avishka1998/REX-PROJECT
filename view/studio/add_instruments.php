<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Instrument</title>
    <link rel="stylesheet" href="../../css/studio/add_services.css">
</head>

<body> 
 <div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>                
 <main>          
<div class="column" style="width: 70%;">
        <div class="adds">
        <center><h1 class="addtitle">UPDATE EXISTING INSTRUMENTS</h1></center>
                    
        <?php 
                $query1="SELECT * FROM studio_instrument WHERE studio_id=$user_id";
                $result_set1 = mysqli_query($connection,$query1);
                if($result_set1){
                        $rows=mysqli_num_rows($result_set1);
                        if($rows>=1){
                                $temp=1;                                        
                                echo '<form action="../../controller/studio/add_instruments_controller.php?studio_id='.$user_id.'&rows='.$rows.'" class="service_form" method="post">';
                                while($record = mysqli_fetch_assoc($result_set1)){
                                        echo '<div class="row" >                               
                                                <div class="column" style="width:50%;">
                                                        <lable class="description" name="service'.$temp.'" style="padding-bottom:20px;"><h2 style="margin-left:0;">'.$record['name'].'</h2></lable> 
                                                </div>
                                                <div class="column" style="width:20%;">
                                                        <div class="slideTwo">	
                                                                <input type="hidden"  id="unchecked_service'.$temp.'"  name="uncheck'.$temp.'"  value="'.$record['name'].'" />                                                                        
                                                                <input type="checkbox"  id="service'.$temp.'" name="check'.$temp.'"  value="'.$record['name'].'"  checked/>
                                                                <label for="service'.$temp.'"></label>                  
                                                        </div>
                                                
                                                </div>  
                                                <div class="column" style="width:30%; padding-left:10px; padding-right:60px;">
                                                        <div class="form-popup" id="dvservice'.$temp.'" >  
                                                                <div class="form__group">
                                                                <input type="text" class="form__input"  name="charge'.$temp.'" value="'.$record['charge'].'" />
                                                                <input type="text" class="form__input"  name="qty'.$temp.'" value="'.$record['qty'].'" />
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
   
                                        <div class="column" style="padding: 15px 575px;">
                                                <button type="submit_name" class="btn save2" name="submit_instrument2">Save</button>
                                        </div>
                
                                </div>
                                </form>
                                ';

                        }
                        else{
                                $query2 = "SELECT * FROM sample_equipment WHERE type=0";
                                $result_set2=mysqli_query($connection,$query2);
                                if($result_set2){
                                        $rows=mysqli_num_rows($result_set2);
                                        echo '<form action="../../controller/studio/add_instruments_controller.php?studio_id='.$user_id.'&rows='.$rows.'" class="service_form" method="post">';
                                        while($record = mysqli_fetch_assoc($result_set2)){
                                                echo '<div class="row" >                               
                                                        <div class="column" style="width:50%;">
                                                                <lable class="description" name="service'.$record['id'].'" style="padding-bottom:20px;"><h2 style="margin-left:0;">'.$record['name'].'</h2></lable> 
                                                        </div>
                                                        <div class="column" style="width:20%;">
                                                                <div class="slideTwo">	
                                                                        <input type="checkbox"  id="service'.$record['id'].'"  onclick="rdonly'.$record['id'].'(this)"  name="check'.$record['id'].'" value="'.$record['name'].'" />
                                                                        <label for="service'.$record['id'].'"></label>                  
                                                                </div>
                                                        </div>  
                                                        <div class="column" style="width:30%; padding-left:10px; padding-right:60px;">
                                                                <div class="form-popup" id="dvservice'.$record['id'].'" >  
                                                                        <div class="form__group">
                                                                        <input type="text" id="charge'.$record['id'].'" class="form__input"  name="charge'.$record['id'].'" placeholder="Charge Per Day" readonly/>
                                                                        <input type="text" id="qty'.$record['id'].'" class="form__input"  name="qty'.$record['id'].'" placeholder="No of Instruments" readonly/>
                                                                        </div>                                                     
                                                                </div>	
      
                                                                <script>
                                                                function rdonly'.$record['id'].'(service'.$record['id'].') {
                                                                        document.getElementById("charge'.$record['id'].'").removeAttribute("readonly");
                                                                        document.getElementById("qty'.$record['id'].'").removeAttribute("readonly");
                                                                }
                                                                </script>
                                                        </div>  
                                                </div> 
                                                ';
                                        }
                                        echo '
                                        <div class="row">
                                                <div class="column" style="padding: 10px 575px;">
                                                        <button type="submit_name" class="btn save2" name="submit_instrument1">Save</button>
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
  <div class="form-popup mys" id="nameForm">
     <center><h1 class="addtitle">ADD NEW INSTRUMENT</h1></center>
     <form action='<?php echo "../../controller/studio/add_instruments_controller.php?studio_id=$user_id"?>' class="form-container" method="post">  

        <label for="service" class="service"><b>Instrument Name</b></label>
        <input type="text" value="" name="instrument_name" placeholder="Enter Instrument Name" required>

	<label for="charge" class="service"><b>Charge</b></label>                                                                                                                                                                                                       
        <input type="text" value=""  name="charge" placeholder="per day" required>
                                
        <label for="qty" class="service"><b>Number of Instruments</b></label>
	<input type="text" value=""  name="qty" placeholder="Enter the number of instruments you have" required>

	<button type="submit_name" class="btn save" name="submit_other_instrument">Save</button>
	<button type="button" class="btn cancel" onclick="document.getElementById('nameForm').style.display='none'">Close</button>
    </form>
  </div>  
</div>            
</main>
<?php require_once('../../inc/minfooter.php');?>
</body>
</html>