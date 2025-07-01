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
      
   if($type == "SUPER-ADMIN") {


   
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
      $sql = "SELECT COUNT(*) AS cntrows FROM propflo_contact";
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
                        <h4 class="card-title">Manage Demo Form Messages</h4>
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


<td  bgcolor="#FFFFFF"><strong>Source</strong></td>

<td  bgcolor="#FFFFFF"><strong>Date</strong></td>


</tr>

 <?php  
                                 $query ="SELECT * FROM propflo_contact WHERE  form='Demo_Form' AND act='1' ORDER BY id DESC limit $row,".$rowperpage;
                                 $result = mysqli_query($conn, $query);  
                            
                                                  $sno = $row  + 1;
                                                  while($row2 = mysqli_fetch_array($result))  
                                 {  
                                    
                                                       $id=$row2['id'];
                                                       
                                                      $cust_name=$row2['name'];
                                                      
                                                        $msg=$row2['prop_message'];

                                                        $company=$row2['company'];
                                                        
                                                         $cust_msg=wordwrap($msg, 50, "\n", true);
                                 
                                                      $cust_email=$row2['email'];
                                 
                                                      $cust_phone=$row2['phone'];

                                                      $source=$row2['source'];

                                                      $dt=$row2['msg_on'];
                                                      
                                                    ?>  
                                                      
                                                      

<tr>
    <td bgcolor="#FFFFFF">
<input name="checkbox[]" type="checkbox" id="checkbox[]" value="<?php echo $id; ?>">
</td>
<td bgcolor="#FFFFFF"><?php echo $sno; ?></td>

<td bgcolor="#FFFFFF"><?php echo $cust_name; ?></td>
<td bgcolor="#FFFFFF"><?php echo $cust_email; ?></td>

<td bgcolor="#FFFFFF"><?php echo $cust_phone; ?></td>

    <td bgcolor="#FFFFFF"><?php echo $source; ?>
    </td>
<td bgcolor="#FFFFFF"><?php echo $dt; ?>
</td>

</td>
</tr>

<style>
.text-column {
    display: -webkit-box;
    -webkit-box-orient: vertical;
    -webkit-line-clamp: 4;
    overflow: hidden;
    text-overflow: ellipsis;
    line-height: 1.2em; /* Adjust line-height as needed */
    max-height: 4.8em; /* Should be line-height * number of lines */
    word-wrap: break-word; /* Allows word breaking for long words */
    position: relative;
}

.text-column:hover::after {
    content: attr(title);
    position: absolute;
    left: 0;
    top: 100%;
    background: #fff;
    border: 1px solid #ccc;
    padding: 10px;
    box-shadow: 0 2px 10px rgba(0,0,0,0.1);
    white-space: pre-wrap;
    z-index: 1000;
    max-width: 300px; /* Adjust max-width as needed */
}
</style>

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
$sql = "DELETE FROM propflo_contact WHERE id='$del_id'";
print $sql;
$result = mysqli_query($conn, $sql);}

if($result){echo "<meta http-equiv=\"refresh\" content=\"0;URL=demo-form\">";}}
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
else{

    echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=DfrrtY\" />"; 

}


  
   }
      
      else
   {
       echo "<meta http-equiv=\"refresh\" content=\"0;url=invalid?ms_id=jn63eJ\"/>";
   }
      
   ?>