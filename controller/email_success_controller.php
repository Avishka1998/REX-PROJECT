<?php
    require_once('../inc/connection.php');
    session_start();
    if(isset($_SESSION['token'])){
      $token = $_SESSION['token'];
        session_unset();
        session_destroy();
        $ret_query = "SELECT * FROM email_verification WHERE token='$token'";
        $ret_result = mysqli_query($connection,$ret_query);
        
        if(mysqli_num_rows($ret_result)==1){
           $record = mysqli_fetch_assoc($ret_result);
           $email = $record['email'];
           $update_query1 = "UPDATE customer SET email_verified=1 WHERE email='$email'";
           $update_result1 = mysqli_query($connection,$update_query1);
           $update_query2 = "UPDATE studio SET email_verified=1 WHERE s_email='$email'";
           $update_result2 = mysqli_query($connection,$update_query2);  
           $delete_query = "DELETE FROM email_verification WHERE token='$token'";
           $delete_result = mysqli_query($connection,$delete_query);
           $everified = 'Your Email is now Verified!';
           session_start();
           $_SESSION['everified']=$everified; 
           header('Location: ../view/login.php'); 
        }
        else header('Location: ../view/email_success.php');   
      }   
     
    
?>