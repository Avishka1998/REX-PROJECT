<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Customer Registration</title>
    <link rel="stylesheet" href="css/cust_reg.css">
  </head>
  <body>
    <?php require_once('inc/navbar.php');?>
    <div class="center">
      <h1>Customer Registration</h1>

      <form method="post" action="#">
        <div class="textfield">
          <input type="text" required name="cusfirstname">
          <span></span>
          <label>First Name</label>
        </div>

        <div class="textfield">
          <input type="text" required name="cuslastname">
          <span></span>
          <label>Last Name</label>
        </div>

        <div class="textfield">
          <input type="email" required name="cusemail">
          <span></span>
          <label>Email Address</label>
        </div>

        <div class="textfield">
          <input type="text" required name="cusphonenum">
          <span></span>
          <label>Mobile Number</label>
        </div>

        <div class="textfield">
          <input type="password" required name="cuspassword">
          <span></span>
          <label>Password</label>
        </div>

        <div class="textfield">
          <input type="password" required name="cusconpassword">
          <span></span>
          <label>Confirm Password</label>
        </div>

        <input type="submit" value="Register">
      </form>
    </div>
  </body>
</html>
