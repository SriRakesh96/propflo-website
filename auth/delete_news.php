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
      
      $news_id=$_GET['news_id'];

	  $news_img=$_GET['im'];
      
      $del_news="DELETE FROM propflo_blogs WHERE news_id='$news_id'";
          
      if(mysqli_query($conn,$del_news)){
          

		unlink("../uploads/$news_img");
          
   echo "<meta http-equiv=\"refresh\" content=\"0;url=manage_news\" />";

    }

 else{

   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=daeU25\" />";

}

}
else
{
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\"/>";
}
  
mysqli_close($conn); 
?>
