
<?php session_start();?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css/login.css">
    <style media="screen">
      input[type="submit"]{
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <?php require_once('../inc/navbar.php');?>

    <div class="center">
      <h1>Reset Password</h1>
      <form action="../controller/password_reset1_controller.php" method="post">
      <?php 
        if(isset($_SESSION['alert'])){
          echo $_SESSION['alert'];
        }   
        
      ?>
        <div class="textfield">
          <input type="email" required name="email">
          <span></span>
          <label>Enter Your Email Address</label>
        </div>
        <input type="submit" name="send" value="Send">
    </div>
  </body>
</html>