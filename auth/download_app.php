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
                 
              
                            <div class="card-header">
                                <h4 class="card-title">Download Applicants</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   
                                   
                                   
                                    <form action="down_jobapp.php" method="POST" enctype='multipart/form-data'>
    
                                        <div class="form-row">
                                <?php
                                 
                                 $job_id=base64_decode($_GET['job_id']);
                        
                                  ?>
                                           <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                                            
                                       
                                                  <div class="form-group col-md-6">
                                                <label>From Date</label>
                                                <input type="date" class="form-control" id="job_title" name="from_date">
                                            </div>
                                            
                                            
                                                  <div class="form-group col-md-6">
                                                <label>To Date</label>
                                                <input type="date" class="form-control" id="job_title" name="to_date">
                                            </div>

                                    
                                            <input type="submit" class="btn btn-primary" id="submit" name="add_employee" value="Download Data">
                                    </form>
                                    
                 
                     
                     <script>  
              
                           
                           $('#sel_stat').on('change', function() {
                          if (this.value == "EXP" ) {
                             $("#date1").show();
                           } else {
                             $("#date1").hide();
                           }
                           });
                           
                            
                           
                               $('#stat').on('change', function() {
                           if ($(this).val() === "2") {
                             $("#stat").show();
                             
                              
                           } else {
                          
                              $("#stat").hide();
                           }
                           });
                           

</script>


               
      <script type="text/javascript">

					var emp_type = new LiveValidation('user_type', { validMessage: 'validated', wait: 100});
		                emp_type.add(Validate.Presence, {failureMessage: "Enter User Type!"});
		            
		          
		            	
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
						
			
						
					var dname = new LiveValidation('name', { validMessage: 'validated', wait: 100});
		            	dname.add(Validate.Presence, {failureMessage: "Name can not be Blank!"});
		            	dname.add( Validate.Length, { minimum: 3 } );
		            	dname.add( Validate.Length, { maximum: 20} );
						dname.add(Validate.Format, {pattern: /^[a-z ,.'-]+$/i});
						
					var phone = new LiveValidation('phone', { validMessage: 'validated', wait: 100});
		            	phone.add(Validate.Presence, {failureMessage: "Phone Number can not be Blank!"});
		            	phone.add( Validate.Length, { minimum: 10 } );
		            	phone.add( Validate.Length, { maximum: 10} );
						phone.add(Validate.Format, {pattern: /^[0-9]{6,16}$/i});
						
				
		            var email = new LiveValidation('email', { validMessage: 'validated', wait: 100});
		            	email.add(Validate.Presence, {failureMessage: "Email can not be Blank!"});
		            	email.add( Validate.Length, { minimum: 6 } );
		            	email.add( Validate.Length, { maximum: 50} );
						email.add(Validate.Format, {pattern: /^(([-\w\d]+)(\.[-\w\d]+)*@([-\w\d]+)(\.[-\w\d]+)*(\.([a-zA-Z]{2,5}|[\d]{1,3})){1,2})$/});
				
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
