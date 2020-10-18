<?php
  require_once('../inc/connection.php');
  if(isset($_GET['token'])){
    $token=$_GET['token'];
    session_start();
    $_SESSION['token']=$token;
    header('Location: ../controller/email_success_controller.php');
  }  
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Email Verification</title>
    <style>
        h1{
           position:absolute;
           top:50%;
           left:50%;
           transform: translate(-50%, -50%);
           width: 100%;
           text-align:center;
           font-family: Arial, Helvetica, sans-serif;
           color: red;
           font-size: 3em;
        }  
    </style>
  </head>

  <body>
    <?php require_once('../inc/navbar.php');?>
    <h1>INVALID LINK!</h1>   
  </body>
</html>