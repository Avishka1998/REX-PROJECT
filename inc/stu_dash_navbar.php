<head>
    <style>

       *{
         padding: 0;
         margin: 0;
         text-decoration: none; 
         list-style: none;
         box-sizing: border-box;
      }
  
      nav{
         background-color: white;
         height: 40px;
         width: 100%;
         position: fixed;
         overflow: hidden;
         z-index: 1; 
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
         color: black;
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
         background: rgb(255,0,140);
         color: white;
         transition: 0.5s; 
      }

      nav a.logo{
         line-height: 40px;
         padding-left:15px;
      }

      nav a.logo img{
         height: 40px; 
      }
    </style>
</head>
<?php
$user_name="User";
 if(isset($_SESSION['username']) && isset($_SESSION['user_id'])){
      $user_name=$_SESSION['username'];//store logged customer username and c_id
      $user_id=$_SESSION['user_id'];
   }
?>

<nav>
  <a class="logo" href="#"><img src="../../inc/logo3.png"></a>
  <ul>
    <li><a href="../studio/studio_dash.php">Dashboard</a></li>
    <li><a href="#">Jobs</a></li>
    <li><a href="#">Inbox</a></li>
    <li><a href="../../controller/logout.php">Logout</a></li>
    <li><a class="user" href="../studio/studio_profile.php">User</a></li>
  </ul>  
</nav>