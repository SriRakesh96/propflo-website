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
if ($_SERVER["REQUEST_METHOD"] == "POST") {

$job_id=check_input($_POST['job_id']);

$job_name=check_input($_POST['job_name']);

$job_req=nl2br($_POST['job_req']);

$job_abt=$_POST['job_abt'];

$job_desc=$_POST['job_desc'];

$job_exp=$_POST['job_exp'];

$skills=nl2br($_POST['skills']);


$upd_job="UPDATE propflo_jobs SET job_role='$job_name', job_about='$job_abt', job_description='$job_desc', job_experience='$job_exp', skills='$skills', job_req='$job_req' WHERE job_id='$job_id'";

if (mysqli_query($conn, $upd_job))
{

   
    echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_jobs\" />";


}

else{

   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=daeU25\" />";

}

}


else{
    
   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=bWr725\" />";
    
}


}
   
   else
{
       echo "<meta http-equiv=\"refresh\" content=\"1;url=invalid?ms_id=jn63eJ\"/>";
}
 
 mysqli_close($conn);
 
?>
