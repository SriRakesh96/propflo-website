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

      
   if($type == "SUPER-ADMIN") {


$from=$_POST['from_date'];

$to=$_POST['to_date'];

$filename = "$from-$to-CONTACT-FORM-LEADS"; // File Name
// Download file
header("Content-Type: application/xls");    
header("Content-Disposition: attachment; filename=$filename.xls");  

$user_query = mysqli_query($conn,"select form,name,email,phone,company,prop_message from propflo_contact WHERE form='Contact_Us' AND msg_on BETWEEN '$from' AND '$to'");
// Write data to file
$flag = false;
while ($row = mysqli_fetch_assoc($user_query)) {
    if (!$flag) {
        // display field/column names as first row
        echo implode("\t", array_keys($row)) . "\r\n";
        $flag = true;
    }
    echo implode("\t", array_values($row)) . "\r\n";
}

exit;





}
else{

    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=DfrrtY\" />"; 

}


  
   }
      
      else
   {
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\"/>";
   }
      
   ?>