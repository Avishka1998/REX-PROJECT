<?php
require_once('../inc/connection.php');
?>

<?php
  if(!isset($_GET['errors'])){
    $query = "SELECT * FROM customer WHERE email_verified = 1";
    $result_set = mysqli_query($connection,$query);
    
    if($result_set){
      if(mysqli_num_rows($result_set)==0){
        header('Location: customers.php?error=There are no verified customers.');    
      }
      else{
        $table = "<table>";
        $table .= "<tr><th>Customer ID</th><th>Customer Name</th><th>Email</th><th>Contact</th></tr>";
        while($record =mysqli_fetch_assoc($result_set)){
          $table .= "<tr>";
          $table .= "<td>".$record['c_id']."</td>";
          $table .= "<td>".$record['first_name']."_".$record['last_name']."</td>";
          $table .= "<td>".$record['email']."</td>";
          $table .= "<td>".$record['tele_no']."</td>"; 
          $table .= "</tr>"; 
        }  
      }  
    }
  }
?>

<!DOCTYPE html>
<html>
<title>verified studios</title>
<head>
   <link rel="stylesheet" type="text/css" href="css/admin.css">  
   <?php require_once('inc/navbar.php'); ?>
   
</head>
<body>
<div class="row">    
    <?php 
         if(isset($_GET['error'])){
            echo '<div class="error">';
               echo $_GET['error'];
            echo '</div>';
           }
           else{
            echo $table;
           }
    ?>
</div>
</body>
</html>

<?php require_once('../inc/connection_close.php'); ?>