<?php
$servername = "localhost";
$username = "MonkNewAdminPassword";
$password = "MonkNewAdminPassword";
$database = "propflo";

//Local Time Zone
date_default_timezone_set('Asia/Kolkata');
$ltz = date("Y-m-d H:i:s");



// Create connection
$conn = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}


/* Form POst Validation Function */

function check_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>