<?php
require_once('../inc/connection.php');
session_start();
?>
<?php 
                    if(isset($_GET['cus_c_id']) && isset($_GET['cus_studio_id']) && isset($_GET['cus_complaint_id'])){//check whether admin press the solve btton on customer complaints
                        $c_id=$_GET['cus_c_id'];
                        $studio_id=$_GET['cus_studio_id'];
                        $complaint_id=$_GET['cus_complaint_id'];
                        $query="UPDATE customer_complaint SET flag='1' WHERE c_id=$c_id AND studio_id=$studio_id AND complaint_id=$complaint_id";//update the flag 0 to 1(then this row will not be view by admin)
                        $result_set=mysqli_query($connection,$query);
                   }
                    if(isset($_GET['stud_c_id']) && isset($_GET['stud_studio_id']) && isset($_GET['stud_complaint_id'])){//check whether admin press the solve btton on studio complaints
                        $c_id=$_GET['stud_c_id'];
                        $studio_id=$_GET['stud_studio_id'];
                        $complaint_id=$_GET['stud_complaint_id'];
                        $query="UPDATE studio_complaint SET flag='1' WHERE studio_id=$studio_id AND c_id=$c_id AND complaint_id=$complaint_id"; //update the flag 0 to 1 (then this row will not be view by admin)
                        $result_set=mysqli_query($connection,$query);
                       
                    }
                   
                    $errors1= array();
                    $errors2= array();
                    //join customer_complint with complaint,studio and customer
                    $query1="SELECT * FROM customer_complaint JOIN studio ON  studio.studio_id = customer_complaint.studio_id JOIN customer ON customer.c_id=customer_complaint.c_id JOIN complaint ON complaint.complaint_id=customer_complaint.complaint_id WHERE flag='0' "; 
                    $result_set1=mysqli_query($connection,$query1);
                            if($result_set1){
                                if(mysqli_num_rows($result_set1)==0){ //check whether the number of complants from customer is 0
                                     $errors1[]="There is no complaints from customers";
                                }
                                else{
                                    //store data in the customer table which takes from database
                                    $table1 = "<table>";
                                    $table1 .= "<tr><th>customer(from)</th><th>Studio(to)</th><th>customer-email</th><th>studio-email</th><th>description</th><th>slove</th>";
                                    while($record =mysqli_fetch_assoc($result_set1)){
                                       $c_id=$record['c_id'];
                                       $studio_id=$record['studio_id'];
                                       $complaint_id=$record['complaint_id'];
                                        $table1 .= "<tr>";
                                            $table1.= "<td>".$record['first_name']."</td>";
                                            $table1.= "<td>".$record['studio_name']."</td>";
                                            $table1.= "<td>".$record['email']."</td>";
                                            $table1.= "<td>".$record['s_email']."</td>";
                                            $table1.= "<td>".$record['description']."</td>";
                                            $table1 .= "<td>"."<form action=complaint.php?cus_c_id=$c_id&cus_studio_id=$studio_id&cus_complaint_id=$complaint_id method='post' >'<button type='submit' name='solve'>solve</button></form>"."</td>";
                                        $table1.= "</tr>";
                                    }

                                }
                                                   
                            }
                    
                  
                    $query2="SELECT * FROM studio_complaint JOIN studio ON  studio.studio_id = studio_complaint.studio_id JOIN customer ON customer.c_id=studio_complaint.c_id JOIN complaint ON complaint.complaint_id=studio_complaint.complaint_id WHERE flag='0'"; 
                    $result_set2=mysqli_query($connection,$query2);
                            if($result_set2){
                                if(mysqli_num_rows($result_set2)==0){//check whether the number of complants from studios is 0
                                    $errors2[]="There is no complaints from studios";
                                }
                                else{
                                    //store data in the studio complaints table which takes from database
                                    $table2 = "<table>";
                                    $table2 .= "<tr><th>studio(from)</th><th>customer(to)</th><th>studio-email</th><th>customer-email</th><th>description</th><th>slove</th>";
                                    while($record =mysqli_fetch_assoc($result_set2)){
                                        $studio_id=$record['studio_id'];
                                        $c_id=$record['c_id'];                                        
                                        $complaint_id=$record['complaint_id'];
                                        $table2 .= "<tr>";
                                            $table2.= "<td>".$record['studio_name']."</td>";
                                            $table2.= "<td>".$record['first_name']."</td>";
                                            $table2.= "<td>".$record['s_email']."</td>";
                                            $table2.= "<td>".$record['email']."</td>";
                                            $table2.= "<td>".$record['description']."</td>";
                                            $table2 .= "<td>"."<form action=complaint.php?stud_studio_id=$studio_id&stud_c_id=$c_id&stud_complaint_id=$complaint_id method='post' >'<button type='submit' name='solve'>solve</button></form>"."</td>";
                                        $table2.= "</tr>";
                                    }

                                }

                            
                        
                            }                   
     

    ?>

<!DOCTYPE html>
<html>
<title>admin dashboard</title>
<head>
   <link rel="stylesheet" type="text/css" href="css/admin.css">  
   <?php  require_once('inc/navbar.php'); ?>
   
</head>
<body>
<div class="row">
    <?php 
       
        if(!empty($errors1)){
            foreach($errors1 as $error){
                echo '<div class="error">';
                echo $error . '<br>';
                echo '</div>';
            }
        }else{
            echo "<h2>Customers' Complaints</h2>";
            echo $table1;
        }
          
        if(!empty($errors2)){
               foreach($errors2 as $error){
                echo '<div class="error">';
                echo $error . '<br>';
                echo '</div>';
               }
               
         }else{
            echo "<h2>Studios' Complaints</h2>";
            echo $table2;
         }      
     
    ?>
</div>

</body>
</html>

<?php
     require_once('../inc/connection_close.php');
?>
  	


