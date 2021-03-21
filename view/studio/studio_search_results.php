<?php 
require_once('../../inc/connection.php');
session_start();
	if(isset($_SESSION['type'])){
		$type=$_SESSION['type']; //store radio type to set the radio button checked
	}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Studio Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../css/customer/cust_dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/stu_dash_navbar.php');?></div>
	<div class="0">
	<form action="../../controller/studio/studio_dash_controller.php" method="post">
  		<input type="text" name="search" placeholder="Search..">
		<button type="submit" name="submit-search"><i class="fa fa-search"></i></button>
			<label class="type">
               <input type="radio" id="all" name="type" value="all" class="option-input radio" <?php if($type=='all') echo "checked"  ?>>All
            </label>
            <label class="type">
               <input type="radio" id="name" name="type" value="name" class="option-input radio" <?php if($type=='name') echo "checked"  ?>>Name
            </label>
            <label class="type">
               <input type="radio" id="service" name="type" value="service" class="option-input radio"<?php if($type=='service') echo "checked"  ?>>Service
            </label>
            <label class="type">
               <input type="radio" id="distric" name="type" value="distric" class="option-input radio" <?php if($type=='distric') echo "checked"  ?>>Distric
            </label>
	</form>
	</div>
	<div class="">
        <?php 
            echo '<div class="row">';
			if(isset($_GET['search_result']) && !empty($_GET['search_result'])){
				$studio_id_arr = unserialize(urldecode($_GET['search_result']));//get the studio id array              
				foreach($studio_id_arr as $s){ //for loop to get studio names
					$query="SELECT * FROM studio WHERE studio_id =$s[0] AND verified=1 AND email_verified=1"; //select studio name 
					$result_set=mysqli_query($connection,$query);
					if($result_set){
						while($record =mysqli_fetch_assoc($result_set)){
							if($record['profile']){
								$profile =$record['profile'];
							}
							else{
								$profile = "studio1.png";
							}
							echo '<div class="row2">';
							echo '<div class="col1">'; 																			
								echo "<img src='../../img/studio/$profile' height='180' width='180' >";
							echo '</div>';	
							
								echo '<div class="col2">';
								echo "<h4>$record[studio_name]<br></h4>"; 
								echo "<h5>$record[distric]</h5>";	
								echo '<div class="rating">';
									echo '<span class="fa fa-star checked"></span>';
									echo '<span class="fa fa-star checked"></span>';
									echo '<span class="fa fa-star checked"></span>';
									echo '<span class="fa fa-star checked"></span>';
									echo '<span class="fa fa-star checked"></span>';
								echo '</div>';
								echo '</div>';
								echo '<div class="col3">';
									echo "<a href='other_studio_prof.php?studio_id=$record[studio_id]'>View</a>";
								echo '</div>';	
							echo '</div>';
					}
                        
                    }
					
				}
			}
                else if(isset($_GET['error'])){
				 echo '<div class="error">';
					echo $_GET['error'];
				 echo '</div>';
                }
            echo '</div>';
        ?>
	</div>

  	

	

</body>
</html>