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

      <form action="../controller/cust_reg_controller.php" method="post" action="#" >
        <div class="textfield">
          <input type="text" required name="first_name">
          <span></span>
          <label>First Name</label>
        </div>

        <div class="textfield">
          <input type="text" required name="last_name">
          <span></span>
          <label>Last Name</label>
        </div>

        <div class="textfield">
          <input type="email" required name="email">
          <span></span>
          <label>Email Address</label>
        </div>

        <div class="textfield">
          <input type="text" required name="tele_no">
          <span></span>
          <label>Mobile Number</label>
        </div>

        <div class="textfield">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>

        <div class="textfield">
          <input type="password" required name="repeat_password">
          <span></span>
          <label>Confirm Password</label>
        </div>

        <input type="submit" value="Register" name="submit">
      </form>
    </div>
  </body>
</html>
