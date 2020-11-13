<?php
require_once('../inc/connection.php');
session_start();
?>
<?php 
            if(!isset($_GET['error'])){
                if(isset($_GET['studio_verify'])){
                    $x=$_GET['studio_verify'];
                    $query1="UPDATE studio SET verified='1' WHERE studio_id=$x";
                    $result_set1=mysqli_query($connection,$query1);
                    
                    //sending all approved email to the studio
                    $query6 = "SELECT s_email FROM studio WHERE studio_id=$x";
                    $result_set6 = mysqli_query($connection,$query6);
                    $record6 = mysqli_fetch_assoc($result_set6);
                    $appmail = $record6['s_email'];
                    $message='';

                    $to=$appmail;
                    $from='recordexonline@gmail.com';
                    $subject='Account is Approved!';
                    $message.='Your Account is Approved.<br>Now You are fully verified to use RecordEx!<br>';
                    $message.='Log in Here. http://localhost/REX/view/login.php';
                    $header="From: {$from}\r\nContent-Type: text/html;";

                    $send_result=mail($to,$subject,$message,$header);
                    header('Location: ../admin/adminhome.php');
                }
                  
                if(isset($_GET['owner_verify'])){
                    $y=$_GET['owner_verify'];
                    $query2="SELECT owner.e_mail FROM owner INNER JOIN studio ON owner.owner_id=studio.owner_id WHERE studio.studio_id=$y";
                    $result_set2=mysqli_query($connection,$query2);
                      
                    if($result_set2){
                      $record2 = mysqli_fetch_assoc($result_set2);
                      $o_email = $record2['e_mail'];
                      
                      $token=uniqid(md5(time()));

                      $query3 = "INSERT INTO owner_verification (email,token) VALUES ('$o_email','$token')";
                      $result_set3 = mysqli_query($connection,$query3);

                      //send token to the email
                      $to=$o_email;
                      $from='recordexonline@gmail.com';
                      $subject='Owner Verification';
                      $message.='You are required to Verify your personal email address. Please click the link to verify.<br>';
                      $message.='http://localhost/REX/view/owner_verified.php?token='.$token . '&s_id='.$y;
                      $header="From: {$from}\r\nContent-Type: text/html;";

                      $send_result=mail($to,$subject,$message,$header);
                      header('Location: ../admin/adminhome.php');
                    }
                }

                    $query="SELECT studio.studio_id,studio.studio_name,studio.s_email,studio.s_tele_no,studio.owner_verified,owner.first_name,owner.e_mail,owner.tp_number FROM studio 
                    INNER JOIN owner ON owner.owner_id = studio.owner_id WHERE ((studio.verified = '0') AND (studio.email_verified = '1'))"; 
                    $result_set=mysqli_query($connection,$query);
                    if($result_set){
                        if(mysqli_num_rows($result_set)==0){
                            header('Location: adminhome.php?error=There is no pending studios');
                        }
                        else{
                            $table = "<table>";
                            $table .= "<tr><th>Studio name</th><th>Studio email</th><th>Studio contact</th><th>Owner</th><th>Owner email</th><th>Owner contact</th><th>Owner Verification</th><th>Account Verification</th></tr>";
                            while($record =mysqli_fetch_assoc($result_set)){
                                $table .= "<tr>";
                                    $table .= "<td>".$record['studio_name']."</td>";
                                    $table .= "<td>".$record['s_email']."</td>";
                                    $table .= "<td>".$record['s_tele_no']."</td>";
                                    $table .= "<td>".$record['first_name']."</td>";
                                    $table .= "<td>".$record['e_mail']."</td>";
                                    $table .= "<td>".$record['tp_number']."</td>";
                                    
                                    $query4 = "SELECT * FROM owner_verification WHERE email='{$record['e_mail']}'";
                                    $result_set4 = mysqli_query($connection,$query4);
                                    if(mysqli_num_rows($result_set4)==1){
                                        $table .= "<td>"."<button style='background:#737A76;'>Pending</button>"."</td>";    
                                      }
                                      else{
                                        if($record['owner_verified']==1){
                                         $table .= "<td>"."<button style='background:#13D32A;'>Done</button>"."</td>";     
                                        }
                                        else{
                                          $table .= "<td>"."<form action=adminhome.php?owner_verify=$record[studio_id] method='post' ><button type='submit' name='verify'>Send Mail</button></form>"."</td>";  
                                        }         
                                      }
                                      $table .= "<td>"."<form action=adminhome.php?studio_verify=$record[studio_id] method='post' ><button type='submit' name='verify'>Verify</button></form>"."</td>";
                                                    
                                $table .= "</tr>";
                            }
                        }
                    }
              }
    ?>

<!DOCTYPE html>
<html>
<title>admin dashboard</title>
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
  	


