<head>
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
    </style>
  </head>

  <body>
    <nav>
      <a class="logo" href="../view/home.php"><img src="../inc/logo3.png"></a>
      <ul>
        <li><a href="../view/home.php">Home</a></li>
        <li><a href="#">Contact</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">SignUp</a></li>
        <li><a href="../view/cust_reg.php" class="">customer</a></li>
        <li><a href="../view/studio_reg_1.php" class="">studio</a></li>
        <li><a href="login.php">LogIn</a></li>
      </ul>
    </nav>
  </body>
</html>
