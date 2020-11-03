<?php
     require_once('../inc/connection.php');

?>
<?php session_start();?>


 <?php

    if(isset($_POST['submit1'])){//check the submit button is pressed
        $errors= array(); //make an array of errors
        //check form validation
        if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
            $errors[]='firstname is missing or invalid!';
        }
        if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
            $errors[]='lastname is missing or invalid!';
        }
        if(!isset($_POST['h_email']) || strlen(trim($_POST['h_email']))<1){
            $errors[]='owner email is missing or invalid!';
        }
        if(!isset($_POST['h_tele_no']) || strlen(trim($_POST['h_tele_no']))<1){
            $errors[]='owner telephone number is missing or invalid!';
        }

        if(empty($errors)){//if no errors
            //store form data in variables
            $first_name = mysqli_real_escape_string($connection,$_POST['first_name']);
            $last_name = mysqli_real_escape_string($connection,$_POST['last_name']);
            $h_email= mysqli_real_escape_string($connection,$_POST['h_email']);
            $h_tele_no= mysqli_real_escape_string($connection,$_POST['h_tele_no']);


            $query1 = "SELECT * FROM owner WHERE e_mail = '{$h_email}'";
            $result_set1 = mysqli_query($connection,$query1);


            if($result_set1){
                if(mysqli_num_rows($result_set1)>=1){
                    $query4 = "SELECT * FROM owner WHERE first_name='{$first_name}' AND last_name='{$last_name}' AND tp_number='{$h_tele_no}'";
                    $result_set4 = mysqli_query($connection,$query4);

                    if(mysqli_num_rows($result_set4)==1){
                        $query5 = "SELECT owner_id,first_name FROM owner WHERE e_mail='{$h_email}'";
                        $result_set5 = mysqli_query($connection,$query4);

                        if($result_set5){
                                $record = mysqli_fetch_assoc($result_set4);
                                $_SESSION['user_id']=$record['owner_id'];
                                $_SESSION['user_name']=$record['first_name'];
                                header('Location: ../view/studio_reg_2.php');
                        }

                    }
                    else{
                        $errors[] = "The email is already existing!";
                        header('Location: ../view/studio_reg_1.php?errors='.urlencode(serialize($errors)));
                    }

                }
                else{

                    $query2 = "INSERT INTO owner(first_name,last_name,e_mail,tp_number)
                    VALUES ('{$first_name}','{$last_name}','{$h_email}','{$h_tele_no}')";

                    $result_set2 = mysqli_query($connection,$query2);
                    if($result_set2){
                        //query to take data to make session
                        $query3 = "SELECT owner_id,first_name FROM owner WHERE e_mail ='{$h_email}' AND first_name='{$first_name}'";
                        $result_set3 = mysqli_query($connection,$query3);
                         if($result_set3){
                                $record =mysqli_fetch_assoc($result_set3);
                                //make session
                                $_SESSION['user_id']= $record['owner_id'];
                                $_SESSION['user_name']=$record['first_name'];
                                //go to next form page
                                header('Location: ../view/studio_reg_2.php');
                          }
                         else{

                            $errors[]="invalid username or password!";
                        }

                    }

                }


                }
            }
            else{
                header('Location: ../view/studio_reg_1.php?errors='.urlencode(serialize($errors)));
                //$errors[] ='query error';
            }
        }

?>
