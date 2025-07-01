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
            <div class="row">
               <div class="col-lg-12">
                  <div class="card">
                     <div class="card-header">
                        <h4 class="card-title">Manage Jobs</h4>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                           <table id="student_data" class="table table-striped table-bordered">
                              <thead>
                                 <tr>
                                    <th style="width:80px;"><strong>S.No</strong></th>
                                    <th><strong>Job Name</strong></th>
                                   
                                    <th><strong>Job Added On</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Action</strong></th>
                                   
                                 </tr>
                              </thead>
                              <?php  
                                 $jquery ="SELECT * FROM propflo_jobs ORDER BY id DESC";  
                                 $jresult = mysqli_query($conn, $jquery);  
                                 $row1= 0;
                                 
                                                  $sno = $row1 + 1;
                                                  while($row4 = mysqli_fetch_array($jresult))  
                                 {  
                                    
                                
                                    $job_id=$row4['job_id'];
                                    
                                    $job_role=$row4['job_role'];
                                    
                                     $job_req=$row4['job_req'];
                                     
                                       $job_added=$row4['job_added_on'];
                                   $act=$row4['act'];
                                   
                                   if($act==0){
                                       
                                       $status="CLOSED";
                                       
                                   }
                                     
                                   if($act==1){
                                       
                                       $status="OPEN";
                                       
                                   }
                               
                                   $jb=base64_encode($job_id);
                                                      
                                       echo  "<tr>
                                                     
                                                    <td><strong>$sno</strong></td>
                                                      <td>$job_role</td>
                                                      
                                                        <td>$job_added</td>
                                                     <td>$status</td>
                         
                                                      <td>
                                                      <div class=\"dropdown\">
                                                          <button type=\"button\" class=\"btn btn-success light sharp\" data-toggle=\"dropdown\">
                                                              <svg width=\"20px\" height=\"20px\" viewBox=\"0 0 24 24\" version=\"1.1\"><g stroke=\"none\" stroke-width=\"1\" fill=\"none\" fill-rule=\"evenodd\"><rect x=\"0\" y=\"0\" width=\"24\" height=\"24\"></rect><circle fill=\"#000000\" cx=\"5\" cy=\"12\" r=\"2\"></circle><circle fill=\"#000000\" cx=\"12\" cy=\"12\" r=\"2\"></circle><circle fill=\"#000000\" cx=\"19\" cy=\"12\" r=\"2\"></circle></g></svg>
                                                          </button>
                                                          <div class=\"dropdown-menu\">
                                                          
                                                                    <a class=\"dropdown-item\" href=\"job_manage?job_id=$jb\">Open/Close Job</a>
                                                              
                                                              <a class=\"dropdown-item\" href=\"edit_job?job_id=$jb\">Edit Job</a>
                                                              
                                                              <a class=\"dropdown-item\" href=\"download_app?job_id=$jb\">Download Applicants</a>                                             
                                        
                                                              <a class=\"dropdown-item\" href=\"delete_job?job_id=$jb\" onclick=\"return confirm('Are you sure want to delete job?');\">Delete Job</a>
                                         </div>
                                                      </div>
                                                  </td>
                                                  
          
                                                 </td>
                                 
                                 
                                                    </tr>
                                            ";
                                 
                                           $sno++;  }  
                                 ?>  
                           </table>
                           <script>  
                              $(document).ready(function(){  
                                   $('#student_data').DataTable();  
                              });  
                           </script> 
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
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
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid.php?ms_id=jn63eJ\"/>";
   }
      
   ?>