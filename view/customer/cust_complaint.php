<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer-Complaint</title>
    <link rel="stylesheet" href="../../css/login.css">
  </head>
  <body style="background-color: #004882;background: linear-gradient(rgba(225,225,225,0.5),rgba(227,168,155,0.7));">
  <?php require_once('../../inc/cust_dash_navbar.php');?>
    

    <div class="center">
      <h1 style="color:red;">Add your complaint</h1>

      <form method="post" action="../../controller/customer/cust_complaint_controller.php">
        <div class="textfield">
          <!-- <input type="text" required name="username"> -->
          <input type="text" name="complaint" placeholder="Type here">
          <span></span>
          <label></label>
        </div>
        <div class="error">
            <?php
                if(isset($_GET['errors']) && !empty($_GET['errors'])){
                    $str_arr = unserialize(urldecode($_GET['errors']));
                     foreach($str_arr as $error){
                        echo $error . '<br>';
                    }
                }
            ?>
        </div>

        <input style="background: linear-gradient(120deg,#9f353e,#730308);" type="submit" value="submit" name="submit">

	  </form>
	  <div class="sent">
            <?php
                if(isset($_GET['success'])){
					echo $_GET['success'];
				}
                   
                
            ?>
        </div>
    </div>
  </body>
</html>

<?php 
					// echo '<div class="box">';
					// $query="SELECT description FROM complaint WHERE field='0' LIMIT 4";
					// $result_set=mysqli_query($connection,$query);
					// if($result_set){
					// 	echo "<label>Choose a complaint:</label>";
					// 	echo "<select id='complaint' name='complaint'>";
					// 	while($record=mysqli_fetch_assoc($result_set) ){
					// 		if($record['complaint_id']==1){
					// 			//break;
					// 		}else{
					// 			echo "<option value='$record[description]'>".$record['description']."</option>";													

					// 		}	
					// 	}
					// 	echo '</select>';

					// }
					// echo '<div>';
?>