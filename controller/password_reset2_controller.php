<?php require_once('../inc/connection.php');
  session_start();
  $token=$_SESSION['token'];
  echo $token;
?>

<?php
  if(isset($_POST['reset'])){
    $errors[]=array();
    $done[]=array();
    if(!isset($_POST['password']) || strlen(trim($_POST['password']))<1 || !isset($_POST['password']) || strlen(trim($_POST['password']))<1){
      $errors[]='Some fields are missing or invalid!';
      echo "errors";
    }

    $password=mysqli_real_escape_string($connection,$_POST['password']);
    $re_password=mysqli_real_escape_string($connection,$_POST['re_password']);

    if($password==$re_password){
      $ret_query="SELECT email FROM tokens WHERE token='$token'";
      $ret_result=mysqli_query($connection,$ret_query);
      //echo $ret_result;

      if(mysqli_num_rows($ret_result)>0){
        $ret_array=mysqli_fetch_assoc($ret_result);
        $email=$ret_array['email'];
        $hash=sha1($password);
        $update_query1="UPDATE customer SET password='$hash' WHERE email='$email'";
        $update_result1=mysqli_query($connection,$update_query1);
        $update_query2="UPDATE studio SET password='$hash' WHERE s_email='$email'";
        $update_result2=mysqli_query($connection,$update_query2);
        echo mysqli_affected_rows($connection);
        if(mysqli_affected_rows($connection)>0){
          $delete_query="DELETE FROM tokens WHERE token='$token'";
          $delete_result=mysqli_query($connection,$delete_query);
          if ($delete_result){
            header('Location: ../view/customernext.php');
          }
          else{
            echo "faildelete";
          }
          
        }

        else{
          echo "      lkghlkj";
          $errors[]='Failed to Reset the Password. Please Try Again!';
        }
      }
      else{
        $errors[]='Access Denided! Link Already Used!';
      }
    }
    else{
      $errors[]='Passwords not matched!';
    }
  }
  else{
    echo "fail";
  }
 ?>
