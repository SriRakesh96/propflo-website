<?php

include('offline.php');


$adm_email = $_GET['remail'];

$adm_upd_code = $_GET['code'];

$sel_code = "SELECT update_code FROM propflo_admin WHERE adm_email='$adm_email'";

$sel_cquery = mysqli_query($conn, $sel_code);

while ($row = mysqli_fetch_array($sel_cquery))
{

    $scode = $row['update_code'];
}
if (strcmp($adm_upd_code, $scode) == 0)
{

?>
<?php

include('doctype.php');


?>

<head>


 <title>Administrator</title>


<?php

include('head.php');


?>


</head>


<body class="vh-100">
    <div class="authincation h-100">
        <div class="container h-100">
            <div class="row justify-content-center h-100 align-items-center">
                <div class="col-md-6">
                    <div class="authincation-content">
                        <div class="row no-gutters">
                            <div class="col-xl-12">
                                <div class="auth-form">
									<div class="text-center mb-3">
										<img src="../assets/images/logo.png" alt="">
									</div>
                                    <h4 class="text-center mb-4">Forgot Password</h4>
                                     <form action="pass_validateprocess.php" method="POST"> 
                                 
                                 <input class="form-control" type="hidden" name="ccemail" value="<?php echo $adm_email; ?>">
                                 <input class="form-control" type="hidden" name="cccode" value="<?php echo $adm_upd_code; ?>">
                                        <div class="form-group">
                                            <label class="mb-1"><strong>Password</strong></label>
                                            <input type="password" class="form-control" name="password" id="password" placeholder="Enter Password">
                                        </div>
                                        
                                         <div class="form-group">
                                            <label class="mb-1"><strong>Confirm Password</strong></label>
                                            <input type="password" class="form-control" name="conf_password" id="cnf_password" placeholder="Enter Confirm Password">
                                        </div>
                                     
                                        <div class="text-center">
                                            <input type="submit" value="Change Password" id="submit" class="btn btn-primary btn-block">
                                        </div>
                                        
                                    </form>
                                  
                                  
                                  
 <script type="text/javascript">
        $(window).on('beforeunload', function () {
            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
        });
    </script>

            
            
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script type="text/javascript">


					var password = new LiveValidation('password', { validMessage: 'validated', wait: 100});
		            	password.add(Validate.Presence, {failureMessage: "Password  can not be Blank!"});
		            	password.add( Validate.Length, { minimum: 6 } );
		            	password.add( Validate.Length, { maximum: 20} );
					//	password.add(Validate.Format, {pattern: /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/});
					    password.add(Validate.Format, {pattern: /^(?=.*\d).{6,20}$/});
					
			
					var cnf_password = new LiveValidation('cnf_password', { validMessage: 'validated', wait: 100});
		            	cnf_password.add(Validate.Presence, {failureMessage: "Confirm Password  can not be Blank!"});
		                cnf_password.add( Validate.Length, { minimum: 6 } );
		            	cnf_password.add( Validate.Length, { maximum: 20} );
					//	cnf_password.add(Validate.Format, {pattern: /(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/});
					    cnf_password.add(Validate.Format, {pattern: /^(?=.*\d).{6,20}$/});
						cnf_password.add( Validate.Confirmation, { match: 'password' } );
	
            </script>




<?php

include("footerjs.php")

?>



</body>


	</div>
 
 


</html>

<?php
}
else
{

    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=HPbg6\" />";
}

?>
