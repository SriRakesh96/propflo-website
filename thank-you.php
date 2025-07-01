<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>

<!-- Best Intelligent Real Estate CRM Software India 2024 - PropFlo -->
<title>Thank You - PropFlo</title>



    <?php
     
     include('head.php');
      
      ?>
<!-- Event snippet for Submit Lead Form conversion page -->
<script>
  gtag('event', 'conversion', {'send_to': 'AW-16815291456/yauwCNPFvP4ZEMD4k9I-'});
</script>
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


.error-area {
    
    padding-top: 180px !important;

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
            

        <?php

        $id=$_GET['jb'];

        if($id == '32'){

          ?>

<section class="error-area">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-12">
                            <div class="error__content text-center">
                                <h2 style="font-weight:700;font-size:70px;line-height:80px;">Thank You</h2>
                               
                                <p  style="font-size:22px" class="mt-30">Your Application has been Submitted 
                                   </p>
                                <a class="btn-propflo mt-40" href="https://propflo.ai/">Go to Homepage</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>


            <?php


        }

        else{
?>


<section class="error-area">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-12">
                            <div class="error__content text-center">
                                <h2 style="font-weight:700;font-size:70px;line-height:80px;">Thank You</h2>
                               
                                <p  style="font-size:22px" class="mt-30">We will Get Back to you Shortly..  
                                   </p>
                                <a class="btn-propflo mt-40" href="https://propflo.ai/">Go to Homepage</a>
                            </div>
                        </div>
                        
                    </div>
                </div>
            </section>



            <?php
        }
        

?>

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