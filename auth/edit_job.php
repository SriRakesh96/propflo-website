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
                                <h4 class="card-title">Edit Jobs</h4>
                            </div>
                            
                            
                            
                            <?php
                            
                            $job_id=base64_decode($_GET['job_id']);
                            
                            $jquery ="SELECT * FROM propflo_jobs WHERE job_id='$job_id'";  
                                 $jresult = mysqli_query($conn, $jquery);  
                                 $row1= 0;
                                 $sno = $row1 + 1;
                                while($row4 = mysqli_fetch_array($jresult))  
                                 {  
                                    
                                     $job_role=$row4['job_role'];
                                    
                                     $job_req=$row4['job_req'];

                                     $job_abt=$row4['job_about'];

                                     $job_dec=$row4['job_description'];

                                     $job_exp=$row4['job_experience'];
                                     
                                     $job_added=$row4['job_added_on'];

                                     $skills=$row4['skills'];
                                   
                                     $act=$row4['act'];
                                   
                               
                                 }
                            ?>
                            
                            
                            
                            <div class="card-body">
                                <div class="basic-form">
                                    <form action="edit_job_pro" method="POST">
                                    
                                    
                                    <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">
                                         <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label>Job Role</label>
                                                <input type="text" class="form-control" id="job_name" name="job_name" placeholder="Enter Job Name" value="<?php echo $job_role; ?>">
                                            </div>
                                         

                                            <div class="form-group col-md-12"> 
                                                <label>About Company</label>
                                                <textarea class="form-control" name="job_abt" id="job_abt" required placeholder="Enter About Company" rows="4" required><?php echo $job_abt; ?></textarea>
                                            </div>
                                            

                                            <div class="form-group col-md-12">
                                                <label>Job Description</label>
                                               <textarea class="form-control" name="job_desc" id="job_desc" required placeholder="Enter Job Description" rows="4"><?php echo $job_dec; ?></textarea>
                                            </div>
                                            
                                            <div class="form-group col-md-6">
                                                <label>Job Experience</label>
                                                <input type="text" class="form-control" id="job_exp" name="job_exp" placeholder="Enter Job Experience in years" value="<?php echo $job_exp; ?>" required>
                                            </div>

                                            <div class="form-group col-md-12">
                                                <label>Skills</label>
                                               <textarea class="form-control" name="skills" id="skills" required placeholder="Enter Job Skills" rows="10"><?php echo $skills; ?></textarea>
                                            </div>
                                            
                                             <div class="form-group col-md-12">
                                                <label>Job Requirements</label>
                                               <textarea class="form-control" name="job_req" id="job_req" required placeholder="Enter Job Requirements" rows="10"><?php echo $job_req; ?></textarea>
                                            </div>
                                        </div>
                                        
                                      
                                        <input type="submit" class="btn btn-primary" id="submit" name="add_job" value="Save Job">
                                    </form>
                                </div>
                            </div>
                        </div>
                        
                         <script type="text/javascript">
        $(window).on('beforeunload', function () {
            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
        });
    </script>
    
    
  <script type="text/javascript">

						
var dname = new LiveValidation('job_name', { validMessage: 'validated', wait: 100});
    dname.add(Validate.Presence, {failureMessage: "Name can not be Blank!"});
    dname.add( Validate.Length, { minimum: 3 } );
    dname.add( Validate.Length, { maximum: 50} );


    
</script>
            
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
