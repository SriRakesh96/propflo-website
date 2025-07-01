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


$numbers = time();
$prefix = "BN_JOB_";

$job_id = $prefix . $numbers;


$job_name=check_input($_POST['job_name']);

$job_type=$_POST['job_type'];

$job_req=nl2br($_POST['job_req']);

$job_abt=nl2br($_POST['job_abt']);

$job_desc=nl2br($_POST['job_desc']);

$job_exp=nl2br($_POST['job_exp']);

$skills=nl2br($_POST['skills']);


$job_ins="INSERT INTO `propflo_jobs` (`job_id`, `job_role`, `job_type`, `job_about`, `job_description`, `job_experience`, `skills`, `job_req`, `job_added_on`, `act`)

 VALUES ('$job_id', '$job_name', '$job_type', '$job_abt', '$job_desc', '$job_exp', '$skills', '$job_req', '$ltz', '1')";


if(mysqli_query($conn,$job_ins)){

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
