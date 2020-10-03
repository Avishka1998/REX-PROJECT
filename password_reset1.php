<?php require_once('inc/connection.php');?>

<?php
  $alert='';
  if(isset($_POST['send'])){
    $email=$_POST['email'];
    $query1="SELECT email FROM customer WHERE email='$email'";
    $result1=mysqli_query($connection,$query1);
    $query2="SELECT s_email FROM studio WHERE s_email='$email'";
    $result2=mysqli_query($connection,$query2);
    if(mysqli_num_rows($result1)>0 || mysqli_num_rows($result2)>0){
      $token=uniqid(md5(time()));
      $query="INSERT INTO tokens (email,token) VALUES ('$email','$token')";
      $insert_result=mysqli_query($connection,$query);

      //send token to the Email
      $to=$email;
      $from='naveenudara356@gmail.com';
      $subject="Password Reset";
      $message='We have got your request to reset your password.<br>';
      $message.='Please follow the URL to reset your password.<br>';
      $message.='http://localhost/password%20reset/password_reset_2.php?token='.$token;
      $header="From: {$from}\r\nContent-Type: text/html;";

      $send_result=mail($to,$subject,$message,$header);

      if($send_result)
          $alert="<div class='sent'>Password request link sent to your email.<br>Please follow the link.</div>";
      else
          $alert="<div class='failed'>Failed to send the mail!</div>";
  }
  else
  $alert="<p class='error'>Email is not Valid!</p>";
    }
 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="css/login.css">
    <style media="screen">
      input[type="submit"]{
        margin-bottom: 30px;
      }
    </style>
  </head>
  <body>
    <?php require_once('inc/navbar.php');?>

    <div class="center">
      <h1>Reset Password</h1>
      <?php echo $alert;?>
      <form method="post" action="#">
        <div class="textfield">
          <input type="email" required name="email">
          <span></span>
          <label>Enter Your Email Address</label>
        </div>

        <input type="submit" name="send" value="Send">
    </div>
  </body>
</html>
