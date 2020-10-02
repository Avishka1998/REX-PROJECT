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
      <h1>Owner Details</h1>


      <form method="post" action="#">
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
          <input type="text" required name="h_address_1">
          <span></span>
          <label>Address Line 1</label>
        </div>

        <div class="textfield">
          <input type="text" required name="h_address_2">
          <span></span>
          <label>Address Line 2</label>
        </div>

        <div class="textfield">
          <input type="text" required name="h_city">
          <span></span>
          <label>City</label>
        </div>

        <div class="textfield">
          <input type="text" required name="h_district">
          <span></span>
          <label>District</label>
        </div>


        <div class="textfield">
          <input type="email" required name="h_email">
          <span></span>
          <label>Personal Email Address</label>
        </div>

        <div class="textfield">
          <input type="Number" required name="h_tele_no">
          <span></span>
          <label>Mobile Number</label>
        </div>

        <input type="submit" value="Next">
      </form>
    </div>
  </body>
</html>
