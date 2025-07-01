<?php
session_start();
   
include ('offline.php');

if (!empty($_SESSION['sess_sadm_email']) && !empty($_SESSION['sess_sadm_password']))
{
	$sess_email = $_SESSION['sess_sadm_email'];

	$user_data = "SELECT * FROM propflo_admin WHERE adm_email='$sess_email'";

	$user_conn = mysqli_query($conn, $user_data);

	
	
if ($_SERVER["REQUEST_METHOD"] == "POST") {



$adms_id=check_input($_POST['adms_id']);

$psw=$_POST['password'];
 

// The hash of the password that
  // can be stored in the database
  $password = password_hash($psw, PASSWORD_DEFAULT);


$ip=$_SERVER['REMOTE_ADDR'];

$upd_spadm_pass="UPDATE propflo_admin SET adm_password='$password' WHERE adm_id='$adms_id'";


if(mysqli_query($conn,$upd_spadm_pass)){

   echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_login\" />";

}

else{

   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=daeU25\" />";

}


}
else{
    
   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=bWr725\" />";
    
}


}
   
   else
{
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=jn63eJ\"/>";
}
mysqli_close($conn);
   
?>
