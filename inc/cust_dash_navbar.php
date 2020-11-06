<?php  require_once('connection.php');?>
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

    nav ul li a.user{
      font-style: italic;
      text-transform: none;
    }

    nav ul li a:hover{
      background: rgb(129,0,250);
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
    <?php  
    $user_name="User";
    if(isset($_SESSION['username']) && isset($_SESSION['user_id'])){
              $user_name=$_SESSION['username'];//store logged customer username and c_id
              $user_id=$_SESSION['user_id'];
    }
    $query="SELECT * FROM customer WHERE c_id = $user_id"; //query to get data of the logged customer ($user id is included from cust_dash_navbar.php)
		$result_set=mysqli_query($connection,$query);
		if($result_set){
         $record =mysqli_fetch_assoc($result_set);
         $user_name=$record['first_name'];
         $user_id=$record['c_id'];
           				
		}
    ?>
    <nav>
      <a class="logo" href="../customer/cust_dash.php"><img src="../../inc/logo3.png"></a>
      <ul>
        <li><a href="../customer/cust_dash.php">Dashboard</a></li>
        <li><a href="../../view/customer/cust_inbox.php">Inbox</a></li>
        <li><a href="../../controller/logout.php">Logout</a></li>
        <li><a class="user" href="../../view/customer/cust_profile.php"><?php echo $user_name;?></a></li>
      </ul>
    </nav>
  </body>
</html>

