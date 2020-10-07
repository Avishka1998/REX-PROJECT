<?php $token=$_GET['token']; ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset Password</title>
    <link rel="stylesheet" href="../css/login.css">
    <style media="screen">
      input[type="submit"]{
        margin: 0 0 20px 0;
      }
    </style>
  </head>
  <body>
    <?php require_once('../inc/navbar.php');?>

      <div class="center">
        <h1>Reset Password</h1>
        <form class="" action="../controller/password_reset2_controller.php?token=$token" method="post">
          <div class="textfield">
            <input type="password" name="password" >
            <span></span>
            <label>Password</label>
          </div>

          <div class="textfield">
            <input type="password" name="re_password" >
            <span></span>
            <label>Re-Enter Password</label>
          </div>

          <input type="submit" value="Reset" name="Reset">
        </form>
      </div>
  </body>
</html>
