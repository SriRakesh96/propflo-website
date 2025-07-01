<?php
session_start();
   
include ('offline.php');

if (!empty($_SESSION['sess_sadm_email']) && !empty($_SESSION['sess_sadm_password'])) {
    $sess_email = $_SESSION['sess_sadm_email'];

    $user_data = "SELECT * FROM propflo_admin WHERE adm_email='$sess_email'";

    $user_conn = mysqli_query($conn, $user_data);

    while ($row6 = mysqli_fetch_assoc($user_conn)) {
        $type = $row6['adm_type'];
        $adm_id = $row6['adm_id'];
        $name = $row6['adm_name'];
    }

    if($type == "SUPER-ADMIN") {
        $from=$_POST['from_date'];
        $to=$_POST['to_date'];
        $filename = "$from-$to-DEMO-FORM-LEADS"; // File Name
     

// Download file
header("Content-Type: text/csv");
header("Content-Disposition: attachment; filename=$filename.csv");

// Open a PHP output stream and use it to create a CSV file
$output = fopen("php://output", "w");

// Write headers to the CSV file
fputcsv($output, array('FORM', 'Name', 'Email', 'Phone', 'Message', 'Msg On'));


// Fetch data from the database
$user_query = mysqli_query($conn, "SELECT form, name, email, phone, prop_message, msg_on FROM propflo_contact WHERE  form='Demo_Form' AND msg_on BETWEEN '$from' AND '$to' AND act='1'");

// Write data rows to the CSV file
while ($row = mysqli_fetch_assoc($user_query)) {
    fputcsv($output, $row);
}

fclose($output);
exit;

    } else {
        echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=DfrrtY\" />"; 
    }
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\"/>";
}
?>



