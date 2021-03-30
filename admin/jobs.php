<?php
  require_once('../inc/connection.php');
  if(!isset($_GET['errors'])){
    
    $query = "SELECT * FROM reserved_job";
    $result_set = mysqli_query($connection, $query);

    if($result_set){
      if(mysqli_num_rows($result_set)==0){
        header('Location: customers.php?error=There are no verified customers.');    
      }
      else{
        $table = "<table style='max-width:60%;' id='jobs'>";
        $table .= "<tr><th>Booking ID</th><th>Customer ID</th><th>Studio ID</th><th>Booking Date</th><th>Placed Date</th><th>Is Completed</th></tr>";
        while($record =mysqli_fetch_assoc($result_set)){
          $table .= "<tr>";
          $table .= "<td style='max-width:100px;'>".$record['job_id']."</td>";
          $table .= "<td>".$record['c_id']."</td>";
          $table .= "<td>".$record['studio_id']."</td>";
          $table .= "<td>".$record['date']."</td>";
          $table .= "<td>".$record['choose_time']."</td>";
          if($record['isplaced']==1){
            $table .= "<td>Yes</td>";  
          }
          else{
            $table .= "<td>No</td>";  
          }
          $table .= "<tr>";    
        }
      }    
    }
  }

?>

<script>
  function removeme(remid){
    if(confirm('Are You Sure You Want to Remove this Account?')){
      window.location.href='customers.php?cust_remove=' +remid+'';
      return true;  
    }
  }

  function myFunction() {
    var input, filter, table, tr, td, i, txtValue;
    input = document.getElementById("myInput");
    filter = input.value.toUpperCase();
    table = document.getElementById("jobs");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
      if (td) {
        txtValue = td.textContent || td.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
          tr[i].style.display = "";
        }
        else {
          tr[i].style.display = "none";
        }
      }       
    }
  }  
</script>

<!DOCTYPE html>
<html>
<title>verified studios</title>
<head>
   <link rel="stylesheet" type="text/css" href="css/admin.css">  
   <?php require_once('inc/navbar.php'); ?>
   
</head>
<body>
<div class="row"> 
<input type="text" id="myInput" onkeyup="myFunction()" placeholder="Search for Studio Name.." title="Type in a Name">   
    <?php 
         if(isset($_GET['error'])){
            echo '<div class="error">';
               echo $_GET['error'];
            echo '</div>';
           }
           else{
            echo $table;
           }
    ?>
</div>
</body>
</html>

<?php require_once('../inc/connection_close.php'); ?>