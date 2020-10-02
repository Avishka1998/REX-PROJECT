<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <style media="screen">
    *{
      padding: 0;
      margin: 0;
      text-decoration: none;
      list-style: none;
      box-sizing: border-box;
    }

    header{
      font-family: sans-serif;
    }

    nav{
      background-color: white;
      height: 40px;
      width: 100%;
      position:fixed;
      overflow: hidden;
      z-index:1;
    }

    nav ul{
      float: right;
      margin-right: 20px;
    }

    nav ul li{
      display: inline-block;
      line-height: 40px;
      margin: 0 5px;
    }

    nav ul li a{
      font-family: sans-serif;
      color:black;
      font-size: 15px;
      padding: 12px 13px;
      text-transform: uppercase;
      font-weight: bold;
    }

    nav ul li a:hover{
      background: #9c9595;
      color:white;
      transition: 0.5s;
    }

    a.logo{
      line-height: 40px;
      padding-left: 15px;
    }

    a.logo img{
      height: 40px;
    }
      
     a.active{
      background-color: #3459e2;
      color: white;
    }  
    </style>
  </head>

  <body>
    <nav>
      <a class="logo" href="index.php"><img src="inc/logo3.png"></a>
      <ul>
        <?php $filename=basename($_SERVER['PHP_SELF'])?>
        <li><a href="index.php" <?php if($filename=='index.php') echo "class=active"?>>Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">SignUp</a></li>
        <li><a href="login.php" <?php if($filename=='login.php') echo "class=active"?>>LogIn</a></li>
      </ul>
    </nav>
  </body>
</html>
