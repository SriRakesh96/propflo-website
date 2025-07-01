<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<head>
<title>Real Estate Success Stories with Propflo CRM - Case Studies 2024</title>
<meta content="Discover how Propflo's intelligent real estate CRM empowers businesses to achieve success. Explore real-life case studies showcasing AI-driven solutions for lead and customer management in India." name="description" />


    <?php
     
     include('head.php');
      
      ?>

<style>
      .custom-card:hover {
    transform: scale(1.05);
    box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
    animation: hover-wobble 1s ease-in-out;

}
.custom-card {
    margin:10px;
      height: 250px;
      background-color:#F2F5F8;
      border: none;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 41%);
      }
      .custom-card img {
      max-width: 100%;
      margin-bottom: 15px;
      }
      .custom-card h1 {
      color:#2B3857 !important;
      font-size: 40px;
      font-weight: bold;
      line-height: 1.5;
      }
      .custom-card p {
      color: #555;
      font-size: 0.9rem;
      }
      .custom-card a {
      color: #007b5e;
      font-weight: bold;
      text-decoration: none;
      }
      .custom-card a:hover {
      text-decoration: underline;
      }


#mob-fea{

  display:none;
}

@media only screen and (max-width: 600px) {
  #cli {

      display: flex !important;
   }
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
      
<div class="mt-90"></div>
<div class="container py-5">
   <div class="row g-4">
      <div class="section-header mb-5 text-center">
         <h2 class="fw-600 wow splt-txt" data-splitting>
         Why Propflo is Every Developer’s Top Choice
         </h2>

         <p>
         Learn how our trusted CRM solutions have increased their sales efficiency and what makes PropFlo the Top choice for Real Estate Industry Leaders
</p>
      </div>
      
      <!-- Card 1 -->
      <div class="col-lg-6 col-md-12 col-sm-12">
         <div class="custom-card row align-items-center">
            <div class="col-md-6">
               <h1>75%</h1>
               <p>Increase in Lead to Deal ratio</p>
               <a href="#">Tranquillo's Story</a>
            </div>
            <div class="col-md-6 text-center">
               <img src="assets/img/clients/tranquillo.png" alt="Tranquillo Logo" class="img-fluid" id="cli">
            </div>
         </div>
      </div>
      
      <!-- Card 2 -->
      <div class="col-lg-6 col-md-12 col-sm-12">
         <div class="custom-card row align-items-center">
            <div class="col-md-6">
               <h1>95%</h1>
               <p>Cut down the time for manual tasks</p>
               <a href="#">Ankura Homes Story</a>
            </div>
            <div class="col-md-6 text-center">
               <img src="assets/img/clients/ankura.png" alt="Ankura Homes Logo" class="img-fluid" id="cli">
            </div>
         </div>
      </div>
      
      <!-- Card 3 -->
      <div class="col-lg-6 col-md-12 col-sm-12">
         <div class="custom-card row align-items-center">
            <div class="col-md-6">
               <h1>80%</h1>
               <p>Increase in Customer Engagement</p>
               <a href="#">RV Nirmaan's Story</a>
            </div>
            <div class="col-md-6 text-center">
               <img src="assets/img/clients/rv-nirman.png" alt="RV Nirmaan Logo" class="img-fluid" id="cli" >
            </div>
         </div>
      </div>
      
      <!-- Card 4 -->
      <div class="col-lg-6 col-md-12 col-sm-12">
         <div class="custom-card row align-items-center">
            <div class="col-md-6">
               <h1>90%</h1>
               <p> Improvement in Operational Efficiency
               </p>
               <a href="#">Manbhum Story</a>
            </div>
            <div class="col-md-6 text-center">
               <img src="assets/img/clients/manbhum.png" alt="Manbhum Logo" class="img-fluid" id="cli" >
            </div>
         </div>
      </div>
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