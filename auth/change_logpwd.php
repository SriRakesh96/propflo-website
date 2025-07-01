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

include('doctype.php');


?>

<head>


<title><?php echo $type; ?> </title>

<?php

include('head.php');


?>


</head>

<body>


   <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">
	
	

<?php

include('header.php');


?>
<?php

include('home_sidebar.php');


?>

<!--**********************************
            Content body start
        ***********************************-->
        <div class="content-body">
			<div class="container-fluid">
				
                <!-- row -->
                <div class="row">
                <div class="col-lg-12">
                <div class="card">
                 
                <div class="card">
                            <div class="card-header">
                                <h4 class="card-title">Change Your Password</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   
                                   
                                   
                                    <form action="chan_logpwd_pro.php" method="POST">
<?php

$usr_id=$_GET['log_id'];

$user_data1 = "SELECT * FROM propflo_admin WHERE adm_id='$usr_id'";

	$user_conn1 = mysqli_query($conn, $user_data1);

	while ($row7 = mysqli_fetch_assoc($user_conn1))
	{

		
		$usr_name= $row7['adm_name'];
		   
			 
	}

?>
  
                                        <input type="hidden" name="adms_id" value="<?php echo $usr_id; ?>">
                                        
                                        <div class="form-row">
                                      
                                        <div class="form-group col-md-6">
                                                <label>Name</label>
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Enter Name" value="<?php echo $usr_name; ?>" readonly>
                                            </div>

                                     
                                            <div class="form-group col-md-6">
                                                <label>Password</label>
                                                <input type="password" class="form-control" id="password" name="password" placeholder="Enter New Password">
                                            </div>


                                            <div class="form-group col-md-6">
                                                <label>Confirm Password</label>
                                                <input type="password" class="form-control" id="cnf_password" name="cnfpassword" placeholder="Confirm New Password">
                                            </div>


                                        </div>
                                        
                                    
                                        <input type="submit" class="btn btn-primary" id="submit" name="add_student" value="Save Your Password">
                                    </form>
                                    
                                                            
                         <script type="text/javascript">
        $(window).on('beforeunload', function () {
            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
        });
    </script>
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
                                    
                                </div>
                            </div>
                        </div>

            
                </div>
            </div>
        </div>
            </div>
        </div>
        <!--**********************************
            Content body end
        ***********************************-->




        <?php

include('footer.php');


?>


    </div>
    <!--**********************************
        Main wrapper end
    ******-->
	
<?php

include('footerjs.php');


?>

</body>

</html>
    
<?php
}
   
else
{
    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=jn63eJ\" />";
}
     
?>
