<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<head>
  
<!-- About PropFlo | Our Vision and Mission -->
<title>About PropFlo | Our Vision and Mission</title>
<meta name="title" content="About PropFlo | Our Vision and Mission">
<meta name="description" content="Discover how PropFlo’s AI-powered real estate CRM maximizes customer satisfaction and sales with intelligent lead and sales automation. Try it now!">

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

      .abt{

         background: #F1F4F8;
    border-radius: 40px;
    padding: 0px 40px;
      }


      @media only screen and (max-width: 768px) {
 .abt {
   background:#F1F4F8;
    border-radius: 40px;
    margin: 10px;
    padding: 20px;
  }
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
               <h2 class="section-title" style="text-align:center;margin-bottom:5px;">About Us</h2>
               <p style="text-align:center;">Best Intelligent Real Estate CRM Software India 2025</p>
            </div>
         </section>
         <!-- Banner area end here -->
         <!-- Fanfact area start here -->
         <section class="fanfact-area pt-40 pb-30">
            <div class="container">
               <div class="row g-4 justify-content-between scroll-row abt">
              
                  <div class="col-lg-8">
                  <h2 class="section-title">Building a smarter, more meaningful customer relationship platform. 
                  </h2>
                   <div class="fanfact__item-left">
                     
                        <p class="mb-20">We’re building PropFlo to solve real estate’s customer experience problems. Learn more about how our team aims to create a better product for developers and buyers.
                        </p>
                     </div>
                  </div>
                  <div class="col-lg-4">

                  <img src="assets/img/abt-crm.png" class="img-fluid">

</div>
               </div>
            </div>
         </section>
         <!-- Fanfact area start here -->
         <section class="fanfact-area pt-40 pb-60" id="vision">
            <div class="container">
               <div class="row g-4 justify-content-between scroll-row">
                  <!-- Image Column -->
                  <!-- Content Column -->
                  <h2 class="section-title" style="text-align:center">Our Vision</h2>
                  <p style="margin-top:5px;">
                     With PropFlo, we strive to support young players in the real estate industry through affordable tech that simply works. We firmly believe that proptech products can revolutionize the way developers run and grow their businesses. Enhancing the sales process is only the beginning—we’re committed to creating an end-to-end solution that gives your buyers a frictionless experience right from the first point of contact, up until they’ve been handed over their keys. This is a journey we’re stoked to embark upon.
                  </p>
               </div>
            </div>
         </section>
         <!-- Fanfact area end here -->
       <!--  <section class="press-release pb-50">
            <div class="container py-5">
               <div class="row">
                  <h2 class="section-title" style="text-align:center">Press Releases</h2>
               
                  <div class="col-lg-6">
                     <div class="card h-100 border-0 shadow">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-8">
                                 <span class="badge bg-light text-dark mb-3">Press Release</span>
                                 <h5 class="card-titleh">6sense Recognized as a Leader in 2024 Gartner® Magic Quadrant™ for Account-Based Marketing Platforms for the Fourth Consecutive Year</h5>
                                 <p class="text-muted">November 14, 2024</p>
                              </div>
                              <div class="col-lg-4">
                                 <img src="https://test.propflo.ai/new/assets/img/homepage/sales-automation.png" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div  class="col-lg-6">
                     <div class="card h-100 border-0 shadow">
                        <div class="card-body">
                           <div class="row">
                              <div class="col-lg-8">
                                 <span class="badge bg-light text-dark mb-3">Press Release</span>
                                 <h5 class="card-titleh">6sense Recognized as a Leader in 2024 Gartner® Magic Quadrant™ for Account-Based Marketing Platforms for the Fourth Consecutive Year</h5>
                                 <p class="text-muted">November 14, 2024</p>
                              </div>
                              <div class="col-lg-4">
                                 <img src="https://test.propflo.ai/new/assets/img/homepage/sales-automation.png" class="img-fluid">
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section> -->
         <?php
            include('home-awards.php');
             
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