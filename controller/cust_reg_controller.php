<?php
     require_once('../inc/connection.php');

?>
<?php session_start();?>

 <?php
    if(isset($_POST['submit'])){//check the submit button is pressed
        $errors= array();  ////array of errors
        //check form validation
        if(!isset($_POST['first_name']) || strlen(trim($_POST['first_name']))<1){
            $errors[]='firstname is missing or invalid!';
        }
        if(!isset($_POST['last_name']) || strlen(trim($_POST['last_name']))<1){
            $errors[]='lastname is missing or invalid!';
        }
        if(!isset($_POST['email']) || strlen(trim($_POST['email']))<1){
            $errors[]='email is missing or invalid!';
        }
        if(!isset($_POST['tele_no']) || strlen(trim($_POST['tele_no']))<1){
            $errors[]='telephone number is missing or invalid!';
        }
        if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1){
            $errors[]="password is missing or invlid!";
        }
        if(!isset($_POST['repeat_password']) || strlen(trim($_POST['repeat_password']))<1){
            $errors[]='repeat password is missing or invalid!';
        }
        else{
            //check password and repeat password is equel
            if($_POST['repeat_password']!=$_POST['password']){
                $errors[]='Password is incorrect!';
            }

        }

        if(empty($errors)){//if no errors
            //store form data in variables
            $first_name = mysqli_real_escape_string($connection,$_POST['first_name']);
            $last_name = mysqli_real_escape_string($connection,$_POST['last_name']);
            $email= mysqli_real_escape_string($connection,$_POST['email']);
            $tele_no= mysqli_real_escape_string($connection,$_POST['tele_no']);
            $password = mysqli_real_escape_string($connection,$_POST['repeat_password']);
            $hashed_password = sha1($password);

            //query to check already registered users
            $query1 = "SELECT * FROM customer WHERE email = '{$email}'";
            $result_set1 = mysqli_query($connection,$query1);

            if($result_set1){

                if(mysqli_num_rows($result_set1)>=1){
                    $errors[] = "The user is already registered";
                    header('Location: ../view/cust_reg.php?errors='.urlencode(serialize($errors)));
                }
                else{
                    //store form data in the database (scustomer table)
                    $query2 = "INSERT INTO customer (first_name,last_name,email,tele_no,password) VALUES ('{$first_name}','{$last_name}','{$email}','{$tele_no}','{$hashed_password}')";
                    $result_set2 = mysqli_query($connection,$query2);
                    if($result_set2){
                        //query to take data to make session
                        $query3 = "SELECT c_id,first_name FROM customer WHERE email ='{$email}' AND password ='{$hashed_password}'";
                        $result_set3 = mysqli_query($connection,$query3);
                         if($result_set3){
                                $record =mysqli_fetch_assoc($result_set3);
                                //make session
                                $_SESSION['user_id']= $record['c_id'];
                                $_SESSION['username']=$record['first_name'];

                                //go to next form page
                                header('Location: ../view/customernext.php');
                          }
                         else{
                            //$errors[]="invalid username/password";
                          }
                    }
                }
            }
            else{

                $errors[] ='query error';
            }
        }
        else{
            header('Location: ../view/cust_reg.php?errors='.urlencode(serialize($errors)));
        }
    }
    else{

    }
?>

<?php
     require_once('../inc/connection_close.php');
?>
