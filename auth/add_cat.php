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
                                <h4 class="card-title">Add Category</h4>
                            </div>
                            <div class="card-body">
                                <div class="basic-form">
                                   
                                   
                                   
                                    <form action="add_cat_pro" method="POST">

                                      
                                        <div class="form-row">
                                      
                                        <div class="form-group col-md-6">
                                                <label>Category Name</label>
                                                <input type="text" class="form-control" id="cname" name="cname" placeholder="Enter Name">
                                            </div>
 
                                            </div>


                                        </div>
                                        
                                    
                                        <input type="submit" class="btn btn-primary" id="submit" name="add_student" value="Add Category">
                                    </form>
                                    
                                                            
                         <script type="text/javascript">
        $(window).on('beforeunload', function () {
            $("input[type=submit], input[type=button]").prop("disabled", "disabled");
        });
    </script>
      <script type="text/javascript">

						
					var dname = new LiveValidation('cname', { validMessage: 'validated', wait: 100});
		            	dname.add(Validate.Presence, {failureMessage: "Category Name can not be Blank!"});
		            	dname.add( Validate.Length, { minimum: 3 } );
		            	dname.add( Validate.Length, { maximum: 20} );
						dname.add(Validate.Format, {pattern: /^[a-z ,.'-]+$/i});
		
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
    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\" />";
}
     
?>
