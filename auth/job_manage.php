<?php
session_start();
   
include ('offline.php');

if (!empty($_SESSION['sess_sadm_email']) && !empty($_SESSION['sess_sadm_password']))
{
	$sess_email = $_SESSION['sess_sadm_email'];

	$user_data = "SELECT * FROM propflo_admin WHERE adm_email='$sess_email'";

	$user_conn = mysqli_query($conn, $user_data);

	while ($row6 = mysqli_fetch_assoc($user_conn))
	{

		$type = $row6['adm_type'];
		
		$adm_id = $row6['adm_id'];
		
		$name = $row6['adm_name'];
		   
			 
	}

$job_id=base64_decode($_GET['job_id']);


   $jquery ="SELECT * FROM propflo_jobs WHERE job_id='$job_id'";  
                                 $jresult = mysqli_query($conn, $jquery);  
                                 $row1= 0;
                                 
                                                  $sno = $row1 + 1;
                                                  while($row4 = mysqli_fetch_array($jresult))  
                                 {  
                                    
                                   $act=$row4['act'];
                                   
                                 }
                                 
                                 
if($act==0){
    
    $upd_job="UPDATE propflo_jobs SET act='1' WHERE job_id='$job_id'";
    
    if(mysqli_query($conn,$upd_job)){
        
    echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_jobs\" />";
       
        
    }
    
    
}

elseif($act==1){
    
    $upd_job="UPDATE propflo_jobs SET act='0' WHERE job_id='$job_id'";
    
        if(mysqli_query($conn,$upd_job)){
            
    echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_jobs\" />";
           
        }
    
}



else{

   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=daeU25\" />";

}





}
   
   else
{
       echo "<meta http-equiv=\"refresh\" content=\"1;url=invalid?ms_id=jn63eJ\"/>";
}
mysqli_close($conn);
   
?>
