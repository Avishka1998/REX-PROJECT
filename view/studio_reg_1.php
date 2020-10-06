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
      <h1>Owner Details</h1>


      <form action="../controller/studio_owner_reg_controller.php" method="post" action="#">
        <div class="textfield">
          <!-- <input type="text" required name="first_name"> -->
          <input type="text"  name="first_name">
          <span></span>
          <label>First Name</label>
        </div>

        <div class="textfield">
          <!-- <input type="text" required name="last_name"> -->
          <input type="text" name="last_name">
          <span></span>
          <label>Last Name</label>
        </div>

        <div class="textfield">
          <!-- <input type="email" required name="h_email"> -->
          <input type="email" name="h_email">
          <span></span>
          <label>Personal Email Address</label>
        </div>

        <div class="textfield">
          <!-- <input type="Number" required name="h_tele_no"> -->
          <input type="Number" name="h_tele_no">
          <span></span>
          <label>Mobile Number</label>
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

        <input type="submit" value="Next" name="submit1">
      </form>
    </div>
  </body>
</html>