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
$job_id=$_POST['job_id'];

$from=$_POST['from_date'];

$to=$_POST['to_date'];

$dom=$_SERVER['SERVER_NAME'];


$filename = "$job_id"; // File Name
// Download file
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  
$user_query = mysqli_query($conn,"select job_name,first_name,last_name,email,phone,resume,applied_date from bento_applicants WHERE job_id='$job_id' AND applied_date BETWEEN '$from' AND '$to' AND act='1'");
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
   // Modify the resume field value to include the full URL with path
   $row['resume'] = "$dom/" . $row['resume'];

   echo implode("\t", array_values($row)) . "\r\n";

}

exit;


}
   
else
{
    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=jn63eJ\" />";
}
   
?>


