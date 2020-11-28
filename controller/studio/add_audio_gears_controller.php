<?php    
    require_once('../../inc/connection.php');
    session_start();
    if(isset($_GET['studio_id'])){ //check if the studio_id succesfully passed
        $studio_id=$_GET['studio_id']; //store the studio_id which passed from add_services.html file       
            if(isset($_POST['submit_add_audio_gear1'])){ //if the user pressed the save button 
                    $rows=$_GET['rows'];                                        
                    for ($i=4; $i<$rows+5; ++$i){
                        if(isset($_POST['check'.$i.'']) && isset($_POST['charge'.$i.''])){
                            $instrument_name=$_POST['check'.$i.'']; //store the audio_gear in instrument_name variable
                            $charge=$_POST['charge'.$i.''];//store the charge in charge variable   
                            $qty=$_POST['qty'.$i.''];  //store the number of audio gears               
                            $query ="INSERT INTO studio_audio_gear(studio_id,name,charge,qty) VALUES('{$studio_id}','{$instrument_name}','{$charge}','{$qty}')";
                            $result_set=mysqli_query($connection,$query); 
                                           
                        }
                        else{
                             header('Location: ../../view/studio/add_audio_gears.php?added=instrumet added');//for loop break
                        }
                    }
                            

            }
            else if(isset($_POST['submit_add_audio_gear2'])){// user has added service first time, now he could change service(delete or change the charge)
                    $rows=$_GET['rows'];   //store the number of results which take from the query 
                    for ($i=1; $i<$rows+1; ++$i){
                        if(isset($_POST['check'.$i.'']) && isset($_POST['charge'.$i.''])){                   
                            $instrument_name=$_POST['check'.$i.'']; //store the instrument in instrument_name variable
                            $charge=$_POST['charge'.$i.''];//store the charge in charge variable    
                            $qty=$_POST['qty'.$i.''];                       
                            $query ="UPDATE studio_audio_gear SET charge=$charge,qty=$qty WHERE studio_id=$studio_id AND name='$instrument_name' ";
                            $result_set=mysqli_query($connection,$query);
                            if($result_set){
                                $updated="Audio gear details updated";
                            }
                                            
                        }
                        else if(isset($_POST['uncheck'.$i.''])){//get unchecked services for delete
                            $unchecked_instrument_name=$_POST['uncheck'.$i.'']; //store the instrumet in instrumet_name variable
                            $query ="DELETE FROM studio_audio_gear WHERE studio_id=$studio_id AND name='$unchecked_instrument_name' ";
                            $result_set = mysqli_query($connection,$query);                            
                            if($result_set){
                                $deleted=$unchecked_instrument_name." deleted ";
                            }
                            
                        }                     

                    }
                    header('Location: ../../view/studio/add_audio_gears.php?deleted='.$deleted.'&updated='.$updated);
                
            }
            if(isset($_POST['submit_other_instrument'])){
                if(isset($_POST['instrument_name']) && isset($_POST['charge'])){
                    $instrument_name=$_POST['instrument_name'];
                    $charge=$_POST['charge']; 
                    $qty=$_POST['qty'];                        
                    $query ="INSERT INTO studio_audio_gear(studio_id,name,charge,qty) VALUES('{$studio_id}','{$instrument_name}','{$charge}','{$qty}')";
                    $result_set=mysqli_query($connection,$query);
                    if($result_set){
                        $new_instrument=' New audio gear added ';
                        header('Location: ../../view/studio/add_audio_gears.php?new_instrument='.$new_instrument); 
                    }
                    else{
                        $error='You already added this audio gear';
                        header('Location: ../../view/studio/add_audio_gears.php?error='.$error);
                    }

                    
                }      
               
            }
  

           
        
}


?>