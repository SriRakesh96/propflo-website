<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>


<head>

<!-- Best Intelligent Real Estate CRM Software India 2024 - PropFlo -->
<title>Best Intelligent Real Estate CRM Software India 2024 - PropFlo</title>

<meta name="description" content="PropFlo is the AI-powered, customer-centric CRM for real estate developers and brokers. Manage leads, sales, and post-sales with ease. Discover more now!">


    <?php
     
     include('head.php');
      
      ?>

<style>



#mob-fea{

  display:none;
}

@media only screen and (max-width: 600px) {
  #mob-fea{

display:block !important;
}

#offer-section{
  display:none !important;

}
.cont-ofer h2{

  font-size: 30px;
    font-weight: 700;
    line-height: 40px;
}

#choose{
  padding:5px !important;
}

}

#row-jb{
    width: 80%;
    display: block;
    margin: 0 auto;

}


.job-row {
        margin-bottom: 15px; /* Add space between rows */
        border-bottom: 10px solid #f8f9fa; /* Light gray border as spacing */
    }

    .table {
        border-spacing: 0; /* Ensure no default cell spacing */
    }


@media only screen and (max-width: 600px) {
    .btn-propflo {
        padding: 10px !important;
        font-size: 14px !important;
    }
    #row-jb{
    width: 100%;
   

}

h5 {
    font-size: 14px !important;

}
}

</style>

</head>
<body>
 
   <?php
     
     include('preloader.php');
      
      ?>
 
    <?php
      
      include('header.php');
      
      ?>

    <div class="ScrollSmoother-content">
    
   

        <main>


        <div class="container my-5 pt-120">

        <div class="container mb-30">
               <h2 class="section-title" style="text-align:center;margin-bottom:5px;">Explore Our Open Roles</h2>
               <p style="text-align:center;">Still finding a role that suits you? <br> Reach out to us!</p>
            </div>

    <div class="table-responsive mt-30" id="row-jb">
    <table class="table align-middle">
            <tbody>
                <?php
                $jquery = "SELECT * FROM propflo_jobs WHERE act='1' ORDER BY id DESC";
                $jresult = mysqli_query($conn, $jquery);

                // Check if there are any rows
                if (mysqli_num_rows($jresult) > 0) {
                    while ($row4 = mysqli_fetch_array($jresult)) {
                        $job_id = $row4['job_id'];
                        $job_role = $row4['job_role'];
                        $job_req = $row4['job_req'];
                        $job_added = $row4['job_added_on'];
                        $act = $row4['act'];

                        $status = $act == 1 ? "OPEN" : "CLOSED";
                        $jb = base64_encode($job_id);

                        $job_exp = $row4['job_experience'];
                        $job_type = $row4['job_type'];
                ?>
                <tr class="job-row">
                    <td>
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <h5 class="mb-1"><?php echo $job_role; ?></h5>
                                <small class="text-muted"><?php echo $job_type; ?> | <?php echo $job_exp; ?> Years</small>
                            </div>
                            <a href="job_description?jb_id=<?php echo $jb; ?>" class="btn-propflo">View Opportunity</a>
                        </div>
                    </td>
                </tr>
                <?php
                    }
                } else {
                    // If no jobs are available
                    echo "
                    <tr>
                        <td class='text-center'>
                            <p class='mt-4' style='font-size: 25px; font-weight:600'>No jobs available at the moment.</p>
                        </td>
                    </tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>




      </main>

      
      <?php
        
        include('footer.php');
         
         ?>
   
    </div>
   
    <!-- Back to top btn area start here -->
   <button id="back-top" class="btn-backToTop">
   <i class="fa-solid fa-chevron-up"></i>
   </button>
   <!-- Back to top btn area end here -->
  
     <?php
     
     include('footerjs.php');
      
      ?>