<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="../css/cust_reg.css">
  </head>
  <body>
    <?php require_once('../inc/navbar.php');?>
    <div class="center">
      <h1>Customer Registration</h1>

      <form action="../controller/cust_reg_controller.php" method="post"       >
        <div class="textfield">
          <!-- <input type="text" required name="first_name"> -->
          <input type="text" name="first_name">
          <span></span>
          <label>First Name</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="last_name"> -->
          <input type="text" name="last_name" >
          <span></span>
          <label>Last Name</label>
        </div>

        <div class="textfield">
          <!-- <input type="email" required name="email"> -->
          <input type="email" name="email" >
          <span></span>
          <label>Email Address</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="tele_no"> -->
          <input type="text" name="tele_no">
          <span></span>
          <label>Mobile Number</label>
        </div>

        <div class="textfield">
          <!-- <input type="password" required name="password"> -->
          <input type="password" name="password" >
          <span></span>
          <label>Password</label>
        </div>

        <div class="textfield">
          <!-- <input type="password" required name="repeat_password"> -->
          <input type="password" name="repeat_password" >
          <span></span>
          <label>Re-Enter Password</label>
        </div>
        <div class="error">
            <?php
                if(isset($_GET['errors']) && !empty($_GET['errors'])){
                    $str_arr = unserialize(urldecode($_GET['errors']));
                     foreach($str_arr as $error){
                        echo $error . '<br>';
                    }
                }
            ?>
        </div>

        <input type="submit" value="Register" name="submit">
      </form>
    </div>
  </body>
</html>
