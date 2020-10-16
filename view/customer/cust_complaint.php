<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../css/cust_dash.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/cust_dash_navbar.php'); ?></div>
	 
	<div class="">
	<form action="../../controller/customer/cust_complaint_controller.php" method="post">
  		<input type="text" name="search" placeholder="For which studio">
		  <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>

	</form>
	</div>
	<div class="">
        <?php 
            echo '<div class="row">';
			if(isset($_GET['search_result']) && !empty($_GET['search_result'])){
				$studio_id_arr = unserialize(urldecode($_GET['search_result']));//get the studio id array              
				foreach($studio_id_arr as $s){ //for loop to get studio names
					$query="SELECT studio_name FROM studio WHERE studio_id =$s[0]"; //select studio name 
					$result_set=mysqli_query($connection,$query);
					if($result_set){
						while($record =mysqli_fetch_assoc($result_set)){
								echo '<div class="column">'; 
											echo '<img src="../../img/studio1.png">';
											echo "<h3><a href='studio_prof.php'>$record[studio_name] </a> <br></h1>";
											echo '<div class="rating">';
												echo '<span class="fa fa-star checked"></span>';
												echo '<span class="fa fa-star checked"></span>';
												echo '<span class="fa fa-star checked"></span>';
												echo '<span class="fa fa-star checked"></span>';
												echo '<span class="fa fa-star checked"></span>';
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

     <div class="row">
      <div class=""><h1>Add a complain</h1></div>

      <form action="../../controller/customer/cust_complaint_controller.php" method="post" >

        <div class="textfield">
          <!-- <input type="email" required name="email"> -->
          <input type="email" name="email" >
          <span></span>
          <label>Email Address</label>
        </div>

        <div class="textfield">
			
			
				<?php 
					$query="SELECT description FROM complaint WHERE field='0' LIMIT 4";
					$result_set=mysqli_query($connection,$query);
					if($result_set){
						echo "<label for='complaint'>Choose a complaint:</label>";
						echo "<select id='complaint' name='complaints'>";
						while($record=mysqli_fetch_assoc($result_set)){
							echo "<option value='$record[description]'>".$record['description']."</option>";
						}
						echo '</select>';

					}


				?>
				
			
			
        </div>



        <input type="submit" value="submit" name="submit">
      </form>
    </div>


	

</body>
</html>