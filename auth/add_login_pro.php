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




$type=check_input($_POST['type']);

$name=check_input($_POST['name']);

$email=check_input($_POST['email']);


$psw=$_POST['password'];
 

// The hash of the password that
  // can be stored in the database
  $password = password_hash($psw, PASSWORD_DEFAULT);


$ip=$_SERVER['REMOTE_ADDR'];


	$numbers = time();
$prefix = "PROP$type-";

$usrid = $prefix . $numbers;

	$user_ins="INSERT INTO `propflo_admin` (`id`, `adm_type`, `adm_id`, `adm_name`, `adm_email`, `adm_password`, `act`, `update_code`, `added_on`) 
	
	VALUES (NULL, '$type', '$usrid', '$name', '$email', '$password', '1', '', '$ltz');";

if(mysqli_query($conn,$user_ins)){

	echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_login.php\" />";
 
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
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\"/>";
}
mysqli_close($conn);
   
?>
