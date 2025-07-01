<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>
<title>Propflo Testimonials - Trusted Real Estate CRM Reviews 2024</title>  
<meta content="Hear from satisfied Propflo users! Explore testimonials and success stories from real estate professionals who transformed their business with our AI-powered CRM solutions." name="description" />

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
.start-now-area {
      position: relative;
      z-index: 1;
      background: linear-gradient(to bottom, #EBF2F5, #ffffff) !important;
         margin-top: 0px;
      }
</style>

</head>
<body>
 

    <?php
      
      include('header.php');
      
      ?>

    <div class="ScrollSmoother-content">
    
   

        <main>
      
<div class="mt-110"></div>
         <?php
           
        include('home-testimonals.php');
            
            ?>
<section class="start-now-area bg-image pb-50" style="margin-top:-80px">
   <div class="container">
   <div class="section-header" id="cta" style="text-align:center">
  <img src="assets/img/medal.svg" alt="" width="150px">
  <h2 class="fw-600 wow splt-txt words chars splitting animated" >Our users have ranked us a High Performer on G2</h2>   

  <a href="demo" class="btn-propflo mt-20">Get Started</a>
</div>
   </div>
   </section>


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