<?php

include ("offline.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
     // The request is using the POST method



$adm_email = check_input($_POST['email']);

$scode = uniqid();

$comp_email="tech@bentolabs.io";


$frgt_pass = "SELECT * FROM propflo_admin WHERE adm_email='$adm_email'";

$checks = mysqli_query($conn, $frgt_pass);

while ($row2 = mysqli_fetch_assoc($checks))
{

    $adm_name = $row2["adm_name"];


}

if (mysqli_num_rows($checks) == 0)
{

    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=fQ87Hy\" />";

}

else
{

    $updt_pass = "UPDATE propflo_admin SET update_code='$scode' WHERE adm_email='$adm_email'";
   
    mysqli_query($conn, $updt_pass);

    $to = $adm_email;
    $subject = "Password Reset With Propflo";

    $message = "<img src=\"../assets/img/logo.svg\" alt=\"logo\" width=\"150px\"> 
<p>Hello $adm_name,</p>

<p>Your Registration Code is <b>$scode</b></p>
<h4 style=\"color:#1ed760\">No need to worry, you can reset your Propflo Admin password by clicking the link below</h4>

<p>Click here to <a href=\"https://propflo.ai/auth/pass_validatereset.php?code=$scode&remail=$adm_email\" style=\"color:#04929e\; \">RESET PASSWORD</a></p>
<p>Regards</p>
<h3 style=\"color:#04929e\">Propflo</h3>
";

        // More headers
        
        $headers  = "From: Propflo <mjweb@mjtechservice.com>\n";
        $headers .= "Reply-To: ".$comp_email."\r\n";
        $headers .= "Return-Path: ".$comp_email."\r\n";
        $headers .= "MIME-Version: 1.0\r\n";
        $headers .= "Content-type: text/html;charset=UTF-8 \r\n";
        $headers .= "X-Priority: 3\r\n";
        $headers .= "X-Mailer: PHP". phpversion() ."\r\n" ;
      
    mail($to, $subject, $message, $headers);

    echo "<meta http-equiv=\"refresh\" content=\"0;url=mess.php?ms_id=Fer3rS\" />";

}



}

else{
    
   echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=bWr725\" />";
    
}

mysqli_close($conn);

?>
