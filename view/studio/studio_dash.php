<?php require_once('../../inc/connection.php');
      session_start();
?>      

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Studio Dash</title>
    <link rel="stylesheet" href="../../css/studio/studio_dash.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>
<?php require_once('../../inc/stu_dash_navbar.php');?>
    <div class="container">      
      <div class="search"> 
         <form action="../../controller/studio/studio_dash_controller.php" method="post">  

            <input type="text" name="search" placeholder="Search..">
            <button type="submit" name="submit-search"><i class="fa fa-search"></i></button>  
            
            <label class="type">
               <input type="radio" id="all" name="type" value="all" checked="checked" class="option-input radio">All
            </label>
            <label class="type">
               <input type="radio" id="name" name="type" value="name" class="option-input radio">Name
            </label>
            <label class="type">
               <input type="radio" id="service" name="type" value="service" class="option-input radio">Service
            </label>
            <label class="type">
               <input type="radio" id="distric" name="type" value="distric" class="option-input radio">Distric
            </label>
         </form>
      </div>      
      <div class="audio-gears">
         <button onclick="window.location.href='add_audio_gears.php';">Add Audio Gears</button>              
      </div>
      <div class="instrument">
         <button onclick="window.location.href='add_instruments.php';">Add Instruments</button>              
      </div>
      <div class="service">
         <button onclick="window.location.href='add_services.php';">Add Services</button>
      </div>

      <div class="abc" style="text-align: center;">
         <h2>Recent Jobs</h2>
         <div class="jobs">
            <div id="job1">
               <img src="../../img/customer/profile.jpg">
               <p>John</p>
               <button>View</button>
            </div>
            <div id="job2">
               <img src="../../img/customer/profile.jpg">
               <p>Paul</p>
               <button>View</button>
            </div>
            <div id="job3">
               <img src="../../img/customer/profile.jpg">
               <p>Brendon</p>
               <button>View</button>
            </div>
            <div id="job4">
               <img src="../../img/customer/profile.jpg">
               <p>Amir</p>
               <button>View</button>
            </div>
         </div>
      </div>
      <div class="calander">
      <div class="thismonth">
       <div class="month">      
       <ul>
         <li>
            This Month<br>
            <span style="font-size:18px">2020</span>
         </li>
       </ul>
       </div>

      <ul class="weekdays">
      <li>Mo</li>
      <li>Tu</li>
      <li>We</li>
      <li>Th</li>
      <li>Fr</li>
      <li>Sa</li>
      <li>Su</li>
      </ul>

      <ul class="days">  
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
      <li>6</li>
      <li>7</li>
      <li>8</li>
      <li>9</li>
      <li>10</li>
      <li>11</li>
      <li>12</li>
      <li>13</li>
      <li>14</li>
      <li>15</li>
      <li>16</li>
      <li>17</li>
      <li>18</li>
      <li>19</li>
      <li>20</li>
      <li>21</li>
      <li>22</li>
      <li>23</li>
      <li>24</li>
      <li>25</li>
      <li>26</li>
      <li>27</li>
      <li>28</li>
      <li>29</li>
      <li>30</li>
      <li>31</li>
      </ul>
   </div>
   
   <div class="nextmonth">
       <div class="month">      
       <ul>
         <li>
            Next Month<br>
            <span style="font-size:18px">2020</span>
         </li>
       </ul>
       </div>

      <ul class="weekdays">
      <li>Mo</li>
      <li>Tu</li>
      <li>We</li>
      <li>Th</li>
      <li>Fr</li>
      <li>Sa</li>
      <li>Su</li>
      </ul>

      <ul class="days">  
      <li>1</li>
      <li>2</li>
      <li>3</li>
      <li>4</li>
      <li>5</li>
      <li>6</li>
      <li>7</li>
      <li>8</li>
      <li>9</li>
      <li>10</li>
      <li>11</li>
      <li>12</li>
      <li>13</li>
      <li>14</li>
      <li>15</li>
      <li>16</li>
      <li>17</li>
      <li>18</li>
      <li>19</li>
      <li>20</li>
      <li>21</li>
      <li>22</li>
      <li>23</li>
      <li>24</li>
      <li>25</li>
      <li>26</li>
      <li>27</li>
      <li>28</li>
      <li>29</li>
      <li>30</li>
      <li>31</li>
      </ul>
   </div>
 </div>    
</div>
   <?php require_once('../../inc/minfooter.php'); ?>
</body>
</html>