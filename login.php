<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Log In</title>
    <link rel="stylesheet" href="css/login.css">
  </head>
  <body>
    <?php require_once('inc/navbar.php'); ?>

    <div class="center">
      <h1>Login</h1>

      <form method="post" action="login.php">
        <div class="textfield">
          <input type="text" required name="username">
          <span></span>
          <label>Username</label>
        </div>

        <div class="textfield">
          <input type="password" required name="password">
          <span></span>
          <label>Password</label>
        </div>

        <input type="submit" value="Login">
        <div class="pass1"><a class="pass" href="password_reset1.php">Forgot Password?</a></div>
        <div class="signup_link">
          No Existing Account? <a href="#signup">Signup</a>
        </div>
      </form>
    </div>
  </body>
</html>
