<?php
session_start();

include('offline.php');


if ($_SERVER["REQUEST_METHOD"] == "POST") {


$email=check_input($_POST['email']);

$password=check_input($_POST['password']);

$ip=$_SERVER['REMOTE_ADDR'];


/* Pass Hash */ 
 
$psw_act = "SELECT * FROM propflo_admin WHERE adm_email='$email' AND act='1'";

$psw_act_conn = mysqli_query($conn, $psw_act);

 while ($row = mysqli_fetch_array($psw_act_conn))
    {  
			
        $fetch_pass=$row['adm_password'];											

    }
 
  
  // Verify the hash against the password entered
  $verify = password_verify($password, $fetch_pass);
  
  /* Pass Hash */ 
  
   
if ($verify) {
     
     
$login_pro = "SELECT * FROM propflo_admin WHERE adm_email='$email' AND act='1'";

$login_conn = mysqli_query($conn, $login_pro);


                if (mysqli_num_rows($login_conn) > 0) {
         
    
                        $_SESSION['sess_sadm_email']=$email;

                        $_SESSION['sess_sadm_password']=$password;

 
	       
	   echo "<meta http-equiv=\"refresh\" content=\"0;url=dashboard\"/>"; 
        
    
    
}

}

  else {
      
 echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=xF5hCV\" />";

  }
}

else{
    
   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=bWr725\" />";
    
}

mysqli_close($conn);
?>