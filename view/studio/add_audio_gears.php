<?php 
require_once('../../inc/connection.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Audio Gears</title>
    <link rel="stylesheet" href="../../css/studio/add_audio_gears.css">
</head>

<body> 
 ><?php require_once('../../inc/stu_dash_navbar.php');?>                
           
<div class="column">
       <div class="row">
                <h1><center>Add Your Audio Gears</center></h1>
               
       </div> 
        <form action="as.php" class="service_form" method="post">                       
                <div class="row" >                               
                                <div class="column">
                                                <lable class="description" name="service"><h2>Sennheiser HD280  </h2> </lable> 
                                </div>
                                <div class="column">
                                        <div class="slideTwo">	
                                                <input type="checkbox"  id="service1"  onclick="openForm1(this)"  name="check1"  />
                                                <label for="service1"></label>                  
                                        </div>
                                
                                </div>  
                                <div class="column" >
                                        <div class="form-popup" id="dvservice1" >  
                                                <div class="form__group">
                                                <input type="text" class="form__input" id="name" placeholder="Enter the charge per hour" required=""  />
                                                <label for="name" class="form__label">charge per hour</label>
                                                </div>                               
                                                        
                                        </div>	
                                        <script>
                                        function openForm1(service1) {
                                                var dvservice1 = document.getElementById("dvservice1");
                                                 dvservice1.style.display = service1.checked ? "block" : "none";
                                               
                                        }
                                       
                                
                                        </script>
                                </div>  
                </div>

                <div class="row">       
                                <div class="column">
                                                <lable class="description"><h2>Stedman Proscreen XL </h2></lable> 
                                </div>
                                <div class="column">
                                        <div class="slideTwo">	
                                                <input type="checkbox"  id="service2" onclick="openForm2(this)" name="check1" />
                                                <label for="service2"></label>                  
                                        </div>

                                </div>
                                <div class="column" >
                                        <div class="form-popup" id="dvservice2" >  
                                                <div class="form__group">
                                                <input type="text" class="form__input" id="name" placeholder="Enter the charge per hour" required=""  />
                                                <label for="name" class="form__label">charge per hour</label>
                                                </div>                               
                                                        
                                        </div>	
                                        <script>
                                        function openForm2(service2) {
                                                var dvservice2 = document.getElementById("dvservice2");
                                                 dvservice2.style.display = service2.checked ? "block" : "none";
                                               
                                        }
                                
                                        </script>
                                </div>
                
                </div>
                <div class="row">       
                                <div class="column">
                                                <lable class="description"><h2>Avid Artist Mix</h2></lable> 
                                </div>
                                <div class="column">
                                        <div class="slideTwo">	
                                                <input type="checkbox"  id="service3" onclick="openForm3(this)" name="check1" />
                                                <label for="service3"></label>                  
                                        </div>

                                </div>
                                <div class="column" >
                                        <div class="form-popup" id="dvservice3" >  
                                                <div class="form__group">
                                                <input type="text" class="form__input" id="name" placeholder="Enter the charge per hour" required=""  />
                                                <label for="name" class="form__label">charge per hour</label>
                                                </div>                               
                                                        
                                        </div>	
                                        <script>
                                        function openForm3(service3) {
                                                var dvservice3 = document.getElementById("dvservice3");
                                                 dvservice3.style.display = service3.checked ? "block" : "none";
                                               
                                        }
                                
                                        </script>
                                </div>
                
                </div>
                <div class="row">
                        <div class="column" style="padding: 10px 500px;">
                                <button type="submit_name" class="btn" name="submit_service">Save</button>
                        </div>
        
                </div>
           
        </form>
         <div class="row">
                <div class="column">
                        <button class="open-button" onclick="openForm()"><h4>Add New Audio Gear</h4></button>
                </div>
        </div>
        <div class="row"> 
                <div class="column">
                        <div class="form-popup" id="nameForm">
		        <form action="" class="form-container" method="post">  

		                <label for="service" class="service"><b>Audio Gear Name</b></label>
		                <input type="text" value="" name="first_name" placeholder="Enter the audio gear name" >

		                <label for="charge" class="service"><b>Charge Per Hour</b></label>
		                <input type="text" value=""  name="charge" placeholder="Enter the charge per hour">

		                <button type="submit_name" class="btn" name="submit_name">Save</button>
		                <button type="button" class="btn cancel" onclick="closeForm()">Close</button>
		         </form>
                        </div>	
                        <script>
                        function openForm() {
                                document.getElementById("nameForm").style.display = "block";
                        }

                        function closeForm() {
                                document.getElementById("nameForm").style.display = "none";
                        }
                        </script>
                </div>

         </div>
        
</div>  
<div class="column">
        <div class="row">
                <h1>Audio Gears</h1>
               
       </div>
       <div class="row" >
                        <table>
                                <tr>
                                        <th>Audio Gear</th>
                                        <th>Charge(Rs) per hour</th>

                                </tr>
                                <tr>
                                        <td>Stedman Proscreen XL</td>
                                        <td>5500.00</td>
 
                                </tr>
                                <tr>
                                        <td>Stedman Proscreen XL </td>
                                        <td>1000.00</td>
 
                                </tr>
                                <tr>
                                        <td>Avid Artist Mix</td>
                                        <td>4500.00</td>
 
                                </tr>


                        </table>
       </div>


</div>            

</body>
</html>