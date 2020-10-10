
<?php
require_once('../inc/connection.php');
$alert='';
if(isset($_GET['token'])){
  $token=$_GET['token'];
      $ret_query = "SELECT email FROM tokens WHERE token='$token'";
      $ret_result = mysqli_query($connection,$ret_query);
      if(mysqli_num_rows($ret_result)<1){
        $alert = 'Link not Existing. Please Try Again!';
      }
      session_start();
      $_SESSION['token']= $token;
  }

else{
  header('Location: ../view/password_reset1.php');
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>View</title>
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
      <h1>Verify Email</h1>
      <form class="" action="../controller/password_reset2_controller.php" method="post">
        <div class="textfield">
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>

        <div class="textfield">
          <input type="password" name="re-password">
          <span></span>
          <label>Re-Password</label>
        </div>

        <div class="error">
          <?php
          if(isset($_SESSION['alert'])){
            $alert = $_SESSION['alert'];
        }

        echo $alert;
        $alert='';

          ?>
        </div>
        <input type="submit" name="reset" value="reset">
      </form>
    </div>
  </body>
</html>
