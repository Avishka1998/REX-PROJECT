<?php
     require_once('../inc/connection.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <?php require_once('../inc/navbar.php'); ?>
    <link rel="stylesheet" href="../css/sign_up.css">

    <style>

    #signupnav{
      background-color: #3459e2;
      color: white;
    }

      .column{
        text-align: center;
        float: left;
        width: 50%;
        padding : 80px;
        height: 300px; /* Should be removed. Only for demonstration */
        }


          /* Clear floats after the columns */
      .row :after {
        padding right:20px;
        content: "";
        display: table;
        clear: both;
}

      .column{
        margin-top: 10%;
      }

      .cusregpro:hover,.sturegpro:hover{
        opacity: 0.75;
      }

      .signsel{
        background-color: rgba(255,255,255,0.3);
        width: 400px;
        margin-left: 62px;
      }

</style>
</head>

<body>

  <div class="raw">

    <div class="column">
      <a href="studio_reg_1.php" class="sturegpro"><img src="../img/DiGiCo_Aerosmith_2-thumb.jpg" width="400" height="250"></a>
      <p class="signsel" style="font-size:30px; color:black; font-family:Rockwell;">I own a Studio</p>
    </div>
    </div>

    <div class="column">
      <a href="cust_reg.php" class="cusregpro"><img src="../img/girl-sings-studio-spectacular-photo-vocalist-musician-red-smoke-different-styles-music-rock-jazz-pop-168770984.jpg" width="400" height="250"></a>
      <p class="signsel" style="font-size:30px; color:black; font-family:Rockwell;">Looking for a Studio</p>
    </div>

  </div>

</body>
</html>

<?php
     require_once('../inc/connection_close.php');
?>
