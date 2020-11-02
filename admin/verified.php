<?php
require_once('../inc/connection.php');
session_start();
?>
<?php 
             if(!isset($_GET['error'])){

                    $query="SELECT studio.studio_id,studio.studio_name,studio.s_email,studio.s_tele_no,owner.first_name,owner.e_mail,owner.tp_number FROM studio 
                    INNER JOIN owner ON  owner.owner_id = studio.owner_id WHERE studio.verified = '1' "; 
                    $result_set=mysqli_query($connection,$query);
                    if($result_set){
                        if(mysqli_num_rows($result_set)==0){
                            header('Location: verified.php?error=There is no verified studios');
                        }
                        else{
                            $table = "<table>";
                            $table .= "<tr><th>Studio name</th><th>Studio email</th><th>Studio contact</th><th>Owner</th><th>Owner email</th><th>Owner contact</th></tr>";
                            while($record =mysqli_fetch_assoc($result_set)){
                                $table .= "<tr>";
                                    $table .= "<td>".$record['studio_name']."</td>";
                                    $table .= "<td>".$record['s_email']."</td>";
                                    $table .= "<td>".$record['s_tele_no']."</td>";
                                    $table .= "<td>".$record['first_name']."</td>";
                                    $table .= "<td>".$record['e_mail']."</td>";
                                    $table .= "<td>".$record['tp_number']."</td>";
                                                                           
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

<?php
     require_once('../inc/connection_close.php');
?>
  	

