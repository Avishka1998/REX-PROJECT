
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
      height: 50px;
      width: 100%;
      padding-top: 5px;
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
      border-radius: 20px;
    }

    nav ul li a:hover{
      background: #9999ff;
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

   <nav>
      <a class="logo" href="../view/home.php"><img src="../inc/logo3.png"></a>
      <ul>
      <?php $filename=basename($_SERVER['PHP_SELF'])?>
        <li><a href="adminhome.php" <?php if($filename=='adminhome.php') echo "class=active"?>>pending studios</a></li>
        <li><a href="verified.php" <?php if($filename=='verified.php') echo "class=active"?>>Verified studios</a></li>
        <li><a href="complaint.php" <?php if($filename=='complaint.php') echo "class=active"?>>Complaints</a></li>
        <li><a href="logout.php" <?php if($filename=='logout.php') echo "class=active"?>>Log out</a></li>
      </ul>
    </nav>
  </body>
</html>

