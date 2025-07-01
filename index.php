<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>


<head>

<!-- Best Intelligent Real Estate CRM Software India 2024 - PropFlo -->
<title>Best Intelligent Real Estate CRM Software India 2025 - PropFlo</title>

<meta name="description" content="PropFlo is the AI-powered, customer-centric CRM for real estate developers and brokers. Manage leads, sales, and post-sales with ease. Discover more now!">


    <?php
     
     include('head.php');
      
      ?>

<script type="application/ld+json">
				{
				  "@context": "http://schema.org/",
				  "@type": "WebSite",
				  "name": "propflo",
				  "alternateName": "propflo crm",
				  "url": "https://www.propflo.ai"
				}
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


</style>

<script>
$(document).ready(function() {
  // When a .mean-expand button is clicked
  $('.mean-expand').on('click', function(e) {
    e.preventDefault(); // Prevent default action (e.g., jumping to a link)

    // Close all other menus
    $('.mean-expand').not(this).removeClass('mean-clicked').text('+').prev('ul').slideUp(300);

    // If this menu is not already clicked, open it
    if ($(this).hasClass('mean-clicked')) {
      $(this).removeClass('mean-clicked').text('+').prev('ul').slideUp(300);
    } else {
      $(this).addClass('mean-clicked').text('-').prev('ul').slideDown(300);
    }
  });
});

</script>
</head>
<body>
 
   <?php
     
     include('preloader.php');
      
      ?>

<?php
     
   // include('popup.php');
      
      ?>


 
    <?php
      
      include('header.php');
      
      ?>

    <div class="ScrollSmoother-content">
    
   

        <main>
         <?php
           
    include('home-banner.php');
            
            ?>


  


        <?php
           
       include('home-offer2.php');
             
             ?>

<?php
           
     include('home-offer3.php');
                 
                 ?>

<?php
           
        include('home-choose.php');
            
            ?>

<?php
           
           include('clients.php');
            
            ?>
<?php
           
           include('track-record.php');
            
            ?>

         <?php
           
        include('home-testimonals.php');
            
            ?>

<?php
           
          include('integrations.php');
            
            ?>


<?php
           
           include('home-faqs.php');
            
            ?>






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