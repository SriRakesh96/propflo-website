<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<head>
   <title>Careers - Propflo</title>
   <meta content="careers at PropFlo" name="description" />
   <?php
      include('head.php');
       
       ?>
   <style>
      .badge{
      background:#08CF65  !important;
      color:#fff !important;
      border-radius:15px;
      padding:7px;
      }
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
      .banner-inner-area {
      padding-top: 130px;
      padding-bottom: 5px;
      }
      .about-head{
      font-size: 25px !important;
      line-height: 40px !important;
      margin-bottom: 10px;
      font-weight:700 !important;
      }
      .scroll-row {
      display: flex;
      align-items: center;
      }
      .card-titleh{
      font-size:16px !important;
      line-height: 25px;
      }
   </style>
</head>
<body>
  


   <?php
      include('header.php');
      
      ?>
   <div class="ScrollSmoother-content">
      <main>
         <!-- Banner area start here -->
         <section class="banner-inner-area">
            <div class="container">
               <h2 class="section-title" style="text-align:center;margin-bottom:5px;">Careers</h2>
              
            </div>
         </section>
         <!-- Banner area end here -->
       
         <!-- Fanfact area start here -->
         <section class="fanfact-area pt-20 pb-60" id="vision">
            <div class="container">
               <div class="row g-4 justify-content-between scroll-row">
                  <!-- Image Column -->
                  <!-- Content Column -->
                  <h2 class="section-title">Why Work With Us
                        </h2>
                        <p class="mb-20">With great power comes great responsibility and our skilled, and focused team genuinely believes in making a real-time difference to businesses that never imagine a world beyond. Joining us will empower you to own decisions, make intelligent choices, become better at intuition, and contribute to creating the next big things. 
                        </p>
               </div>
            </div>
         </section>


         
         <div class="container">
            
         <!-- Gallery -->
<div class="row">

<h2 class="section-title">Life at PropFlo

                        </h2>
                        <p class="mb-20">PropFlo is not only dedicated to work but also provide a healthy work-life balance which is evident through the various fun activities conducted by us. It helps our employees bond better, refreshes them & gives them the zeal to come back to work more enthusiastically. 
                        </p>
        


  <div class="col-lg-4 col-md-12 mb-4 mb-lg-0">
    <img
      src="assets/img/team/1.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />

    <img
      src="assets/img/team/3.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Wintry Mountain Landscape"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="assets/img/team/4.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Mountains in the Clouds"
    />

    <img
      src="assets/img/team/5.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Boat on Calm Water"
    />
  </div>

  <div class="col-lg-4 mb-4 mb-lg-0">
    <img
      src="assets/img/team/2.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Waves at Sea"
    />

    <img
      src="assets/img/team/6.png"
      class="w-100 shadow-1-strong rounded mb-4"
      alt="Yosemite National Park"
    />
  </div>
</div>
<!-- Gallery -->

   </div>

           <!-- Fanfact area start here -->
           <section class="fanfact-area pt-40 pb-30">
            <div class="container">
               <div class="row g-4 justify-content-between scroll-row">

                  <div class="col-lg-6">
                  <h2 class="section-title">We Seek Hungry People
                  </h2>
                     <div class="fanfact__item-left">
                        
                      <ul class="feature-list">
                        <li>Hungry for the adrenaline rush after solving challenges</li>

                        <li>Hungry for the pride of owning and executing a whacky idea</li>


                        <li>Hungry for the feeling of WOW after delivering value to customers</li>


                        <li>Hungry for the moments of pure chill after a productive hustle </li>
                     </div>
                  </div>
                  <div class="col-lg-6">
                     <img src="assets/img/careers.png" class="img-fluid">
                  </div>
               </div>
            </div>
         </section>

<div class="container mb-40">

<h4 style="text-align:center;font-size:22px;">
    We currently have no open positions, but we're always on the lookout for talented individuals. Please send your resume to hello@propflo.ai, and we'll be sure to contact you when opportunities arise. Thank you for your interest in joining our team!
    </h4> </div>
  
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