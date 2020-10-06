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
      <h1>Studio Registration</h1>
      <h1>Studio Details</h1>


      <form action="../controller/studio_reg_controller.php" method="post" action="#">
        <div class="textfield">
          <!-- <input type="text" required name="studio_name"> -->
          <input type="text" name="studio_name">
          
          <span></span>
          <label>Studio Name</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="s_address_1"> -->
          <input type="text" name="s_address_1">
          <span></span>
          <label>Address Line 1</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="s_address_2"> -->
          <input type="text" name="s_address_2">
          <span></span>
          <label>Address Line 2</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="s_city"> -->
          <input type="text" name="s_city">
          <span></span>
          <label>City</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="distric"> -->
          <input type="text" name="distric">
          <span></span>
          <label>District</label>
        </div>

        <div class="textfield">
          <!-- <input type="Number" required name="postalcode"> -->
          <input type="Number" name="postalcode">
          <span></span>
          <label>Postal Code</label>
        </div>


        <div class="textfield">
          <!-- <input type="email" required name="s_email"> -->
          <input type="email" name="s_email">
          <span></span>
          <label>Studio Email Address</label>
        </div>

        <div class="textfield">
          <!-- <input type="Number" required name="s_tele_no"> -->
          <input type="Number" name="s_tele_no">
          <span></span>
          <label>Telephone Number</label>
        </div>

        <div class="textfield">
          <!-- <input type="password" required name="password"> -->
          <input type="password" name="password">
          <span></span>
          <label>Password</label>
        </div>

        <div class="textfield">
          <!-- <input type="password" required name="repeat_password"> -->
          <input type="password" name="repeat_password">
          <span></span>
          <label>Confirm Password</label>
        </div>
        <div class="">
            <?php
                if(isset($_GET['errors']) && !empty($_GET['errors'])){   
                    $str_arr = unserialize(urldecode($_GET['errors']));         
                     foreach($str_arr as $error){
                        echo $error . '<br>';
                    }
                }
                else{
              
                }
            ?>
        </div>
        <input type="submit" value="Regiter" name="submit2">
      </form>
    </div>
  </body>
</html>
