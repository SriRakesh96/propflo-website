<?php
   
   include('doctype.php');
   
   ?>

<head>

<!-- Best Intelligent Real Estate CRM Software India 2024 - PropFlo -->
<title>404 Page Not Found - PropFlo</title>



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
            
        <section class="error-area">
                <div class="container">
                    <div class="row g-5 align-items-center">
                        <div class="col-lg-5">
                            <div class="error__content">
                                <h1>404</h1>
                                <h2>Ooops! <br> Page Not Found</h2>
                                <p>This page dosen’t exist or was removed! <br>
                                   </p>
                                <a class="btn-propflo mt-40" href="https://propflo.ai/">Go to Homepage</a>
                            </div>
                        </div>
                        <div class="col-lg-7">
                            <div class="error__image image">
                                <img src="assets/img/error-image.png" alt="image">
                                <h3 class="mt-50">Error 404!</h3>
                            </div>
                        </div>
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