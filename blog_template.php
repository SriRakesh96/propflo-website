<?php
   session_start();
   
   include('offline.php');
   
   // Retrieve the title from the query string
   $urlTitle = isset($_GET['title']) ? trim($_GET['title']) : '';
   
   // Replace hyphens with spaces in the title
   $decodedTitle = $urlTitle;
   
   // Assume $conn is the database connection object
   // Fetch the specific news article from the database based on the title
   $fetch_article = "SELECT * FROM propflo_blogs WHERE act='1' AND url= '$decodedTitle'";
   $fetch_article_query = mysqli_query($conn, $fetch_article);
   
   if (mysqli_num_rows($fetch_article_query) > 0) {
       // If the news article is found, display its content
       $row = mysqli_fetch_assoc($fetch_article_query);
       $news_title = $row['news_title'];
       $news_content = $row['news_description'];
   
       $meta_title=$row['meta_title'];
   
       $meta_desc=$row['meta_desc'];
   
       $news_img = $row['news_img'];
       
       $news_cat = $row['category'];

      $schmea=$row['head_scripts'];
   
       $add_by = $row['added_by'];
   
       $uri=$row['url'];
   
       $add=$row['added_on'];
       $add_on = date("d-m-Y", strtotime($row['added_on']));
   
         
      // Output the formatted date
       // Get the protocol
       $protocol ='https';
                                 
       // Get the host
       $host = $_SERVER['HTTP_HOST'];
       
       // Get the current path
       $path = $_SERVER['REQUEST_URI'];
       
       // Combine them to get the full URL
       $fullUrl = $protocol . '://' . $host . $path;
   
   if ($fullUrl == "https://www.propflo.ai/blog/top-10-best-real-estate-crm-software-for-developers-brokers-in-india") {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india\" />";
}
elseif ($fullUrl == "https://www.propflo.ai/blog/real-estate-crm-features-checklist") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/real-estate-crm-for-teams") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/real-estate-crm-vs-generic-crm") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/most-preferred-real-estate-crms-in-india") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/top-crm-for-real-estate-agents-in-india") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/crm-for-real-estate-professionals") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/capabilities-of-real-estate-crm") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
elseif ($fullUrl == "https://www.propflo.ai/blog/training-your-sales-team-to-harness-the-power-of-a-real-estate-crm") {
    header("Location: https://www.propflo.ai/blog/top-real-estate-crm-softwares-in-india");
    exit;
}
   ?>
<?php
   include('doctype.php');
   
   
   ?>
<head>
   <meta charset="utf-8" />
   <title><?php echo $meta_title; ?> </title>
   <meta content="<?php echo $meta_desc; ?>" name="description" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <!-- Favicon img -->
   <link rel="shortcut icon" href="https://propflo.ai/assets/img/favicon.png">
   <!-- Bootstarp min css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/bootstrap.min.css">
   <!-- Mean menu css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/meanmenu.css">
   <!-- All min css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/all.min.css">
   <!-- Swiper bundle min css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/swiper-bundle.min.css">
   <!-- Magnigic popup css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/magnific-popup.css">
   <!-- Animate css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/animate.css">
   <!-- Splitting css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/splitting.css">
   <!-- propFlo custom css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/custom.css">
   <!-- Nice select css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/nice-select.css">
   <!-- Style css -->
   <link rel="stylesheet" href="https://propflo.ai/assets/css/style.css">
   <!-- Swiper CSS -->
   <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css">
   <!-- Add these lines to the head of your HTML document -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
   <!-- Include jQuery -->
   <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
   <!-- Google reCAPTCHA API script -->
   <script src="https://www.google.com/recaptcha/api.js" async defer></script>
   <?php
      if (!empty($schmea)) {
          echo html_entity_decode($schmea);  // Sanitize output to prevent XSS attacks
      }
      
      
       ?>
   <link rel="canonical" href="<?php echo 'https://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>" />
   <script>
      (function(w, d, s, l, i) {
          w[l] = w[l] || [];
          w[l].push({
              'gtm.start': new Date().getTime(),
              event: 'gtm.js'
          });
          var f = d.getElementsByTagName(s)[0],
              j = d.createElement(s),
              dl = l != 'dataLayer' ? '&l=' + l : '';
          j.async = true;
          j.src =
              'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
          f.parentNode.insertBefore(j, f);
      })(window, document, 'script', 'dataLayer', 'GTM-T7HCWFS');
   </script>
   <script>
      ! function(f, b, e, v, n, t, s) {
          if (f.fbq) return;
          n = f.fbq = function() {
              n.callMethod ?
                  n.callMethod.apply(n, arguments) : n.queue.push(arguments)
          };
          if (!f._fbq) f._fbq = n;
          n.push = n;
          n.loaded = !0;
          n.version = '2.0';
          n.queue = [];
          t = b.createElement(e);
          t.async = !0;
          t.src = v;
          s = b.getElementsByTagName(e)[0];
          s.parentNode.insertBefore(t, s)
      }(window, document, 'script',
          'https://connect.facebook.net/en_US/fbevents.js');
      fbq('init', '1397289174241638');
      fbq('track', 'PageView');
   </script>
   <noscript><img height="1" width="1" style="display:none"
      src="https://www.facebook.com/tr?id=1397289174241638&ev=PageView&noscript=1" /></noscript>
   <!-- End Google Tag Manager -->
   <meta name="google-site-verification" content="dGTYiiNwzd2c13fD00yg2w3tArEEUW6PuWc2a0UwTDA" />
   <script type="text/javascript">
      (function(c, l, a, r, i, t, y) {
          c[a] = c[a] || function() {
              (c[a].q = c[a].q || []).push(arguments)
          };
          t = l.createElement(r);
          t.async = 1;
          t.src = "https://www.clarity.ms/tag/" + i;
          y = l.getElementsByTagName(r)[0];
          y.parentNode.insertBefore(t, y);
      })(window, document, "clarity", "script", "pgy44nt73f");
   </script>
   <style>
      h2 span {
      color: #000 !important;
      }
      #head {
      line-height: 45px !important;
      }
      /* Mobile-specific styles */
      @media (max-width: 500px) {
      .main-menu ul li a {
      font-size: 16px;
      display: none;
      /* Hide the links until preloader is finished */
      }
      }
      .blog-content li {
      list-style-type: disc !important;
      }
      .blog-content ol {
      padding-inline-start: 25px !important;
      }
      .blog-content ul {
      padding-inline-start: 25px !important;
      }
      .blog-content p {
      color: #000;
      font-family: 'Neulis Alt', sans-serif !important;
      }
      .blog-content {
      font-family: 'Neulis Alt', sans-serif !important;
      }
      .blog-content ul li span {
      font-size: 18px !important;
      font-family: 'Neulis Alt', sans-serif !important;
      color: #000 !important;
      line-height: 2 !important;
      }
      .blog-content p a span {
      color: #1155cc !important;
      }
      @media only screen and (max-width: 600px) {
      .blog-details-area img {
      width: 100% !important;
      height: 100% !important;
      }
      }
      table {
      margin: 0 auto;
      text-align: center;
      display: block;
      width: 100% !important;
      overflow-x: auto;
      white-space: nowrap;
      }
      td p {
      text-align: left !important;
      }
      .iti {
      display: block !important;
      }
      input::placeholder,
      textarea::placeholder {
      font-size: 15px;
      /* Set the placeholder font size */
      }
      .menubars span {
      display: inline-block !important;
      }
      .blogcontent p {
      color: #000 !important;
      }
      .menu-list1 {
      display: flex !important;
      align-items: flex-start !important;
      margin-bottom: 20px;
      gap: 0px !important;
      }
      .lim {
      padding: 12px 10px;
      }
      .lim img {
      width: 22px !important;
      }
      @media only screen and (max-width: 600px) {
      .sub-menu img {
      width: 20px !important;
      }
      .men-rig a strong {
      color: #fff !important;
      }
      }
   <style>.lim:hover {
      padding: 10px 5px !important;
      }
      .lim {
      padding: 10px 5px !important;
      }
      .coloumn ul {
      gap: 2px !important;
      }
      span {
      display: contents !important;
      }
      @media only screen and (max-width: 768px) {
      p img {
      width: 100% !important;
      height: 100% !important;
      }
      }
      .header__main .main-menu ul {
      display: flex;
      align-items: flex-start;
      gap: 30px;
      justify-content: flex-start !important;
      }
      @media (max-width: 767px) {
      .floating-cta {
      display: block !important;
      position: fixed;
      bottom: 0;
      left: 0;
      width: 100%;
      z-index: 9999;
      text-align: center;
      background: #08CF65;
      padding: 14px;
      font-size: 18px;
      }
      .floating-cta a {
      color: #fff !important;
      }
      }
      .floating-cta {
      display: none;
      }
      .lim:hover {
      background: #EBF5F3 !important;
      width: 100% !important;
      }
      .lmcont {
      padding: 0px 20px;
      }
      @media (max-width: 767px) {
      .lmcont {
      padding: 0px !important;
      }
      }
      @media (min-width: 1650px) and (max-width: 2000px) {
      .mega-menu {
      width: 70vw;
      }
      }
      .lim {
      margin-left: 2px !important;
      }
      .banner-three__content {
      max-width: 75% !important;
      margin: 0 auto;
      }
      @media (max-width: 767px) {
      .banner-three__content {
      max-width: 100% !important;
      }
      }
      .men-rig a strong {
      font-weight: 500 !important;
      font-size: 18px !important;
      }
      .banner-inner-area {
      padding-top: 150px !important;
      padding-bottom: 30px !important;
      }
      .lim img {
      width: 22px !important;
      }
      .blog-content ul {
      padding-inline-start: 25px !important;
      padding-left: 10px;
      }
   </style>
   <script>
      document.addEventListener("DOMContentLoaded", () => {
          const preloader = document.querySelector(".preloader-container");
          const content = document.querySelector(".main-menu"); // This is your header, adjust if needed
      
          // Display the preloader for 2 seconds and show content after that
          setTimeout(() => {
              preloader.style.display = "none"; // Hide preloader
              content.style.display = "block"; // Show the menu content
      
              // Make sure that after preloader, the media query applies properly
              if (window.innerWidth <= 500) {
                  document.querySelector(".main-menu ul li a").style.display =
                      'block'; // Adjust visibility for mobile if needed
              }
          }, 1800);
      });
      
      
      
      document.addEventListener("DOMContentLoaded", () => {
          const preloader = document.querySelector(".preloader-container");
          const content = document.querySelector(".main-content");
      
          // Display the preloader for 2 seconds
          setTimeout(() => {
              preloader.style.display = "none";
              content.style.display = "block";
          }, 50);
      });
   </script>
   <style>
      .social-icons a {
      display: inline-block;
      margin: 5px;
      width: 40px;
      height: 40px;
      line-height: 40px;
      text-align: center;
      border-radius: 50%;
      background-color: #62d84e;
      color: #fff;
      font-size: 20px;
      text-decoration: none;
      }
      .social-icons a .fa {
      vertical-align: middle;
      }
      .video_share {
      margin-top: 10px;
      }
      .blog-content p {
      margin: 0px !important;
      }
      .uui-blogpost01_image-copy {
      object-fit: contain !important;
      }
      .blog-content ol li {
      font-size: 18px !important;
      }
      .blog-content ol li p {
      font-size: 18px !important;
      }
      /* Media query for screens with a maximum width of 768 pixels */
      @media screen and (max-width: 768px) {
      .uui-blogpost01_image-copy {
      object-fit: fill !important;
      }
      .blogh1 {
      /* Adjust the font size for smaller screens */
      font-size: 30px;
      }
      }
      .blog-content h2 {
      font-family: Neulisalt, sans-serif !important;
      margin: 0px !important;
      padding: 5pt 0pt 5pt 0pt !important;
      }
      .blog-contentul li p {
      margin-top: 2pt !important;
      font-size: 18px !important;
      }
      .blog-content p {
      margin-bottom: 0px !important;
      font-size: 18px !important;
      text-align: justify;
      line-height: 1.8 !important;
      margin-bottom: 10px !important;
      padding: 0px !important;
      }
      .blog-content h3 {
      margin-top: 0;
      margin-bottom: 15px !important;
      font-family: Neulisalt, sans-serif !important;
      }
      .blog-content h2 {
      margin-top: 0;
      margin-bottom: 15px !important;
      font-family: Neulisalt, sans-serif !important;
      line-height: 1.2em !important;
      }
      .blog-content h2 span {
      margin-top: 0;
      margin-bottom: 15px;
      font-family: Neulisalt, sans-serif !important;
      font-size: 30px !important;
      line-height: 33px !important;
      }
      .blog-content h1 span {
      margin-top: 0;
      margin-bottom: 15px;
      font-family: Neulisalt, sans-serif !important;
      font-size: 25px !important;
      line-height: 20px !important;
      }
      .blog-content h3 span {
      margin-top: 0;
      margin-bottom: 20px;
      font-family: Neulisalt, sans-serif !important;
      font-size: 20px !important;
      line-height: 20px !important;
      }
      .blog-content h4 span {
      margin-top: 0;
      margin-bottom: 20px;
      font-family: Neulisalt, sans-serif !important;
      font-size: 18px !important;
      line-height: 20px !important;
      }
      .blog-content h5 span {
      margin-top: 0;
      margin-bottom: 20px;
      font-family: Neulisalt, sans-serif !important;
      font-size: 16px !important;
      line-height: 20px !important;
      }
      .blog-content h6 span {
      margin-top: 0;
      margin-bottom: 20px;
      font-family: Neulisalt, sans-serif !important;
      font-size: 14px !important;
      line-height: 20px !important;
      }
      .blog-content li {
      white-space: inherit !important;
      }
      .blog-content p span {
      /*   font-size:18px !important;*/
      line-height: 1.8 !important;
      }
      .blog-content p span span img {
      display: block !important;
      margin: 0 auto !important;
      }
      /* Margin-bottom*/
      .uui-blogpost01_title-wrapper {
      margin-bottom: 5px !important;
      }
      .uui-blogpost01_image-wrapper {
      margin-bottom: 5px;
      }
      .blogh1 {
      font-size: 45px !important;
      }
      /* Popup container */
      .popup {
      display: none;
      position: fixed;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      justify-content: center;
      align-items: center;
      z-index: 1000;
      }
      /* Popup content */
      .popup-content {
      background-color: white;
      border-radius: 5px;
      display: flex;
      flex-direction: row;
      width: 80%;
      max-width: 850px;
      position: relative;
      max-height: 90%;
      /* Allow for proper sizing */
      overflow: hidden;
      /* Ensure content does not overflow */
      }
      /* Popup body */
      .popup-body {
      display: flex;
      flex-direction: row;
      width: 100%;
      height: 100%;
      /* Make sure the body takes full height */
      }
      /* Form section */
      .popup-form {
      flex: 1;
      padding: 20px;
      /* Added padding for better form layout */
      overflow-y: auto;
      /* Allow scrolling if content overflows */
      }
      /* Image section */
      .popup-image {
      display: flex;
      align-items: center;
      justify-content: center;
      flex: 1;
      position: relative;
      height: 100%;
      }
      .popup-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      /* Ensure the image covers the container */
      }
      /* Close button */
      .close-button {
      position: absolute;
      top: 10px;
      right: 10px;
      background: none;
      border: none;
      font-size: 20px;
      color: white;
      /* Make the button visible on the image */
      cursor: pointer;
      z-index: 1;
      }
      /* Responsive design */
      @media (max-width: 600px) {
      .popup-body {
      flex-direction: column;
      }
      .popup-image {
      display: none;
      }
      }
      .uui-form_input.text-area {
      min-height: 1rem;
      }
      .menu-list1 {
      display: flex !important;
      align-items: flex-start !important;
      margin-bottom: 20px;
      gap: 0px !important;
      }
      .lim {
      padding: 10px 10px !important;
      width: 100% !important;
      }
      .lim img {
      width: 22px !important;
      }
      @media only screen and (max-width: 768px) {
      .modal-image {
      display: none !important;
      }
      .sub-menu img {
      width: 20px !important;
      }
      .men-rig a strong {
      color: #fff !important;
      }
      }
      .menu-list1 {
      display: flex !important;
      align-items: flex-start !important;
      margin-bottom: 5px;
      gap: 0px !important;
      }
      .menu-list1 {
      display: flex;
      align-items: center;
      flex-direction: column;
      justify-content: center;
      }
      .lim a {
      display: flex;
      align-items: center;
      text-decoration: none;
      width: 100%;
      padding: 10px 10px !important;
      }
   </style>
   <style>
      .modal-content {
      display: flex;
      flex-direction: row;
      align-items: center;
      }
      .modal-form {
      padding: 20px;
      flex: 1;
      }
      .modal-image {
      flex: 1;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #f8f9fa;
      }
      .modal-image img {
      max-width: 100%;
      height: auto;
      }
   </style>
</head>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-T7HCWFS" height="0" width="0"
   style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
   <div class="modal-dialog modal-dialog-centered modal-lg">
      <div class="modal-content">
         <div class="modal-form">
            <button type="button" class="btn-close float-end" data-bs-dismiss="modal" aria-label="Close"
               style="position: absolute;top: 5px;right: 5px;font-size: 13px;font-weight: bold;"></button>
            <h5 style="font-weight:700" class="modal-title mb-3" id="exampleModalLabel">
               India's Only End-to-End AI-Powered Real Estate Solution
            </h5>
            <form action="https://www.propflo.ai/contact_pro.php" method="POST" id="popup-form">
               <input type="hidden" name="form-name" value="Popup_Form">
               <div class="mb-3">
                  <input type="text" class="form-control" name="name" placeholder="Your name" required>
               </div>
               <div class="mb-3">
                  <input type="email" class="form-control" name="email" placeholder="Your Email" required>
               </div>
               <div class="mb-3">
                  <input type="tel" class="form-control" maxlength="10" name="phone" id="phone"
                     placeholder="Enter Phone Number" required>
               </div>
               <input type="hidden" name="country_code" id="country_code" required="">
               <div class="mb-3">
                  <input type="text" class="form-control" name="company" placeholder="Your Company Name" required>
               </div>
               <!-- Add reCAPTCHA v2 Checkbox -->
               <div class="g-recaptcha" data-sitekey="6Lf9OyArAAAAAE6CqZoiXzQvyCFaYkxoj__ua5_H"></div>
               <small id="recaptcha-error" class="error-message" style="color: red; display: none;">
               Please complete the CAPTCHA validation.
               </small>
               <button type="submit" class="btn-propflo">Submit</button>
            </form>
            <script src="https://www.google.com/recaptcha/api.js" async defer></script>
            <script>
               document.getElementById('popup-form').addEventListener('submit', function(event) {
                   const recaptchaResponse = document.querySelector('.g-recaptcha-response').value;
                   const recaptchaError = document.getElementById('recaptcha-error');
               
                   if (!recaptchaResponse) {
                       // If reCAPTCHA is not completed, show an error and prevent submission
                       recaptchaError.style.display = 'block';
                       event.preventDefault();
                   } else {
                       recaptchaError.style.display = 'none';
                   }
               });
            </script>
            <script>
               // Function to get user's country code based on IP address
               function getUserCountryCode(callback) {
                   fetch('https://ipapi.co/json/')
                       .then(response => response.json())
                       .then(data => {
                           if (data.country) {
                               callback(data.country);
                           }
                       })
                       .catch(error => {
                           console.error('Error fetching user country:', error);
                       });
               }
               // Initialize the intlTelInput plugin
               var input = document.querySelector("#phone");
               var countryInput = document.querySelector("#country_code");
               // Get user's country code and initialize intlTelInput
               getUserCountryCode(function(countryCode) {
                   var iti = window.intlTelInput(input, {
                       utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                       initialCountry: countryCode ? countryCode.toUpperCase() :
                       'auto', // Set initial country based on user's IP address, default to 'auto' if not available
                   });
                   // Set initial value for the hidden input
                   countryInput.value = "+" + iti.getSelectedCountryData().dialCode;
                   // Listen for changes to the phone number input
                   input.addEventListener("input", function() {
                       var countryCode = iti.getSelectedCountryData().dialCode;
                       countryInput.value = "+" + countryCode;
                   });
                   // Optional: Listen for country changes
                   iti.events.on("countrychange", function() {
                       countryInput.value = "+" + iti.getSelectedCountryData().dialCode;
                   });
               });
               input.addEventListener("keypress", function(event) {
                   var key = event.which || event.keyCode;
                   if (key < 48 || key > 57) {
                       event.preventDefault();
                   }
               });
            </script>
         </div>
         <div class="modal-image">
            <img src="https://propflo.ai/assets/img/popup.gif" alt="Business Growth">
         </div>
      </div>
   </div>
</div>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/5.3.0/js/bootstrap.bundle.min.js"></script>
<script>
   // Show modal after 10 seconds
   setTimeout(() => {
       const modal = new bootstrap.Modal(document.getElementById('exampleModal'));
       modal.show();
   }, 30000);
</script>
<!-- Top header area start here -->
<div class="header-top d-none d-lg-block">
   <div class="container">
      <p style="color:#fff;font-size:14px;text-align:center">
         Learn how to leverage new technologies and tactics to streamline any workflow — register for exclusive
         on-demand access to Collaborate 2024.
      </p>
   </div>
</div>
<!-- Top header area end here -->
<!-- Header area start here -->
<header class="header-area border-none">
   <div class="container">
      <div class="header__main">
         <a class="logo" href="https://propflo.ai">
         <img src="https://propflo.ai/assets/img/propflo-logo.png" alt="logo">
         </a>
         <div class="main-menu">
            <nav>
               <ul>
                  <li class="dropdown" style="color:#000" id="wb-sl">
                     <a href="#0" class="menu-item">Solutions <i class="fa-solid fa-angle-down"></i></a>
                     <div class="mega-menu1">
                        <div class="row">
                           <!-- Column 1 -->
                           <div class="column">
                              <h3 class="column-title">By Business Type</h3>
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/solutions/developers">
                                       <img src="https://propflo.ai/assets/img/menu-icons/1.png">
                                       <div class="men-rig">
                                          <strong>Developers</strong>
                                          <p>Streamline developer projects.</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/solutions/channel-partner">
                                       <img src="https://propflo.ai/assets/img/menu-icons/2.png">
                                       <div class="men-rig">
                                          <strong>Channel Partners</strong>
                                          <p>Enhance partnership management</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 3 -->
                           <div class="column">
                              <h3 class="column-title">By Objectives</h3>
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/sales-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/6.png">
                                       <div class="men-rig">
                                          <strong>Sales Management</strong>
                                          <p> For accelerated sales conversions.</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/marketing-automation">
                                       <img src="https://propflo.ai/assets/img/menu-icons/8.png">
                                       <div class="men-rig">
                                          <strong>Marketing Management</strong>
                                          <p>Optimize marketing campaigns</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/post-sales-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/7.png">
                                       <div class="men-rig">
                                          <strong>Post-Sales Management</strong>
                                          <p>Boost customer retention</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="mb-sl">
                     <a href="#0">Solutions <i class="fa-solid fa-angle-down"></i></a>
                     <ul class="sub-menu">
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/1.png">
                           <a href="https://propflo.ai/solutions/developers"><strong>Developers</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/2.png">
                           <a href="https://propflo.ai/solutions/channel-partner"><strong>Channel
                           Partners</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/6.png">
                           <a href="https://propflo.ai/features/sales-management"><strong>Sales
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/8.png">
                           <a href="https://propflo.ai/features/marketing-automation"><strong>Marketing
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/7.png">
                           <a href="https://propflo.ai/features/post-sales-management"><strong>Post-Sales
                           Management</strong></a>
                        </li>
                     </ul>
                  </li>
                  <!-- Product Dropdown -->
                  <li class="dropdown" style="color:#000" id="wb-sl">
                     <a href="#0">Features <i class="fa-solid fa-angle-down"></i></a>
                     <div class="mega-menu">
                        <div class="row">
                           <!-- Column 1 for Product Features -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/marketing-automation">
                                       <img src="https://propflo.ai/assets/img/menu-icons/12.png">
                                       <div class="men-rig">
                                          <strong>Marketing Automation</strong>
                                          <p> Simplify marketing tasks to increase efficiency.
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/sales-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/6.png">
                                       <div class="men-rig">
                                          <strong>Sales Management</strong>
                                          <p>Interactive project scheduling across
                                             teams.
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/lead-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/icon41.png">
                                       <div class="men-rig">
                                          <strong>Lead Management</strong>
                                          <p>Optimize lead tracking and conversions</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/reports-and-dashboards">
                                       <img src="https://propflo.ai/assets/img/menu-icons/15.png">
                                       <div class="men-rig">
                                          <strong>Reports & Dashboards</strong>
                                          <p>Access essential data and insights quickly</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 2 for Product Resources -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/third-party-integrations">
                                       <img src="https://propflo.ai/assets/img/menu-icons/icon42.png">
                                       <div class="men-rig">
                                          <strong>Third Party Integrations</strong>
                                          <p>Expand functionality with easy integrations.
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/omni-channel-communication">
                                       <img src="https://propflo.ai/assets/img/menu-icons/13.png">
                                       <div class="men-rig">
                                          <strong>Omni Channel Communication</strong>
                                          <p>Coordinate client interactions across all channels.</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/channel-partner-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/17.png">
                                       <div class="men-rig">
                                          <strong>Channel Partner Management</strong>
                                          <p>Manage partner relations and performance efficiently</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/mobile-app">
                                       <img src="https://propflo.ai/assets/img/menu-icons/11.png">
                                       <div class="men-rig">
                                          <strong>Mobile App</strong>
                                          <p>Interactive project scheduling across
                                             teams.
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 2 for Product Resources -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/ai-features">
                                       <img src="https://propflo.ai/assets/img/menu-icons/17.png">
                                       <div class="men-rig">
                                          <strong>AI Features</strong>
                                          <p>Utilize AI for smart automation and data-driven insights.</p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/inventory-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/16.png">
                                       <div class="men-rig">
                                          <strong>Inventory Management</strong>
                                          <p> Monitor real-time inventory and statuses.
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/post-sales-management">
                                       <img src="https://propflo.ai/assets/img/menu-icons/7.png">
                                       <div class="men-rig">
                                          <strong>Post Sales Management</strong>
                                          <p>Enhance client satisfaction and encourage loyalty post-sale
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/customer-app">
                                       <img src="https://propflo.ai/assets/img/menu-icons/icon40.png">
                                       <div class="men-rig">
                                          <strong>Customer Portal</strong>
                                          <p>Empower clients with a self-service hub</p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="mb-sl">
                     <a href="#0">Features <i class="fa-solid fa-angle-down"></i></a>
                     <ul class="sub-menu">
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/12.png">
                           <a href="https://propflo.ai/features/marketing-automation"><strong>Marketing
                           Automation</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/6.png">
                           <a href="https://propflo.ai/features/sales-management"><strong>Sales
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/icon42.png">
                           <a href="https://propflo.ai/features/lead-management"><strong>Lead
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/15.png">
                           <a href="https://propflo.ai/features/reports-and-dashboards"><strong>Reports &
                           Dashboards</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/icon42.png">
                           <a href="https://propflo.ai/features/third-party-integrations"><strong>Third Party
                           Integrations</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/13.png">
                           <a href="https://propflo.ai/features/omni-channel-communication"><strong>Omni
                           Channel
                           Communication</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/11.png">
                           <a href="https://propflo.ai/features/mobile-app"><strong>Mobile App</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/17.png">
                           <a href="https://propflo.ai/features/channel-partner-management"><strong>Channel
                           Partner
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/17.png">
                           <a href="https://propflo.ai/features/ai-features"><strong>AI Features</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/16.png">
                           <a href="https://propflo.ai/features/inventory-management"><strong>Inventory
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/7.png">
                           <a href="https://propflo.ai/features/post-sales-management"><strong>Post Sales
                           Management</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/icon40.png">
                           <a href="https://propflo.ai/features/customer-app"><strong>Customer
                           Portal/App</strong></a>
                        </li>
                     </ul>
                  </li>
                  <!-- Why Propflo Dropdown -->
                  <li class="dropdown" style="color:#000" id="wb-sl">
                     <a href="#0">Resources <i class="fa-solid fa-angle-down"></i></a>
                     <div class="mega-menu">
                        <div class="row">
                           <!-- Column 1 for Benefits -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/blog">
                                       <img src="https://propflo.ai/assets/img/menu-icons/19.png">
                                       <div class="men-rig">
                                          <strong>Blogs</strong>
                                          <p>Insightful Industry Perspectives
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/testimonals">
                                       <img src="https://propflo.ai/assets/img/menu-icons/22.png">
                                       <div class="men-rig">
                                          <strong>Testimonials</strong>
                                          <p>Client Success Testimonials
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 2 for Testimonials -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/case-studies">
                                       <img src="https://propflo.ai/assets/img/menu-icons/21.png">
                                       <div class="men-rig">
                                          <strong>Case Studies</strong>
                                          <p>Proven Success Stories
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                                 <li class="lim">
                                    <a href="https://propflo.ai/faqs">
                                       <img src="https://propflo.ai/assets/img/menu-icons/24.png">
                                       <div class="men-rig">
                                          <strong>FAQ’s</strong>
                                          <p>Helpful Answers Provided about PropFlo CRM
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 2 for Testimonials -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/features/third-party-integrations">
                                       <img src="https://propflo.ai/assets/img/menu-icons/23.png">
                                       <div class="men-rig">
                                          <strong>Integrations</strong>
                                          <p>Seamless System Integrations
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="mb-sl">
                     <a href="#0">Resources<i class="fa-solid fa-angle-down"></i></a>
                     <ul class="sub-menu">
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/19.png">
                           <a href="https://propflo.ai/blog"><strong>Blogs</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/21.png">
                           <a href="https://propflo.ai/case-studies"><strong>Case Studies</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/22.png">
                           <a href="https://propflo.ai/testimonals"><strong>Testimonials</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/23.png">
                           <a
                              href="https://propflo.ai/features/third-party-integrations"><strong>Integrations</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/24.png">
                           <a href="https://propflo.ai/faqs"><strong>FAQ’s</strong></a>
                        </li>
                     </ul>
                  </li>
                  <!-- Why Propflo Dropdown -->
                  <li class="dropdown" style="color:#000" id="wb-sl">
                     <a href="#0">Company <i class="fa-solid fa-angle-down"></i></a>
                     <div class="mega-menu">
                        <div class="row">
                           <!-- Column 1 for Benefits -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/about">
                                       <img src="https://propflo.ai/assets/img/menu-icons/25.png">
                                       <div class="men-rig">
                                          <strong>About Us</strong>
                                          <p>Best Intelligent Real Estate CRM Software India 2024
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 2 for Testimonials -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/careers">
                                       <img src="https://propflo.ai/assets/img/menu-icons/28.png">
                                       <div class="men-rig">
                                          <strong>Career </strong>
                                          <p>Explore Career Opportunities with us
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                           <!-- Column 2 for Testimonials -->
                           <div class="column">
                              <ul class="menu-list1">
                                 <li class="lim">
                                    <a href="https://propflo.ai/about#vision">
                                       <img src="https://propflo.ai/assets/img/menu-icons/26.png">
                                       <div class="men-rig">
                                          <strong>Our Vision</strong>
                                          <p>Shaping Real Estate's Future in India and Globally
                                          </p>
                                       </div>
                                    </a>
                                 </li>
                              </ul>
                           </div>
                        </div>
                     </div>
                  </li>
                  <li class="mb-sl">
                     <a href="#0">Company <i class="fa-solid fa-angle-down"></i></a>
                     <ul class="sub-menu">
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/25.png">
                           <a href="https://propflo.ai/about"><strong>About Us</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/26.png">
                           <a href="https://propflo.ai/about#vision"><strong>Our Vision</strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/28.png">
                           <a href="https://propflo.ai/careers"><strong>Career </strong></a>
                        </li>
                        <li style="display: flex; align-items: center; color: #fff;">
                           <img src="https://propflo.ai/assets/img/menu-icons/29.png">
                           <a href="https://propflo.ai/awards"><strong>Awards</strong></a>
                        </li>
                     </ul>
                  </li>
               </ul>
            </nav>
         </div>
         <div class="menu-btns d-none d-lg-flex">
            <a href="https://propflo.ai/contact">
               <svg width="30" height="30" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <rect x="0.183908" y="0.933908" width="15.6322" height="15.6322" rx="7.81609" fill="white" />
                  <rect x="0.183908" y="0.933908" width="15.6322" height="15.6322" rx="7.81609" stroke="#000000"
                     stroke-width="0.367816" />
                  <path
                     d="M4.41357 6.81899C4.41357 9.86598 6.88383 12.3362 9.93082 12.3362H10.7584C10.9779 12.3362 11.1884 12.249 11.3436 12.0938C11.4988 11.9386 11.586 11.7281 11.586 11.5086V11.004C11.586 10.8142 11.4569 10.6487 11.2726 10.6027L9.64576 10.1959C9.48392 10.1555 9.31399 10.2161 9.21431 10.3493L8.85753 10.8249C8.7538 10.9632 8.57468 11.0242 8.41247 10.9646C7.81031 10.7433 7.26347 10.3936 6.80982 9.93999C6.35616 9.48634 6.00654 8.93949 5.78516 8.33734C5.72557 8.17513 5.78663 7.996 5.92493 7.89228L6.40052 7.5355C6.53403 7.43582 6.59436 7.26552 6.5539 7.10405L6.14709 5.4772C6.12471 5.38771 6.07306 5.30826 6.00035 5.25148C5.92765 5.1947 5.83805 5.16385 5.7458 5.16382H5.24116C5.02167 5.16382 4.81117 5.25101 4.65597 5.40621C4.50077 5.56142 4.41357 5.77192 4.41357 5.9914V6.81899Z"
                     stroke="#000000" stroke-width="0.551724" stroke-linecap="round" stroke-linejoin="round" />
               </svg>
               Contact Sales
            </a>
            <a class="sign-in" href="https://propflo.ai/demo">Book a Demo</a>
         </div>
         <button class="menubars d-block d-lg-none" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#menubar">
         <span></span>
         <span></span>
         <span></span>
         </button>
      </div>
   </div>
</header>
<!-- Header area end here -->
<!-- Sidebar area start here -->
<div class="sidebar-area offcanvas offcanvas-end" id="menubar">
   <div class="offcanvas-header">
      <a class="logo" href="https://www.propflo.ai">
      <img src="https://propflo.ai/assets/img/propflo-logo.png" alt="logo">
      </a>
      <button type="button" class="btn-close" data-bs-dismiss="offcanvas"><i class="fa-regular fa-xmark"></i></button>
   </div>
   <div class="offcanvas-body sidebar__body">
      <div class="mobile-menu overflow-hidden"></div>
      <div class="sidebar__contact-info mt-15">
         <h5 class="mb-20">Contact Info</h5>
         <ul>
            <li><a href="https://maps.app.goo.gl/otfDM8BsYZujU5zLA">PropFlo,
               Plot No.102,
               Rd Number 44, Kavuri Hills Phase 2,
               Madhapur, Hyderabad,Telangana 500081 </a>
            </li>
            <li class="py-2"><i class="fa-solid fa-phone-volume"></i> <a href="tel:+9180086 56081">+91 80086
               56081</a>
            </li>
            <li><i class="fa-solid fa-paper-plane"></i> <a href="mailto:hello@propflo.ai">hello@propflo.ai</a></li>
         </ul>
      </div>
      <div class="sidebar__btns my-4">
         <a href="https://propflo.ai/demo">Request Demo</a>
      </div>
   </div>
</div>
<!-- Sidebar area end here -->
<script>
   // Select all dropdown elements
   const dropdowns = document.querySelectorAll('.dropdown');
   // Function to close all dropdowns
   function closeAllDropdowns() {
       dropdowns.forEach(dropdown => {
           dropdown.classList.remove('open');
       });
   }
   // Add event listeners for each dropdown
   dropdowns.forEach(dropdown => {
       // Handle click to toggle the menu
       dropdown.addEventListener('click', (event) => {
           event.stopPropagation(); // Prevent the click from bubbling up to the document
           const isOpen = dropdown.classList.contains('open');
           closeAllDropdowns(); // Close all dropdowns first
           if (!isOpen) {
               dropdown.classList.add('open'); // Toggle the current one
           }
       });
       // Handle hover to open the menu
       dropdown.addEventListener('mouseenter', () => {
           closeAllDropdowns(); // Close all other dropdowns
           dropdown.classList.add('open'); // Open the current one on hover
       });
       // Handle mouse leaving the dropdown to close it
       dropdown.addEventListener('mouseleave', () => {
           dropdown.classList.remove('open'); // Close the current dropdown on mouse leave
       });
   });
   // Close all dropdowns when clicking outside the menu
   document.addEventListener('click', (event) => {
       if (!event.target.closest('.dropdown')) {
           closeAllDropdowns();
       }
   });
</script>
<div class="ScrollSmoother-content">
<style>
   .blog-content p span {
   font-size: 18px !important;
   font-family: 'Neulis Alt', sans-serif !important;
   color: #000 !important;
   }
   .blog-content h2 span {
   font-family: 'Neulis Alt', sans-serif !important;
   font-size: 25px !important;
   font-weight: 700 !important;
   }
   .blog-content h3 {
   font-family: 'Neulis Alt', sans-serif !important;
   font-size: 25px !important;
   font-weight: 700 !important;
   }
   .blog-content h3 span {
   font-family: 'Neulis Alt', sans-serif !important;
   font-weight: 600 !important;
   }
   #head {
   font-size: 35px !important;
   }
   .blog-content {
   font-family: Neulisalt, sans-serif !important;
   }
</style>
<main>
   <style>
      .progress-container {
      width: 100%;
      height: 8px;
      background: #f3f3f3;
      position: fixed;
      top: 80px;
      left: 0;
      z-index: 99;
      transition: top 0.3s ease;
      }
      .progress-bar {
      height: 100%;
      background-color: #08CF65;
      width: 0%;
      transition: width 0.2s ease;
      }
      @media (max-width: 768px) {
      .progress-container {
      top: 96px !important;
      }
      }
      .blog-details__item .image img {
      width: 70% !important;
      display: block !important;
      margin: 0 auto !important;
      }
      @media only screen and (max-width: 600px) {
      .blog-details__item .image img {
      width: 100% !important;
      }
      }
   </style>
   <div class="progress-container">
      <div class="progress-bar" id="progressBar"></div>
   </div>
   <script>
      jQuery(document).ready(function($) {
          var progressBar = $('#progressBar');
          var progressContainer = $('.progress-container');
          var initialTop = 77;
          var stickyTop = 77;
          $(window).on('scroll', function() {
              var scrollTop = $(document).scrollTop();
              var scrollHeight = $(document).height() - $(window).height();
              var scrolled = (scrollTop / scrollHeight) * 100;
              progressBar.css('width', scrolled + '%');
              if (scrollTop > 0) {
                  progressContainer.css('top', stickyTop + 'px');
              } else {
                  progressContainer.css('top', initialTop + 'px');
              }
          });
      });
   </script>
   <!-- Blog details area start here -->
   <section class="blog-details-area pb-120 pt-140">
      <div class="container">
         <div class="row g-5">
            <div class="col-lg-12 ">
               <div class="blog-details__item-left">
                  <div class="blog-details__item">
                     <div class="image">
                        <img src="https://propflo.ai/uploads/<?php echo $news_img; ?>"
                           alt="<?php echo $news_title; ?>">
                     </div>
                     <div class="blog-content mt-30">
                        <h1 class="mb-1" id="head" style="text-align:center;"><?php echo $news_title; ?>
                        </h1>
                        <p> <?php echo $news_content;?></p>
                     </div>
                  </div>
               </div>
            </div>
            <a href="https://propflo.ai/demo"><img src="https://propflo.ai/assets/img/blog.gif"
               class="img-fluid" style="display:bloxk;margin:0 auto;"></a>
         </div>
      </div>
   </section>
   <!-- Blog details area end here -->
</main>
<style>
   @media only screen and (max-width: 600px) {
   .footer__item {
   margin: 10px 0px !important;
   }
   }
   .footer__item ul li:not(:last-child) {
   margin-bottom: 4px !important;
   }
   @media only screen and (max-width: 600px) {
   .footer__item.footer-subscribe {
   width: 100%;
   max-width: 100% !important;
   }
   #app-ico {
   gap: 20px;
   display: flex;
   flex-direction: column;
   }
   }
   #app-ico {
   gap: 20px;
   display: flex;
   }
</style>
<!-- Footer area start here -->
<footer class="footer-three-area pt-20">
   <div class="container">
      <div class="footer__wrp pb-30">
         <div class="footer__item light footer-about">
            <a class='logo mb-10' href='https://propflo.ai'>
            <img src="https://propflo.ai/assets/img/logo-white.png" alt="propflo-logo">
            </a>
            <p style="margin-top: 20px;">Build better customer relationships <br>with PropFlo
            </p>
            <a href="https://propflo.ai/demo" class="btn-propflo mt-20">Book a Demo</a>
            <div class="play-icons mt-50">
               <div id="app-ico">
                  <a href="https://play.google.com/store/apps/details?id=com.propflo&amp;hl=en_US"
                     target="_blank" class="w-inline-block">
                  <img src="https://www.propflo.ai/assets/img/64a7a793f569884e3e670abf_google.png"
                     loading="lazy" width="160" alt="" class="image-5">
                  </a>
                  <a href="https://apps.apple.com/in/app/propflo-sales-app/id6446088841" target="_blank"
                     class="w-inline-block">
                  <img src="https://www.propflo.ai/assets/img/64a7a76d5035f0a7345bf874_apple.png"
                     loading="lazy" width="160" alt="" class="image-4">
                  </a>
               </div>
            </div>
         </div>
         <div class="footer__item light">
            <h3>Product</h3>
            <ul>
               <li>
                  <a href='https://propflo.ai'>Home</a>
               </li>
               <li>
                  <a href="https://propflo.ai/real-estate-crm">Real Estate CRM</a>
               </li>
               <li>
                  <a href='https://propflo.ai/features/mobile-app'>Mobile CRM</a>
               </li>
               <li>
                  <a href='#'>Sales CRM</a>
               </li>
               <li>
                  <a href='https://propflo.ai/demo'>Demo</a>
               </li>
               <li>
                  <a href='https://propflo.ai/blog'>Blogs</a>
               </li>
            </ul>
         </div>
         <div class="footer__item light footer-subscribe">
            <h3>Address</h3>
            <p>PropFlo, Plot No.102, <br>Rd Number 44, Kavuri Hills <br> Phase 2,Madhapur, Hyderabad,Telangana
               500081
            </p>
         </div>
         <div class="footer__item light">
            <h3>Support</h3>
            <ul>
               <li>
                  <a href="tel:+91 9154367759">+91 9154367759
                  </a>
               </li>
               <li>
                  <a href="mailto:support@propflo.ai">support@propflo.ai
                  </a>
               </li>
            </ul>
         </div>
         <div class="footer__item light footer-subscribe">
            <h3>Get in Touch</h3>
            <ul>
               <li>
                  <a href='tel:+91 80086 56081'>+91 80086 56081</a>
               </li>
               <li>
                  <a href='mailto:hello@propflo.ai'>hello@propflo.ai</a>
               </li>
            </ul>
            <div class="soci-icons mt-20">
               <h5 class="col-white">Connect with Us</h5>
               <div class="uui-footer01_bottom-wrapper-copy" style="gap: 10px;display: flex;">
                  <a href="https://www.linkedin.com/showcase/propflo-crm/" target="_blank"
                     class="w-inline-block">
                  <img src="https://www.propflo.ai/assets/img/647844a8563a188b47a87e7f_702300.png"
                     loading="lazy" width="30" height="30" alt="Facebook"
                     sizes="(max-width: 479px) 13vw, 30px" class="image-2">
                  </a>
                  <a href="https://www.instagram.com/propflo_crm/" target="_blank" class="w-inline-block">
                  <img src="https://www.propflo.ai/assets/img/647844a976513b2cd5762edb_4138124.png"
                     loading="lazy" width="30" height="30" alt="Facebook"
                     sizes="(max-width: 479px) 13vw, 30px" class="image">
                  </a>
                  <a href="https://www.facebook.com/profile.php?id=100090756360884" target="_blank"
                     class="w-inline-block">
                  <img src="https://www.propflo.ai/assets/img/647844a876513b2cd5762e85_Facebook_f_logo_(2021).svg.png"
                     loading="lazy" width="27" height="27" alt="Facebook" class="image-3">
                  </a>
                  <a href="https://x.com/PropFlo_CRM" target="_blank" class="w-inline-block">
                  <img src="https://www.propflo.ai/assets/img/xlogo.png" loading="lazy" width="30"
                     height="30" style="border-radius: 50px;" alt="Facebook" class="image-3">
                  </a>
               </div>
            </div>
         </div>
      </div>
      <div class="footer__copyright light" style="display: flex;justify-content: space-between;">
         <p> &copy; Copyright 2025 <a href="#">PropFlo</a>. </p>
         <div style="display: flex;gap: 30px;">
            <p style="font-size:16px"> <a href="https://propflo.ai/legal/terms-and-conditions"
               target="_blank">Terms &
               Conditions</a>
            </p>
            <p style="font-size:16px"> <a href="https://propflo.ai/legal/privacy-policy" target="_blank">Privacy
               Policy</a>
            </p>
         </div>
      </div>
   </div>
</footer>
<!-- Footer area end here -->
<!-- Footer area end here -->
<div class="mblcta">
   <a href="https://propflo.ai/demo">
      <div class="floating-cta">
         <span class="cta-button">Book a Demo</span>
      </div>
   </a>
</div>
<style>
   .bottom_fixed_item {
   position: fixed;
   bottom: 20px;
   right: 13px;
   z-index: 9999;
   }
   #wa-widget-send-button {
   display: none;
   }
   @media only screen and (max-width: 768px) {
   .bottom_fixed_item {
   position: fixed;
   bottom: 65px;
   right: 5px;
   z-index: 9999;
   }
   }
</style>
<style>
   #back-top {
   display: block !important;
   bottom: 20px;
   }
   .btn-backToTop {
   background-color: #08cf65 !important;
   }
   @media only screen and (max-width: 600px) {
   #back-top {
   display: block !important;
   bottom: 70px !important;
   }
   }
</style>
<!-- Back to top btn area start here -->
<button id="back-top" class="btn-backToTop">
<i class="fa-solid fa-chevron-up"></i>
</button>
<!-- Back to top btn area end here -->
<!-- Jquery 3.7.0 Min Js -->
<script src="https://propflo.ai/assets/js/jquery-3.7.1.min.js"></script>
<!-- Bootstrap min Js -->
<script src="https://propflo.ai/assets/js/bootstrap.min.js"></script>
<!-- Mean menu Js -->
<script src="https://propflo.ai/assets/js/meanmenu.js"></script>
<!-- Swiper bundle min Js -->
<script src="https://propflo.ai/assets/js/swiper-bundle.min.js"></script>
<!-- Counterup min Js -->
<script src="https://propflo.ai/assets/js/jquery.counterup.min.js"></script>
<!-- Parallax Js -->
<script src="https://propflo.ai/assets/js/parallax.js"></script>
<!-- Wow min Js -->
<script src="https://propflo.ai/assets/js/wow.min.js"></script>
<!-- Magnific popup min Js -->
<script src="https://propflo.ai/assets/js/magnific-popup.min.js"></script>
<!-- Nice select min Js -->
<script src="https://propflo.ai/assets/js/nice-select.min.js"></script>
<!-- Isotope pkgd min Js -->
<script src="https://propflo.ai/assets/js/isotope.pkgd.min.js"></script>
<!-- Waypoints Js -->
<script src="https://propflo.ai/assets/js/jquery.waypoints.js"></script>
<!-- Splitting Js -->
<script src="https://propflo.ai/assets/js/splitting.js"></script>
<!-- Gsap -->
<script src="https://propflo.ai/assets/js/gsap/gsap.min.js"></script>
<script src="https://propflo.ai/assets/js/gsap/ScrollTrigger.min.js"></script>
<script src="https://propflo.ai/assets/js/gsap/ScrollSmoother.min.js"></script>
<script src="https://propflo.ai/assets/js/gsap/ScrollSmoother.min.js"></script>
<script src="https://propflo.ai/assets/js/custom-gsap.js"></script>
<!-- Script Js -->
<script src="https://propflo.ai/assets/js/script.js"></script>
</body>
</html>
<?php
   } else {
       // Handle the case when the article is not found
       echo "Article not found";
   }
   ?>