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

  <body>
    <nav>
      <a class="logo" href="../view/cust_dash.php"><img src="../inc/logo3.png"></a>
      <ul>
        <li><a href="../view/cust_dash.php">Dashboard</a></li>
        <li><a href="#">Inbox</a></li>
        <li><a href="#">Logout</a></li>
        <li><a href="#">User</a></li>
      </ul>
    </nav>
  </body>
</html>
