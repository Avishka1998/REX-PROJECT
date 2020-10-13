
<?php
require_once('../../inc/connection.php');
session_start();

        if(isset($_POST['submit-search']) ){
            search();
        }
        function search(){
            if(!strlen(trim($_POST['search']))>0){
                header('Location: ../../view/customer/cust_search_results.php?error=Please enter the studio name'); 
            }
            else{
                $search =mysqli_real_escape_string($GLOBALS['connection'],$_POST['search']);
                $query="SELECT studio_id FROM studio WHERE studio_name LIKE '%$search%' ";
                $result_set=mysqli_query($GLOBALS['connection'] ,$query);
                if($result_set){
                    $no_results=mysqli_num_rows($result_set);
                    if($no_results>=1){
                        $i=0;
                        $record=array(); //set an integer array
                        while($i<$no_results){
                            array_push($record,mysqli_fetch_array($result_set)); //add studio_id(search results) to array 
                            $i++;
                        }
    
                        header('Location: ../../view/customer/cust_search_results.php?search_result='.urlencode(serialize($record))); //send the array with an url
                    }else{
                        //$error="not found";
                        header('Location: ../../view/customer/cust_search_results.php?error= sorry! studio not found');
                    }
    
                }


            }


        }



    
    

?>