<?php

include ('offline.php');


if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method

$adm_email = check_input($_POST['ccemail']);

$code = check_input($_POST['cccode']);

$pwd = check_input($_POST['password']);

$c_pwd = check_input($_POST['conf_password']);

$sel_adm = "SELECT * FROM propflo_admin WHERE adm_email ='$adm_email'";

$sel_adm_query = mysqli_query($conn, $sel_adm);

while ($row = mysqli_fetch_array($sel_adm_query))
{

    $scode = $row['update_code'];
}

if (strcmp($pwd, $c_pwd) != 0 or strcmp($code, $scode) != 0)
{
      echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=HPbg6\" />";
}

if (strcmp($pwd, $c_pwd) == 0 and strcmp($code, $scode) == 0)
{
    
    $encrypt_password = $pwd;

 
  // The hash of the password that
  // can be stored in the database
  $en_psw = password_hash($encrypt_password, 
          PASSWORD_DEFAULT);
   
    
    $up_ps = "UPDATE propflo_admin SET adm_password='$en_psw' WHERE adm_email='$adm_email'";

    mysqli_query($conn, $up_ps);

    $bcd = uniqid();

    $up_pd = "UPDATE propflo_admin SET update_code='$bcd' WHERE adm_email='$adm_email'";

    mysqli_query($conn, $up_pd);

    echo "<meta http-equiv=\"refresh\" content=\"0;url=mess.php?ms_id=juiDMK\" />";

}

}

else{
    
   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=bWr725\" />";
    
}

mysqli_close($conn);

?>
