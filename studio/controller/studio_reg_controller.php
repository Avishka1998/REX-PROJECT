<?php
     require_once('../inc/connection.php');

?>
<?php session_start();?>
<?php
    if(isset($_POST['submit2'])){//check the submit button is pressed

        $errors= array(); //array of errors
        if(!isset($_POST['studio_name']) || strlen(trim($_POST['studio_name']))<1){
            $errors[]='studio name is missing or invalid';
        }
        if(!isset($_POST['s_address_1']) || strlen(trim($_POST['s_address_1']))<1){
            $errors[]='studio address is missing or invalid';
        }
        if(!isset($_POST['s_address_2']) || strlen(trim($_POST['s_address_2']))<1){
            $errors[]='studio address is missing or invalid';
        }
        if(!isset($_POST['s_city']) || strlen(trim($_POST['s_city']))<1){
            $errors[]='studio address is missing or invalid';
        }
        if(!isset($_POST['distric']) || strlen(trim($_POST['distric']))<1){
            $errors[]='distric is missing or invalid';
        }
        if(!isset($_POST['postalcode']) || strlen(trim($_POST['postalcode']))<1){
            $errors[]='postalcode is missing or invalid';
        }
        if(!isset($_POST['s_email']) || strlen(trim($_POST['s_email']))<1){
            $errors[]='studio email is missing or invalid';
        }
        if(!isset($_POST['s_tele_no']) || strlen(trim($_POST['s_tele_no']))<1){
            $errors[]='studio telephone number is missing or invalid';
        }
        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
            $errors[]="password is missing or invlid";
        }
        if(!isset($_POST['repeat_password']) || strlen(trim($_POST['repeat_password']))<1){
            $errors[]='repeat password is missing or invalid';
        }
        else{

                        //check password and repeat password is equel
                        if($_POST['repeat_password']!=$_POST['password']){
                            $errors[]='Password is incorrect!!';
                        }
        }

        if(empty($errors)){ //if no errors

            //store form data in variables
            $studio_name = mysqli_real_escape_string($connection,$_POST['studio_name']);
            $s_address_line1 = mysqli_real_escape_string($connection,$_POST['s_address_1']);
            $s_address_line2 = mysqli_real_escape_string($connection,$_POST['s_address_2']);
            $s_city = mysqli_real_escape_string($connection,$_POST['s_city']);
            $distric = mysqli_real_escape_string($connection,$_POST['s_city']);
            $postalcode = mysqli_real_escape_string($connection,$_POST['postalcode']);
            $s_email = mysqli_real_escape_string($connection,$_POST['s_email']);
            $s_tele_no = mysqli_real_escape_string($connection,$_POST['s_tele_no']);
            $password = mysqli_real_escape_string($connection,$_POST['repeat_password']);
            $hashed_password = sha1($password);

        //query to take the studio_id
        //$query1 = "SELECT * FROM owner WHERE owner_id = '{$_SESSION['user_id']}'";
        //$result_set1 = mysqli_query($connection,$query1);
            
        $query1 = "SELECT * FROM studio WHERE  s_email = '{$s_email}'";
        $result_set1 = mysqli_query($connection,$query1);


            if($result_set1){
                if(mysqli_num_rows($result_set1)>=1){
                    $errors[] = "The studio is already registered";
                    header('Location: ../view/studio_reg_2.php?errors='.urlencode(serialize($errors)));
                }
                else{
                    
                    $query2 = "INSERT INTO studio(studio_name,s_address_line1,s_address_line2,s_city,distric,postalcode,s_email,password,s_tele_no,owner_id)
                    VALUES ('{$studio_name}','{$s_address_line1}','{$s_address_line2}','{$s_city}','{$distric}','{$postalcode}','{$s_email}','{$hashed_password}','{$s_tele_no}','{$_SESSION['user_id']}')";
                    
                    $result_set2 = mysqli_query($connection,$query2);
                    if($result_set2){
                   
                        header('Location: ../view/studionext.php');
                  }
             
                }


                }
            else{

                $errors[] ='query error';
            }
        }
        else{
            header('Location: ../view/studio_reg_2.php?errors='.urlencode(serialize($errors)));
        }

    }

?>