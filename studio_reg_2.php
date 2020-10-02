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
      <h1>Studio Registration</h1>
      <h1>Studio Details</h1>


      <form method="post" action="#">
        <div class="textfield">
          <input type="text" required name="studio_name">
          <span></span>
          <label>Studio Name</label>
        </div>

        <div class="textfield">
          <input type="text" required name="s_address_1">
          <span></span>
          <label>Address Line 1</label>
        </div>

        <div class="textfield">
          <input type="text" required name="s_address_2">
          <span></span>
          <label>Address Line 2</label>
        </div>

        <div class="textfield">
          <input type="text" required name="s_city">
          <span></span>
          <label>City</label>
        </div>

        <div class="textfield">
          <input type="text" required name="distric">
          <span></span>
          <label>District</label>
        </div>

        <div class="textfield">
          <input type="Number" required name="postalcode">
          <span></span>
          <label>Postal Code</label>
        </div>


        <div class="textfield">
          <input type="email" required name="s_email">
          <span></span>
          <label>Studio Email Address</label>
        </div>

        <div class="textfield">
          <input type="Number" required name="s_tele_no">
          <span></span>
          <label>Telephone Number</label>
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

        <input type="submit" value="Regiter">
      </form>
    </div>
  </body>
</html>
