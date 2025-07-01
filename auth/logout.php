<?php
session_start();

unset($_SESSION['sess_sadm_email']);

unset($_SESSION['sess_sadm_password']);

session_destroy();

	echo "<meta http-equiv=\"refresh\" content=\"0;url=mess.php?ms_id=Yre3rZ\" />";
?>
