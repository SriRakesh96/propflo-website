<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>
<title>Propflo Awards & Recognitions 2024 - Leading Real Estate CRM</title>
<meta content="Explore the awards and recognitions Propflo has earned as India's leading AI-powered real estate CRM. Celebrating excellence in innovation and customer satisfaction." name="description" />

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

</style>

</head>
<body>
 
  
 
    <?php
      
      include('header.php');
      
      ?>

    <div class="ScrollSmoother-content">
    
   

        <main>
      
<div class="mt-120"></div>
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