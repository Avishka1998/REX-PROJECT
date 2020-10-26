<?php 
require_once('../../inc/connection.php');
session_start();
if(isset($_SESSION['studio_id'])){
	$studio_id=$_SESSION['studio_id'];
}

?>
<!DOCTYPE html>
<html>
<head>
	<title>Customer Dashboard</title>
	<link rel="stylesheet" type="text/css" href="../../css/cust_dash.css">
</head>
<body>
	<div class="nav"><?php require_once('../../inc/cust_dash_navbar.php'); ?></div>
	<div class="row">
	<!-- $table2 .= "<td>"."<form action=complaint.php?stud_studio_id=$studio_id&stud_c_id=$c_id&stud_complaint_id=$complaint_id method='post' >'<button type='submit' name='solve'>solve</button></form>"."</td>"; -->
                                        <!-- $ta -->
	<form action=<?php echo "../../controller/customer/cust_complaint_controller.php?studio_id=$studio_id&c_id=$user_id";?> method="post" >
				<?php 
					echo '<div class="box">';
					$query="SELECT description FROM complaint WHERE field='0' LIMIT 4";
					$result_set=mysqli_query($connection,$query);
					if($result_set){
						echo "<label>Choose a complaint:</label>";
						echo "<select id='complaint' name='complaint'>";
						while($record=mysqli_fetch_assoc($result_set) ){
							if($record['complaint_id']==1){
								break;
							}else{
								echo "<option value='$record[description]'>".$record['description']."</option>";													

							}	
						}
						echo '</select>';

					}
					echo '<div>';
				?>	
		</br>
		<input type="text" placeholder="If any other complaint other than the list" name="other_complaint"></input>
		<button type="submit1" name="submit1">submit</button>

		
		
	  </form>
	  </div> 
		

</body>
</html>