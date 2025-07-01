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
$prefix = "PROPFLO_CAT";

$cat_id = $prefix . $numbers;


$cat_name=check_input($_POST['cname']);



$cat_ins="INSERT INTO `propflo_category` (`id`, `cat_id`, `cat_name`, `added_on`, `act`) 

VALUES (NULL, '$cat_id', '$cat_name', '$ltz', '1')";


if(mysqli_query($conn,$cat_ins)){

   echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_cat\" />";

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
