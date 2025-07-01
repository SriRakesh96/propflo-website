<?php
session_start();
   
include ('offline.php');

if (!empty($_SESSION['sess_sadm_email']) && !empty($_SESSION['sess_sadm_password']))
{
	$sess_email = $_SESSION['sess_sadm_email'];

	$user_data = "SELECT * FROM bento_admin WHERE adm_email='$sess_email'";

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
   
   
      <style>
      #div_pagination{
      width:100%;
      margin-top:5px;
      margin-bottom:20px;
      text-align:center;
      }
      .button{
      border-radius:3px;
      border:0px;
      background-color:#1d293e;
      color:white;
      padding:10px 20px;
      letter-spacing: 1px;
      }
      .btn-primary2{
      color: #fff;
      background-color: #ef5e24;
      border-color: #ef5e24;
      }
   </style>
   <?php
      $rowperpage = 30;
      $row = 0;
      
      // Previous Button
      if(isset($_POST['but_prev'])){
          $row = $_POST['row'];
          $row -= $rowperpage;
          if( $row < 0 ){
              $row = 0;
          }
      }
      
      // Next Button
      if(isset($_POST['but_next'])){
          $row = $_POST['row'];
          $allcount = $_POST['allcount'];
      
          $val = $row + $rowperpage;
          if( $val < $allcount ){
              $row = $val;
          }
      }
      
      
      // count total number of rows
      $sql = "SELECT COUNT(*) AS cntrows FROM bento_web";
      $result = mysqli_query($conn,$sql);
      $fetchresult = mysqli_fetch_array($result);
      $allcount = $fetchresult['cntrows'];
      ?>
      
      
      
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
                        <h4 class="card-title">Manage Messages</h4>
                     </div>
                     <div class="card-body">
                        <div class="table-responsive">
                            
                            <table class="table table-responsive-md" border="0" cellspacing="1" cellpadding="0">
<tr>
   <form name="form1" method="post" action="">
<table border="0" cellpadding="3" cellspacing="1" class="table table-responsive-md">
    
<tr>
    
<td  bgcolor="#FFFFFF">#</td>

<td  bgcolor="#FFFFFF"><strong>S.No</strong></td>

<td  bgcolor="#FFFFFF"><strong>Name</strong></td>

<td  bgcolor="#FFFFFF"><strong>Email</strong></td>

<td  bgcolor="#FFFFFF"><strong>Phone</strong></td>

<td bgcolor="#FFFFFF" style="width: 40%;"><strong>Message</strong></td>



</tr>

 <?php  
                                 $query ="SELECT * FROM bento_web WHERE act='1' ORDER BY id DESC limit $row,".$rowperpage;
                                 $result = mysqli_query($conn, $query);  
                            
                                                  $sno = $row  + 1;
                                                  while($row2 = mysqli_fetch_array($result))  
                                 {  
                                    
                                                       $id=$row2['id'];
                                                       
                                                      $cust_name=$row2['cust_name'];
                                                      
                                                        $msg=$row2['cust_message'];
                                                        
                                                         $cust_msg=wordwrap($msg, 50, "\n", true);
                                 
                                                      $cust_email=$row2['cust_email'];
                                 
                                                      $cust_phone=$row2['cust_phone'];
                                                      
                                                    ?>  
                                                      
                                                      

<tr>
    <td bgcolor="#FFFFFF">
<input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $id; ?>">
</td>
<td bgcolor="#FFFFFF"><?php echo $sno; ?></td>

<td bgcolor="#FFFFFF"><?php echo $cust_name; ?></td>
<td bgcolor="#FFFFFF"><?php echo $cust_email; ?>

<td bgcolor="#FFFFFF"><?php echo $cust_phone; ?>

<td bgcolor="#FFFFFF" style="width: 40%;"><?php echo $cust_msg; ?></td>



</td>
</tr>


<?php
                $sno++;
                                     
                                     
                                 } 

?>
<tr><td colspan="10" bgcolor="#FFFFFF">
<input name="delete" type="submit" id="delete"  class="btn btn-primary"  value="Delete Messages"></td></tr>
<?php

if(isset($_POST['delete'])){
$checkbox = $_POST['checkbox'];
for($i=0;$i<count($_POST['checkbox']);$i++){
$del_id = $checkbox[$i];
$sql = "DELETE FROM bento_web WHERE id='$del_id'";
print $sql;
$result = mysqli_query($conn, $sql);}

if($result){echo "<meta http-equiv=\"refresh\" content=\"0;URL=web_messages\">";}}
mysqli_close($conn);
?>
</table></form></td></tr></table>


                           <form method="post" action="">
                              <div id="div_pagination">
                                 <input type="hidden" name="row" value="<?php echo $row; ?>">
                                 <input type="hidden" name="allcount" value="<?php echo $allcount; ?>">
                                 <input type="submit" class="btn btn-primary" name="but_prev" value="Previous">
                                 <input type="submit" class="btn btn-primary" name="but_next" value="Next">
                              </div>
                           </form>
                        
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
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\"/>";
   }
      
   ?>