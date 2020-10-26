
<?php
require_once('../../inc/connection.php');
session_start();


        if(isset($_POST['submit1']) ){
                echo $_POST['complaint']." ".$_POST['other_complaint'];
                if(isset($_GET['studio_id']) && isset($_GET['c_id'])){
                        $studio_id=$_GET['studio_id'];
                        $c_id=$_GET['c_id'];

                        //$query="INSERT INTO customer_complaint (c_id,studio_id,complaint_id,flag) VALUES($c_id,$studio_id,) "
                }

        }



    
    

?>