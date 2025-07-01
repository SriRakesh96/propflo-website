<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<head>
   <title>Real Estate CRM | AI-Driven CRM For Real Estate Developers and Agents 2025
   </title>
   <meta
      content="Explore What is Real Estate CRM and its Features; What is importance for realtors, and why PropFlo is the smart CRM solution?"
      name="description" />
   <?php
      include('head.php');
       
       ?>
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <style>
/* Add border to all accordion items */
.accordion-item {
    margin: 12px 0 !important;  /* Keep your margin */
    border: 1px solid #dee2e6 !important;  /* Add border around each item */
}

/* Optional: Add rounded corners to the entire accordion */
.accordion {
    border-radius: 0.375rem !important;  /* Rounded corners for the entire accordion */
    overflow: hidden !important;
}
       
      .accordion-body ul li{
      color:#151314b2;
      list-style-type:disc;
      }
      .accordion-body ul{
      padding-inline-start: 25px !important;
      padding-left: 10px;
      }
      #cta h2 {
      color: #fff !important;
      }
      .start-now-area {
      position: relative;
      z-index: 1;
      background: linear-gradient(to bottom, #08cf65, #1B4650) !important;
      margin-top: 0px;
      }
      .btn-white {
      padding: 12px 24px;
      background: #1B4650;
      color: var(--white);
      border-radius: 12px;
      }
      .btn-white:hover {
      background: #fff !important;
      color: #000 !important;
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
      @media only screen and (max-width: 600px) {
      .fw-600 {
      width: 100%;
      margin: 0 auto;
      }
      }
      h2,
      h3 {
      color: #2B3857 !important;
      }
      #feature-banner {
      padding-top: 220px;
      }
      @media only screen and (max-width: 600px) {
      #feature-banner {
      padding-top: 145px;
      }
      .btn-propflo2 {
      border: 1px solid #08CF65;
      color: var(--white);
      border-radius: 12px;
      padding: 13px 13px;
      }
      }
      .btn-propflo2 {
      border: 1px solid #08CF65;
      color: var(--white);
      border-radius: 12px;
      padding: 12px 24px;
      }
      .btn-nrml {
      border: 1px solid #D1D5DB;
      padding: 12px 24px;
      border-radius: 12px;
      color: #6B7280;
      margin-right: 15px;
      }
      .banner-three-area .banner-tag {
      text-align: center;
      border: 1px solid #08CF65;
      padding: 5px 5px;
      color: #fff;
      margin-bottom: 15px;
      width: 30%;
      display: block;
      margin: 20px auto;
      border-radius: 50px;
      }
      @media only screen and (max-width: 768px) {
      .banner-three-area .banner-tag {
      width: 80% !important;
      }
      }
      @media only screen and (max-width: 900px) {
      .ban-img2 {
      margin-top: 10px !important;
      }
      }
      .custom-section {
      border-bottom: 2px solid #007bff;
      padding-bottom: 10px;
      margin-bottom: 20px;
      }
      .custom-section-item {
      font-weight: 400;
      color: #4A4A4A;
      text-decoration: none;
      }
      .custom-section-item.active {
      font-weight: bold;
      text-decoration: underline;
      }
      .lm-menu {
      /*padding-top: 140px;*/
      }
      #lmen-item {
      width: 60% !important;
      }
      .banner-three-area {
      padding-top: 180px !important;
      }
      .banner-three__content h1 {
      font-size: 45px !important;
      }
      .banner-three__content p {}
      .big-head {
      line-height: 60px !important;
      }
      @media only screen and (max-width: 600px) {
      .banner-three__content h1 {
      font-size: 45px !important;
      }
      .lm-menu {
      padding-top: 90px;
      }
      #lmen-item {
      width: 100% !important;
      }
      .banner-three-area {
      padding-top: 160px !important;
      }
      .big-head {
      line-height: 40px !important;
      }
      }
      .menu-sol a {
      margin: 0px 15px;
      }
      .scroll-section {
      height: 120vh !important;
      margin-top: 10px !important;
      background: #fff;
      }
      .scroll-item {
      height: 125vh !important;
      }
      .scroll-row {
      display: flex;
      align-items: center;
      }
      .feature-list {
      margin-top: 5px !important;
      }
      .feature-list li {
      margin: 10px 0px;
      line-height: 30px;
      color: #151314b2;
      }
      .feature-list li::before {
      width: 20px !important;
      height: 20px !important;
      margin-top: 5px !important;
      }
      .custom-card {
      height: 250px;
      background-color: #F2F5F8;
      border: none;
      padding: 20px 30px;
      border-radius: 10px;
      box-shadow: 0 6px 16px rgba(0, 0, 0, 41%);
      }
      .custom-card img {
      max-width: 100px;
      margin-bottom: 15px;
      }
      .custom-card h1 {
      color: #2B3857 !important;
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
      .scrol-sec {
      background: #F2F5F8;
      padding: 50px;
      }
      @media only screen and (max-width: 600px) {
      .scrol-sec {
      padding: 0px !important;
      }
      .scroll-item {
      padding: 5px !important;
      }
      }
      .footer__item h3 {
      color: #fff !important;
      }
      @media (min-width: 2000px) {
      .scroll-section {
      height: 70vh !important;
      }
      .scroll-item {
      height: 70vh !important;
      }
      }
      .custom-menu a:hover {
      text-decoration: underline;
      transform: scale(1.1);
      /* Slight zoom-in effect */
      color: #08CF65;
      }
      .img-fluid2 {
      width: 100%;
      }
      .custom-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
      animation: hover-wobble 1s ease-in-out;
      }
      .banner-three__content {
      max-width: 100% !important;
      }
      .crm {
      background-color: #EBF5F3;
      padding: 50px 30px;
      }
      @media only screen and (max-width: 768px) {
      .crm {
      padding: 5px !important;
      }
      }
      @media only screen and (max-width: 600px) {
      .lm-menu {
      /* padding: 100px 20px 20px 20px; */
      display: block !important;
      }
      }
      .lm-menu {
      position: fixed;
      top: 120px;
      left: 0;
      width: 100%;
      background-color: #fff;
      z-index: 998;
      box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
      transition: padding 0.3s ease;
      padding: 160px 0 0 0;
      }
      .custom-menu {
      display: flex;
      gap: 30px;
      white-space: nowrap;
      overflow-x: auto;
      scrollbar-width: none;
      flex-grow: 1;
      position: relative;
      justify-content: center;
      }
      .custom-arrow-right {
      display: none;
      cursor: pointer;
      padding-left: 10px;
      font-size: 30px;
      color: #333;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      background: linear-gradient(to right, transparent, #fff);
      }
      @media only screen and (max-width: 768px) {
      .lm-menu {
      /*padding: 100px 20px 20px 20px; */
      display: block !important;
      }
      }
      .custom-menu {
      display: flex;
      gap: 30px;
      white-space: nowrap;
      overflow-x: auto;
      scrollbar-width: none;
      flex-grow: 1;
      position: relative;
      justify-content: center;
      }
      .custom-menu::-webkit-scrollbar {
      display: none;
      /* Hide scrollbar in Chrome, Safari */
      }
      .custom-menu a {
      text-decoration: none;
      color: #333;
      font-size: 16px;
      white-space: nowrap;
      padding: 5px 0;
      }
      /* Styling for right arrow */
      .custom-arrow-right {
      display: none;
      /* Hidden by default */
      cursor: pointer;
      padding-left: 10px;
      font-size: 30px;
      color: #333;
      position: absolute;
      right: 0;
      top: 50%;
      transform: translateY(-50%);
      /* Center vertically within the menu */
      background: linear-gradient(to right, transparent, #fff);
      /* Fading effect */
      }
      /* Show the arrow in mobile view */
      @media (max-width: 768px) {
      .custom-arrow-right {
      background: #fff;
      margin-top: 3px;
      margin-right: 5px;
      display: block;
      z-index: 9999;
      }
      .custom-menu {
      justify-content: flex-start;
      }
      }
      #mob-fea {
      display: none;
      }
      #cal2 {
      width: 50%;
      }
      @media only screen and (max-width: 600px) {
      #cal2 {
      width: 80%;
      }
      #mob-fea {
      display: block !important;
      }
      #offer-section {
      display: none !important;
      }
      .cont-ofer h2 {
      font-size: 30px;
      font-weight: 700;
      line-height: 40px;
      }
      #choose {
      padding: 5px !important;
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
         <!-- Banner area start here -->
         <!--    <section class="banner-three-area paralax__animation"  id="feature-banner" style="background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="container baner2" >
               <div class="banner-three__content text-center">
                  <a href="#" class="feature-link">
                     <span class="feature-arrow-icon">&larr;</span> 
                     All features
                  </a>
                  <h1 style="color:#2B3857;" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                     Robust lead management solutions
                  </h1>
                  <p style="color:#6B748A" class="wow fadeInUp mb-30" data-wow-delay="800ms" data-wow-duration="2000ms">Organize, engage, and convert leads with a workflow that suits your business. Then, take it a step further with AI and automation—all built with your leads in mind
                  </p>
                  <div class="input-feild wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                     <div class="solutions-btn mt-30 mb-30">  
                        <a href="" class="btn-nrml">Contact Support</a>
                        <a href="" class="btn-propflo">Book a Demo</a>
                     </div>
                  </div>
               </div>
            </div>
            </section>
            
            <div class="solutions-bannerimg pb-40">
            <img src="https://test.propflo.ai/img/lm-banner.png" class="img-fluid wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms"">
            </div> -->
         <!-- Banner area start here -->
         <section class="banner-three-area paralax__animation"
            style="background:#F2F5F8; background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-md-12 text-center text-md-left">
                     <p class="banner-tag wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms"
                        style="text-transform: uppercase;color:#2B3857">Developers</p>
                     <div class="banner-three__content text-center">
                        <h1 style="color:#2B3857;" class="wow fadeInUp" data-wow-delay="400ms"
                           data-wow-duration="1500ms">
                           Real Estate CRM with AI to Accelerate Sales and Bookings.
                        </h1>
                        <p style="color:#2B3857;" class="wow fadeInUp mb-30" data-wow-delay="800ms"
                           data-wow-duration="2000ms">
                           PropFlo CRM comes with real estate-specific workflows and processes to manage
                           relationships with current and potential customers across the customer lifecycle and
                           drive more revenue for real estate developers, agents and channel partner firms.
                        </p>
                        <div class="input-field wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                           <div class="solutions-btn mt-30 mb-30">
                              <a href="contact" class="btn-nrml" style="color:#2B3857">Contact Us</a>
                              <a href="demo" class="btn-propflo">Book a Demo</a>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <!-- Banner area end here -->
         <?php
            include('clients.php');
             
             ?>
         <div class="container my-5">
            <div class="row align-items-center">
               <!-- Text Section -->
               <div class="col-md-7">
                  <div class="section-header mt-20 mb-20 ">
                     <h2 class="fw-600 wow splt-txt" data-splitting> What is Real Estate CRM?</h2>
                  </div>
                  <p class="mt-3" style="text-align:justify">
                     Real Estate CRM software is a system that helps real estate developers, channel partners and
                     agents manage the entire customer lifecycle from enquiry to handover and caters to multiple
                     requirements of real estate firms. From capturing multi-source leads, handling site visits
                     and deals, and managing prospects and existing customer interactions, improve workflows and
                     processes to achieve the desired outcome. The real estate CRM takes care of the end-to-end
                     process for the real estate professionals.
                  </p>
                  <div class="section-header mt-20 mb-20 ">
                     <h2 class="fw-600 wow splt-txt" data-splitting>Why is PropFlo Real Estate CRM the preferred
                        choice?
                     </h2>
                  </div>
                  <p style="text-align:justify">
                     PropFlo is an AI-powered real estate CRM software that was built exclusively for real estate
                     developers, agents and channel partners to build better customer relationships and grow your
                     business efficiently. From initial enquiry to handover, the PropFlo CRM solution helps
                     manage the customer lifecycle and streamline relationships and day-to-day operations with
                     its cutting-edge AI technology.
                  </p>
               </div>
               <!-- Mockup Image Section -->
               <div class="col-md-5 text-center mt-20">
                  <img src="assets/img/mobile-app/mobile-crm2.png" width="300px" alt="Mobile CRM Mockup"
                     class="img-fluid mockup2">
               </div>
            </div>
         </div>
         <!-- Banner area end here -->
         <style>
            .img-fluid2 {
            width: 100%;
            }
            .offer-icon {
            margin-right: 10px;
            }
            /* Active tab SVG color */
            .feature-tab.active svg path {
            fill: #fff;
            }
            /* Active tab SVG color */
            .feature-tab:hover svg path {
            fill: #fff;
            }
            .cont-ofer {
            padding: 0px 50px 0px 50px;
            }
            @media only screen and (max-width: 600px) {
            .cont-ofer {
            padding: 20px 20px 0px 20px;
            }
            }
            .feature-tab {
            font-size: 16px;
            font-weight: 600;
            }
         </style>
         <div id="offer-section" class="container text-center mt-5  wow animate__fadeIn">
            <h2 class="section-title">What we offer for Real Estate?</h2>
            <!-- Row 1: 3 Tabs -->
            <div class="row mb-3">
               <div class="col-md-3 mb-3">
                  <div class="feature-tab" id="tab-marketingAutomation" onclick="showFeature('marketingAutomation')">
                     <span class="offer-icon">
                        <svg width="19" height="19" viewBox="0 0 19 19" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M4.20495 2.79937C4.69958 2.62298 5.23607 2.60077 5.74359 2.73565C6.25111 2.87053 6.70578 3.15617 7.04758 3.55485C7.38937 3.95353 7.60221 4.4465 7.65799 4.96866C7.71377 5.49083 7.60987 6.01763 7.36 6.47952L15.3025 14.4228L14.2538 15.4715L6.31054 7.52823C5.84854 7.77736 5.3219 7.88066 4.80001 7.82453C4.27813 7.76839 3.7855 7.55545 3.38705 7.21377C2.98859 6.87209 2.70301 6.4177 2.56794 5.91049C2.43287 5.40327 2.45464 4.86704 2.63039 4.37244L4.2895 6.03155C4.49932 6.2342 4.78034 6.34633 5.07203 6.3438C5.36373 6.34126 5.64276 6.22426 5.84902 6.018C6.05529 5.81173 6.17229 5.5327 6.17483 5.24101C6.17736 4.94931 6.06523 4.66829 5.86258 4.45847L4.20495 2.79937ZM11.8938 4.19592L14.2538 2.88466L15.3025 3.93412L13.9912 6.29336L12.68 6.55591L11.1076 8.12898L10.0582 7.08027L11.6313 5.50719L11.8938 4.19592ZM6.91129 10.2272L7.96075 11.2759L4.02695 15.2089C3.89323 15.343 3.71327 15.4209 3.52397 15.4266C3.33468 15.4322 3.15039 15.3653 3.00888 15.2394C2.86737 15.1136 2.77937 14.9383 2.76291 14.7497C2.74646 14.561 2.8028 14.3732 2.92038 14.2247L2.97823 14.1602L6.91129 10.2272Z"
                              fill="black" fill-opacity="0.7" />
                        </svg>
                     </span>
                     Marketing Automation
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <div class="feature-tab" id="tab-lead" onclick="showFeature('lead')">
                     <span class="offer-icon">
                        <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M11.25 15H6.75C6.15326 15 5.58097 15.2371 5.15901 15.659C4.73705 16.081 4.5 16.6533 4.5 17.25V18.75H6V17.25C6 17.0511 6.07902 16.8603 6.21967 16.7197C6.36032 16.579 6.55109 16.5 6.75 16.5H11.25C11.4489 16.5 11.6397 16.579 11.7803 16.7197C11.921 16.8603 12 17.0511 12 17.25V18.75H13.5V17.25C13.5 16.6533 13.2629 16.081 12.841 15.659C12.419 15.2371 11.8467 15 11.25 15ZM9 14.25C9.59334 14.25 10.1734 14.0741 10.6667 13.7444C11.1601 13.4148 11.5446 12.9462 11.7716 12.3981C11.9987 11.8499 12.0581 11.2467 11.9424 10.6647C11.8266 10.0828 11.5409 9.54824 11.1213 9.12868C10.7018 8.70912 10.1672 8.4234 9.58527 8.30765C9.00333 8.19189 8.40013 8.2513 7.85195 8.47836C7.30377 8.70543 6.83524 9.08994 6.50559 9.58329C6.17595 10.0766 6 10.6567 6 11.25C6 12.0457 6.31607 12.8087 6.87868 13.3713C7.44129 13.9339 8.20435 14.25 9 14.25ZM9 9.75C9.29667 9.75 9.58668 9.83798 9.83335 10.0028C10.08 10.1676 10.2723 10.4019 10.3858 10.676C10.4994 10.9501 10.5291 11.2517 10.4712 11.5426C10.4133 11.8336 10.2704 12.1009 10.0607 12.3107C9.85088 12.5204 9.58361 12.6633 9.29264 12.7212C9.00166 12.7791 8.70006 12.7494 8.42598 12.6358C8.15189 12.5223 7.91762 12.33 7.7528 12.0834C7.58797 11.8367 7.5 11.5467 7.5 11.25C7.5 10.8522 7.65804 10.4706 7.93934 10.1893C8.22064 9.90804 8.60218 9.75 9 9.75Z"
                              fill="black" />
                           <path
                              d="M21 14.25V21H3V6H12V4.5H3C2.60218 4.5 2.22064 4.65804 1.93934 4.93934C1.65804 5.22064 1.5 5.60218 1.5 6V21C1.5 21.3978 1.65804 21.7794 1.93934 22.0607C2.22064 22.342 2.60218 22.5 3 22.5H21C21.3978 22.5 21.7794 22.342 22.0607 22.0607C22.342 21.7794 22.5 21.3978 22.5 21V14.25H21Z"
                              fill="black" />
                           <path
                              d="M15 14.25H19.5V15.75H15V14.25ZM16.5 17.25H19.5V18.75H16.5V17.25ZM24 7.5V6H22.4242C22.327 5.53069 22.1406 5.08439 21.8752 4.68525L22.9928 3.56775L21.9323 2.50725L20.8148 3.62475C20.4156 3.35941 19.9693 3.17305 19.5 3.07575V1.5H18V3.07575C17.5307 3.17305 17.0844 3.35941 16.6852 3.62475L15.5677 2.50725L14.5073 3.56775L15.6248 4.68525C15.3594 5.08439 15.173 5.53069 15.0757 6H13.5V7.5H15.0757C15.173 7.96931 15.3594 8.41561 15.6248 8.81475L14.5073 9.93225L15.5677 10.9928L16.6852 9.87525C17.0844 10.1406 17.5307 10.327 18 10.4242V12H19.5V10.4242C19.9693 10.327 20.4156 10.1406 20.8148 9.87525L21.9323 10.9928L22.9928 9.93225L21.8752 8.81475C22.1406 8.41561 22.327 7.96931 22.4242 7.5H24ZM18.75 9C18.305 9 17.87 8.86804 17.5 8.62081C17.13 8.37357 16.8416 8.02217 16.6713 7.61104C16.501 7.1999 16.4564 6.7475 16.5432 6.31105C16.63 5.87459 16.8443 5.47368 17.159 5.15901C17.4737 4.84434 17.8746 4.63005 18.311 4.54323C18.7475 4.45642 19.1999 4.50097 19.611 4.67127C20.0222 4.84157 20.3736 5.12996 20.6208 5.49997C20.868 5.86998 21 6.30499 21 6.75C20.9994 7.34655 20.7622 7.9185 20.3403 8.34033C19.9185 8.76216 19.3466 8.9994 18.75 9Z"
                              fill="black" />
                        </svg>
                     </span>
                     Lead Management
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <div class="feature-tab" id="tab-artificialIntelligence" onclick="showFeature('artificialIntelligence')">
                     <span class="offer-icon">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14" fill="none">
                           <path
                              d="M2.38958 2.08294V12.4663H14.2563V2.08294H2.38958ZM1.64792 0.599609H14.9979C15.1946 0.599609 15.3833 0.677749 15.5224 0.816838C15.6614 0.955928 15.7396 1.14457 15.7396 1.34128V13.2079C15.7396 13.4046 15.6614 13.5933 15.5224 13.7324C15.3833 13.8715 15.1946 13.9496 14.9979 13.9496H1.64792C1.45121 13.9496 1.26257 13.8715 1.12348 13.7324C0.98439 13.5933 0.90625 13.4046 0.90625 13.2079V1.34128C0.90625 1.14457 0.98439 0.955928 1.12348 0.816838C1.26257 0.677749 1.45121 0.599609 1.64792 0.599609ZM10.3944 5.63775L9.06458 4.30794H12.7729V8.01628L11.4431 6.68647L8.57731 9.55227L7.00423 7.97919L4.90606 10.0766L3.85734 9.02791L7.00423 5.88102L8.57731 7.45409L10.3944 5.63775Z"
                              fill="#000000" />
                        </svg>
                     </span>
                     AI Features
                  </div>
               </div>
               <div class="col-md-3 mb-3">
                  <div class="feature-tab" id="tab-salesAutomation" onclick="showFeature('salesAutomation')">
                     <span class="offer-icon">
                        <svg width="17" height="17" viewBox="0 0 15 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M7.46797 0.668213V3.63488H0.792969V0.668213H7.46797ZM10.4346 11.0515V14.0182H0.792969V11.0515H10.4346ZM14.8846 5.85988V8.82655H0.792969V5.85988H14.8846Z"
                              fill="black" fill-opacity="0.7" />
                        </svg>
                     </span>
                     Sales Management
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <div class="feature-tab" id="tab-omniChannel" onclick="showFeature('omniChannel')">
                     <span class="offer-icon">
                        <svg width="17" height="17" viewBox="0 0 17 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M11.0591 9.08607L16.2241 12.0987L14.0191 12.7291L15.5951 15.4592L14.3106 16.2009L12.7345 13.4715L11.0858 15.0661L11.0591 9.08607ZM9.57578 3.8944H11.0591V5.37773H14.7674C14.9641 5.37773 15.1528 5.45587 15.2919 5.59496C15.431 5.73405 15.5091 5.9227 15.5091 6.1194V9.08607H14.0258V6.86107H6.60911V14.2777H9.57578V15.7611H5.86745C5.67075 15.7611 5.4821 15.6829 5.34301 15.5438C5.20392 15.4047 5.12578 15.2161 5.12578 15.0194V11.3111H3.64245V9.82773H5.12578V6.1194C5.12578 5.9227 5.20392 5.73405 5.34301 5.59496C5.4821 5.45587 5.67075 5.37773 5.86745 5.37773H9.57578V3.8944ZM2.15911 9.82773V11.3111H0.675781V9.82773H2.15911ZM2.15911 6.86107V8.3444H0.675781V6.86107H2.15911ZM2.15911 3.8944V5.37773H0.675781V3.8944H2.15911ZM2.15911 0.927734V2.41107H0.675781V0.927734H2.15911ZM5.12578 0.927734V2.41107H3.64245V0.927734H5.12578ZM8.09245 0.927734V2.41107H6.60911V0.927734H8.09245ZM11.0591 0.927734V2.41107H9.57578V0.927734H11.0591Z"
                              fill="black" fill-opacity="0.7" />
                        </svg>
                     </span>
                     Omni Channel Communication
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <div class="feature-tab active" id="tab-inventory" onclick="showFeature('inventory')">
                     <span class="offer-icon">
                        <svg width="17" height="17" viewBox="0 0 17 15" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path
                              d="M15.1615 11.7932V14.0182H13.6781V11.7932H12.1948V10.3099H16.6448V11.7932H15.1615ZM3.29479 11.7932V14.0182H1.81146V11.7932H0.328125V10.3099H4.77813V11.7932H3.29479ZM7.74479 2.89321V0.668213H9.22813V2.89321H10.7115V4.37655H6.26146V2.89321H7.74479ZM7.74479 5.85988H9.22813V14.0182H7.74479V5.85988ZM1.81146 8.82655V0.668213H3.29479V8.82655H1.81146ZM13.6781 8.82655V0.668213H15.1615V8.82655H13.6781Z"
                              fill="black" fill-opacity="0.7" />
                        </svg>
                     </span>
                     Inventory Management
                  </div>
               </div>
               <div class="col-md-4 mb-3">
                  <div class="feature-tab" id="tab-postsales" onclick="showFeature('postsales')">
                     <span class="offer-icon">
                        <svg width="18" height="18" viewBox="0 0 18 18" fill="none" xmlns="http://www.w3.org/2000/svg">
                           <path fill-rule="evenodd" clip-rule="evenodd"
                              d="M8.99563 10H9.01562C11.7771 10 14.0156 7.7615 14.0156 5C14.0156 2.2385 11.7771 0 9.01562 0H8.97563C6.23263 0.0215 4.01562 2.252 4.01562 5C4.01562 7.748 6.23263 9.9785 8.97563 10H8.99563ZM12.9846 5.5H11.9846C11.964 5.84567 11.9231 6.179 11.8621 6.5H12.7251C12.8526 6.185 12.9411 5.8495 12.9851 5.5M12.1386 7.5H11.5986C11.4961 7.795 11.3761 8.0715 11.2406 8.325C11.5802 8.09747 11.8834 7.81924 12.1386 7.5ZM10.8421 6.5C10.9106 6.1865 10.9591 5.8515 10.9826 5.5H9.51562V6.5H10.8421ZM9.51562 7.5H10.5271C10.4513 7.6795 10.3633 7.85358 10.2636 8.021C10.0136 8.4365 9.75513 8.6935 9.51562 8.839V7.5ZM8.51562 6.5V5.5H7.01663C7.04013 5.8515 7.08863 6.1865 7.15713 6.5H8.51562ZM7.47213 7.5H8.51562V8.858C8.26762 8.716 7.99663 8.4555 7.73563 8.021C7.63595 7.85358 7.54791 7.6795 7.47213 7.5ZM6.13713 6.5C6.07612 6.179 6.03529 5.84567 6.01463 5.5H5.04663C5.09013 5.8495 5.17863 6.185 5.30663 6.5H6.13713ZM5.89313 7.5H6.40112C6.49863 7.782 6.61313 8.047 6.74113 8.2905C6.42157 8.06958 6.13591 7.80328 5.89313 7.5ZM11.9846 4.5C11.9648 4.16442 11.9239 3.83043 11.8621 3.5H12.7251C12.8526 3.815 12.9411 4.1505 12.9851 4.5H11.9846ZM12.1381 2.5H11.5981C11.5005 2.21608 11.3808 1.94023 11.2401 1.675C11.5799 1.90249 11.8827 2.18072 12.1381 2.5ZM9.51562 2.5H10.5271C10.4513 2.3205 10.3633 2.14642 10.2636 1.979C10.0136 1.563 9.75513 1.3065 9.51562 1.161V2.5ZM10.8421 3.5H9.51562V4.5H10.9826C10.9599 4.16372 10.913 3.82952 10.8421 3.5ZM8.51562 1.142V2.5H7.47213C7.55279 2.311 7.64063 2.13733 7.73563 1.979C7.99613 1.5445 8.26762 1.284 8.51562 1.142ZM8.51562 3.5H7.15713C7.08628 3.82952 7.03932 4.16372 7.01663 4.5H8.51562V3.5ZM6.74063 1.7095C6.60787 1.96422 6.49423 2.22844 6.40063 2.5H5.89313C6.13591 2.19672 6.42107 1.93042 6.74063 1.7095ZM6.13762 3.5H5.30663C5.17709 3.82069 5.08969 4.15683 5.04663 4.5H6.01513C6.03579 4.15433 6.07662 3.821 6.13762 3.5Z"
                              fill="black" />
                           <path
                              d="M2.0545 13.3106C2.338 13.6116 2.6195 13.9106 2.8845 14.2906V15.0001H6.601V14.2906C6.5345 13.7386 6.4175 12.7441 6.407 12.4676C6.393 12.0786 5.871 11.3696 5.871 11.3696L4.2685 9.34959C4.2685 9.34959 3.815 8.87059 3.5555 8.33959C3.2955 7.80809 2.7435 8.47659 2.6705 8.95459C2.5965 9.43259 2.7365 9.68459 2.7365 9.68459L3.6515 11.5036C3.6515 11.5036 2.5905 10.0501 2.261 9.46609C2.094 9.17009 2.0475 8.54309 1.995 7.84259C1.9445 7.16009 1.8885 6.40759 1.711 5.82259C1.351 4.63759 0.309999 4.93409 0.129499 5.46409C-0.0505009 5.99359 -0.0100008 9.49309 0.0554992 10.0766C0.106999 10.5336 0.382499 10.9806 0.692999 11.4846C0.778999 11.6246 0.867999 11.7686 0.955499 11.9181C1.3035 12.5141 1.6805 12.9146 2.0545 13.3106ZM15.1165 14.2906C15.3815 13.9106 15.663 13.6116 15.9465 13.3106C16.3205 12.9146 16.6975 12.5141 17.046 11.9181C17.133 11.7681 17.222 11.6246 17.308 11.4851C17.6185 10.9811 17.894 10.5336 17.9455 10.0766C18.011 9.49309 18.052 5.99359 17.8715 5.46409C17.691 4.93409 16.65 4.63759 16.29 5.82309C16.113 6.40809 16.057 7.16009 16.006 7.84259C15.9535 8.54309 15.907 9.17009 15.74 9.46609C15.4105 10.0506 14.349 11.5036 14.349 11.5036L15.2645 9.68459C15.2645 9.68459 15.4045 9.43259 15.331 8.95459C15.2575 8.47659 14.7055 7.80809 14.446 8.33959C14.186 8.87059 13.7325 9.34959 13.7325 9.34959L12.13 11.3696C12.13 11.3696 11.608 12.0786 11.594 12.4676C11.584 12.7441 11.4665 13.7386 11.4 14.2906V15.0001H15.1165V14.2906ZM10 17.5001C10 17.6327 10.0527 17.7599 10.1464 17.8536C10.2402 17.9474 10.3674 18.0001 10.5 18.0001H14.5C14.6326 18.0001 14.7598 17.9474 14.8536 17.8536C14.9473 17.7599 15 17.6327 15 17.5001V16.5001C15 16.3675 14.9473 16.2403 14.8536 16.1465C14.7598 16.0528 14.6326 16.0001 14.5 16.0001H10.5C10.3674 16.0001 10.2402 16.0528 10.1464 16.1465C10.0527 16.2403 10 16.3675 10 16.5001V17.5001ZM8.001 17.5001C8.001 17.6327 7.94832 17.7599 7.85455 17.8536C7.76078 17.9474 7.63361 18.0001 7.501 18.0001H3.501C3.36839 18.0001 3.24121 17.9474 3.14745 17.8536C3.05368 17.7599 3.001 17.6327 3.001 17.5001V16.5001C3.001 16.3675 3.05368 16.2403 3.14745 16.1465C3.24121 16.0528 3.36839 16.0001 3.501 16.0001H7.501C7.63361 16.0001 7.76078 16.0528 7.85455 16.1465C7.94832 16.2403 8.001 16.3675 8.001 16.5001V17.5001Z"
                              fill="black" />
                        </svg>
                     </span>
                     Post Sales Management
                  </div>
               </div>
            </div>
            <!-- Feature Descriptions (Hidden by Default) -->
            <div id="feature-content">
               <div id="artificialIntelligence" class="feature-description text-start">
                  <div class="row">
                     <div class="col-md-7">
                        <img src="assets/img/homepage/ai.png" alt="Artificial Intelligence" class="img-fluid2 rounded">
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="aifeaturesAccordion">
  <!-- AI Sales Assistant (opened by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ai1Heading">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ai1"
        aria-expanded="true" aria-controls="ai1">
        AI Sales Assistant
      </button>
    </h2>
    <div id="ai1" class="accordion-collapse collapse show" aria-labelledby="ai1Heading"
      data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        PropFlo’s AI-powered sales assistant engages with visitors on your website 24/7, collecting lead information and also scheduling calls or site visits based on user preferences.
      </div>
    </div>
  </div>

  <!-- AI Content Writer -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ai2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai2"
        aria-expanded="false" aria-controls="ai2">
        AI Content Writer
      </button>
    </h2>
    <div id="ai2" class="accordion-collapse collapse" aria-labelledby="ai2Heading"
      data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Support your teams with a unique and human-like content generator for customer communication via Email and WhatsApp:<br>
        - Follow-up emails<br>
        - Site visit communication<br>
        - Payment conversation<br>
        - Customer queries handling<br>
        - Prompt-based content generation
      </div>
    </div>
  </div>

  <!-- AI-Based Ad Copy Writer -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ai3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai3"
        aria-expanded="false" aria-controls="ai3">
        AI-Based Ad Copy Writer
      </button>
    </h2>
    <div id="ai3" class="accordion-collapse collapse" aria-labelledby="ai3Heading"
      data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Easily craft highly engaging ad copy that converts and makes content your competitive advantage for better customer engagement and marketing impact.
      </div>
    </div>
  </div>

  <!-- AI Data Analyst -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ai4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai4"
        aria-expanded="false" aria-controls="ai4">
        AI Data Analyst (Coming Soon)
      </button>
    </h2>
    <div id="ai4" class="accordion-collapse collapse" aria-labelledby="ai4Heading"
      data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Unlock powerful insights with our upcoming AI Data Analyst. Analyze trends, gain actionable recommendations, and make smarter decisions.
      </div>
    </div>
  </div>
</div>

                     </div>
                  </div>
               </div>
               <div id="salesAutomation" class="feature-description text-start" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <img src="assets/img/homepage/sm.png" alt="Sales Automation" class="img-fluid2 rounded"
                           style="box-shadow: 0 4px 16px rgba(0, 0, 0, 41%);">
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="salesfeaturesAccordion">
  <!-- Workflow Automation (open by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales1Heading">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#sales1"
        aria-expanded="true" aria-controls="sales1">
        Workflow Automation
      </button>
    </h2>
    <div id="sales1" class="accordion-collapse collapse show" aria-labelledby="sales1Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        What if your team can concentrate only on big wins and all the routine tasks, such as approvals, follow-ups and updates, happen automatically? This is where workflow automation converts pain points into opportunities by automating CRM workflows.
      </div>
    </div>
  </div>

  <!-- Instant Response and Automated Follow-ups -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales2"
        aria-expanded="false" aria-controls="sales2">
        Instant Response and Automated Follow-ups
      </button>
    </h2>
    <div id="sales2" class="accordion-collapse collapse" aria-labelledby="sales2Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        PropFlo makes sure that no lead is left behind. Whether through email or notifications, the system sends timely, personalized follow-ups and responses based on predefined schedules.
      </div>
    </div>
  </div>

  <!-- Pipeline Management and Customization -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales3"
        aria-expanded="false" aria-controls="sales3">
        Pipeline Management and Customization
      </button>
    </h2>
    <div id="sales3" class="accordion-collapse collapse" aria-labelledby="sales3Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        We provide flexibility with pipeline customizations for stages and nomenclature as per your business definitions and requirements to take your sales to the next level.
      </div>
    </div>
  </div>

  <!-- Site Visit Management -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales4"
        aria-expanded="false" aria-controls="sales4">
        Site Visit Management
      </button>
    </h2>
    <div id="sales4" class="accordion-collapse collapse" aria-labelledby="sales4Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        Manage all your client site visits in one place and automate the site visit scheduling updates and follow-up communication from CRM software—focus more on attending to the customers.
      </div>
    </div>
  </div>

  <!-- Cost Sheet Generation and Sharing -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales5"
        aria-expanded="false" aria-controls="sales5">
        Cost Sheet Generation and Sharing
      </button>
    </h2>
    <div id="sales5" class="accordion-collapse collapse" aria-labelledby="sales5Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        Generate custom cost sheets as per your organization's template and share them with prospective customers instantly through the CRM system.
      </div>
    </div>
  </div>

  <!-- Inventory Availability/Booking/Blocking -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales6Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales6"
        aria-expanded="false" aria-controls="sales6">
        Inventory Availability/Booking/Blocking
      </button>
    </h2>
    <div id="sales6" class="accordion-collapse collapse" aria-labelledby="sales6Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        Handle the real-time inventory and manage EOI bookings. Stay up-to-date with unit availability and manage instant bookings and blockings to avoid overlap and serve your customers better.
      </div>
    </div>
  </div>

  <!-- Sales Mobile App -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="sales7Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales7"
        aria-expanded="false" aria-controls="sales7">
        Sales Mobile App
      </button>
    </h2>
    <div id="sales7" class="accordion-collapse collapse" aria-labelledby="sales7Heading"
      data-bs-parent="#salesfeaturesAccordion">
      <div class="accordion-body">
        Equip sales teams and agents with a mobile application to stay updated with every lead activity, follow-up, and reminder. Log a call directly through the mobile app via telephony integration from anywhere in the world.
      </div>
    </div>
  </div>
</div>

                     </div>
                  </div>
               </div>
               <div id="marketingAutomation" class="feature-description text-start" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <img src="assets/img/homepage/mark.png" alt="Marketing Automation" class="img-fluid2 rounded">
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="faqAccordion">
  <!-- FAQ 1 (open by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1"
        aria-expanded="true" aria-controls="faq1">
        Automated Lead Nurturing and Drip Campaigns
      </button>
    </h2>
    <div id="faq1" class="accordion-collapse collapse show" aria-labelledby="headingOne"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Set up the Automated marketing workflow and nurture leads by sending them personalized drip marketing messages through Email and WhatsApp based on the leads' profiles. Once the lead stage is changed in the pipeline, the drip campaign automation will automatically send stage-wise marketing messages to leads.
      </div>
    </div>
  </div>

  <!-- FAQ 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2"
        aria-expanded="false" aria-controls="faq2">
        WhatsApp Marketing
      </button>
    </h2>
    <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingTwo"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        With built-in WhatsApp Automation in PropFlo, reach out to your prospective customers directly through WhatsApp and send personalized messages, limited-period offers, site visit updates, reminders, and announcements.
      </div>
    </div>
  </div>

  <!-- FAQ 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3"
        aria-expanded="false" aria-controls="faq3">
        Email Marketing
      </button>
    </h2>
    <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Send personalized and bulk messages for a specific segment of leads or email lists and track email campaigns for the below-listed metrics:<br>
        - Email open rate<br>
        - Engagement rate<br>
        - Delivered Emails<br>
        - Link clicks
      </div>
    </div>
  </div>

  <!-- FAQ 4 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4"
        aria-expanded="false" aria-controls="faq4">
        Communication Automation and Workflows
      </button>
    </h2>
    <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Real estate CRM makes client communication easier by automating Emails and WhatsApp messages. Personalize messages and set predefined communication for lead activity, site visit requests, re-engagement, brochure requests, etc.
      </div>
    </div>
  </div>

  <!-- FAQ 5 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5"
        aria-expanded="false" aria-controls="faq5">
        Marketing Campaign Analytics
      </button>
    </h2>
    <div id="faq5" class="accordion-collapse collapse" aria-labelledby="headingFive"
      data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        CRM software provides consolidated analytics reports for marketing campaigns to measure performance effectiveness, calculate ROI, and strategize for future campaigns.
      </div>
    </div>
  </div>
</div>

                     </div>
                  </div>
               </div>
               <div id="lead" class="feature-description text-start" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <img src="assets/img/lm/lm1.png" alt="Workflow Automation" class="img-fluid2 rounded">
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="leadManagementAccordion">
  <!-- Item 1 (open by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm1Heading">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#lm1"
        aria-expanded="true" aria-controls="lm1">
        Lead Capture from Multi-Channels
      </button>
    </h2>
    <div id="lm1" class="accordion-collapse collapse show" aria-labelledby="lm1Heading"
      data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Capture all leads from different platforms and channels in one place and organize them source-wise to never miss a sales opportunity.<br>
        - Websites and Web Forms<br>
        - Social Media<br>
        - Real Estate Property Portals<br>
        - Walk-in Site Visits<br>
        - Referrals and Direct Channels<br>
        - Offline Campaigns (Hoardings, Brochures, Leaflets)
      </div>
    </div>
  </div>

  <!-- Item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm2"
        aria-expanded="false" aria-controls="lm2">
        Lead Segmentation
      </button>
    </h2>
    <div id="lm2" class="accordion-collapse collapse" aria-labelledby="lm2Heading"
      data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Categorize prospective customers based on factors like property preference, location, demographics, financial status, and engagement level to personalize communication.
      </div>
    </div>
  </div>

  <!-- Item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm3"
        aria-expanded="false" aria-controls="lm3">
        Lead Scoring
      </button>
    </h2>
    <div id="lm3" class="accordion-collapse collapse" aria-labelledby="lm3Heading"
      data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        PropFlo automatically scores leads based on conversion potential, engagement, and behavior. Prioritize high-value prospects and focus your sales efforts smartly.
      </div>
    </div>
  </div>

  <!-- Item 4 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm4"
        aria-expanded="false" aria-controls="lm4">
        Lead Insights
      </button>
    </h2>
    <div id="lm4" class="accordion-collapse collapse" aria-labelledby="lm4Heading"
      data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Gain valuable behavioral and profile insights on every lead:<br>
        - Social Media Profile<br>
        - Annual Salary<br>
        - Professional Details<br>
        - Educational Details
      </div>
    </div>
  </div>

  <!-- Item 5 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm5"
        aria-expanded="false" aria-controls="lm5">
        Lead Assignment and Task Automation
      </button>
    </h2>
    <div id="lm5" class="accordion-collapse collapse" aria-labelledby="lm5Heading"
      data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Assign leads using round-robin logic and automate task creation for sales agents. PropFlo ensures no lead is missed with automatic notifications for follow-ups and reminders.
      </div>
    </div>
  </div>

  <!-- Item 6 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm6Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm6"
        aria-expanded="false" aria-controls="lm6">
        CP Lead Conflict Resolution
      </button>
    </h2>
    <div id="lm6" class="accordion-collapse collapse" aria-labelledby="lm6Heading"
      data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Automatically detect and resolve conflicts when the same lead comes from multiple channels. PropFlo ensures the same lead isn’t assigned to multiple agents, avoiding duplication and confusion.
      </div>
    </div>
  </div>
</div>


                     </div>
                  </div>
               </div>
               <div id="omniChannel" class="feature-description text-start" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <img src="assets/img/homepage/omni.png" alt="Omni Channel Communication" class="img-fluid2 rounded">
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="ecAccordion">
  <!-- Item 1 (open by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ec1Heading">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ec1"
        aria-expanded="true" aria-controls="ec1">
        Omni-Channel Communication
      </button>
    </h2>
    <div id="ec1" class="accordion-collapse collapse show" aria-labelledby="ec1Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Centralize all your customer communication channels in one CRM platform—manage calls, WhatsApp, emails, and SMS seamlessly for a consistent and effective client engagement experience.
      </div>
    </div>
  </div>

  <!-- Item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ec2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec2"
        aria-expanded="false" aria-controls="ec2">
        Call Logs and Recordings
      </button>
    </h2>
    <div id="ec2" class="accordion-collapse collapse" aria-labelledby="ec2Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Track customer communication with call logs, recent activity, and recordings to gain better insights and plan effective follow-up actions during the sales process.
      </div>
    </div>
  </div>

  <!-- Item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ec3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec3"
        aria-expanded="false" aria-controls="ec3">
        WhatsApp Communication
      </button>
    </h2>
    <div id="ec3" class="accordion-collapse collapse" aria-labelledby="ec3Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        With built-in WhatsApp for real estate, you’ll always stay connected with customers, quickly respond to their queries, and send essential post-sales updates such as:<br>
        - Payment follow-ups, reminders<br>
        - Overdue payment interest calculations<br>
        - Construction updates<br>
        - Property milestones
      </div>
    </div>
  </div>

  <!-- Item 4 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ec4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec4"
        aria-expanded="false" aria-controls="ec4">
        Email Communication
      </button>
    </h2>
    <div id="ec4" class="accordion-collapse collapse" aria-labelledby="ec4Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Communicate your offerings to prospects, send bulk emails to specific lead segments with personalized messaging, and create drip campaigns to nurture leads and build long-term relationships.
      </div>
    </div>
  </div>

  <!-- Item 5 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ec5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec5"
        aria-expanded="false" aria-controls="ec5">
        Telephony
      </button>
    </h2>
    <div id="ec5" class="accordion-collapse collapse" aria-labelledby="ec5Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Receive and log calls from the CRM software and automatically save recordings, call logs, and client details. Choose from the following supported telephony integrations:<br>
        - MCube<br>
        - Knowlarity<br>
        - Ozonetel<br>
        - Custom
      </div>
    </div>
  </div>
</div>

                     </div>
                  </div>
               </div>
               <div id="postsales" class="feature-description text-start" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <img src="assets/img/homepage/psm.png" alt="CRM Mobile App" class="img-fluid2 rounded">
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="postSalesAccordion">
  <!-- Item 1 (expanded by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps1Heading">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#ps1" aria-expanded="true" aria-controls="ps1">
        Booking Management
      </button>
    </h2>
    <div id="ps1" class="accordion-collapse collapse show" aria-labelledby="ps1Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Whether it’s a site visit or a reservation, all booking details are organized and updated in real-time, ensuring smooth coordination with clients and preventing double-booking.
      </div>
    </div>
  </div>

  <!-- Item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps2" aria-expanded="false" aria-controls="ps2">
        Payment Management
      </button>
    </h2>
    <div id="ps2" class="accordion-collapse collapse" aria-labelledby="ps2Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Manage and accept online/offline payments, maintain ledgers, and access complete payment histories. Set up automated reminders with interest calculations for overdue payments.
      </div>
    </div>
  </div>

  <!-- Item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps3" aria-expanded="false" aria-controls="ps3">
        Milestone & Collection Management
      </button>
    </h2>
    <div id="ps3" class="accordion-collapse collapse" aria-labelledby="ps3Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Track every project milestone and view collection progress across inventory levels. Schedule automated payment reminders to ensure financial goals are met.
      </div>
    </div>
  </div>

  <!-- Item 4 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps4" aria-expanded="false" aria-controls="ps4">
        Demand Note, AOS & Sale Deed
      </button>
    </h2>
    <div id="ps4" class="accordion-collapse collapse" aria-labelledby="ps4Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Create, manage, and store legal documents like Agreement of Sale (AOS), Demand Notes, and Sale Deeds within the CRM system for a seamless post-sales experience.
      </div>
    </div>
  </div>

  <!-- Item 5 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps5" aria-expanded="false" aria-controls="ps5">
        WhatsApp & Email Communication
      </button>
    </h2>
    <div id="ps5" class="accordion-collapse collapse" aria-labelledby="ps5Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Stay in touch with buyers post-booking using built-in WhatsApp and Email updates. Send reminders and updates related to:<br>
        - Payment follow-ups<br>
        - Overdue interest<br>
        - Construction milestones<br>
        - Property updates
      </div>
    </div>
  </div>

  <!-- Item 6 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps6Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps6" aria-expanded="false" aria-controls="ps6">
        Checklist and Handover
      </button>
    </h2>
    <div id="ps6" class="accordion-collapse collapse" aria-labelledby="ps6Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Set up a structured property checklist for documentation, inspection, and maintenance tasks. Ensure smooth and professional handovers to your clients.
      </div>
    </div>
  </div>

  <!-- Item 7 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="ps7Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps7" aria-expanded="false" aria-controls="ps7">
        Task Management
      </button>
    </h2>
    <div id="ps7" class="accordion-collapse collapse" aria-labelledby="ps7Heading" data-bs-parent="#postSalesAccordion">
      <div class="accordion-body">
        Manage all post-sales activities in one place. Automate repetitive tasks to save your CRM team’s time and increase efficiency.
      </div>
    </div>
  </div>
</div>

                     </div>
                  </div>
               </div>
               <div id="inventory" class="feature-description text-start" style="display: none;">
                  <div class="row">
                     <div class="col-md-7">
                        <video autoplay="" loop="" muted="" playsinline="" style="width:100%">
                           <source src="assets/img/videos/sm.mp4" type="video/mp4">
                           Your browser does not support the video tag.
                        </video>
                     </div>
                     <div class="col-md-5 cont-ofer">
                     <div class="accordion" id="handoverAccordion">
  <!-- Item 1 (expanded by default) -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="inv1Heading">
      <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#inv1" aria-expanded="true" aria-controls="inv1">
        Inventory Creation and Update
      </button>
    </h2>
    <div id="inv1" class="accordion-collapse collapse show" aria-labelledby="inv1Heading" data-bs-parent="#handoverAccordion">
      <div class="accordion-body">
        Create or bulk import a real-time inventory for each project at the tower level. Easily switch between list and grid views to manage inventory based on your preference.
      </div>
    </div>
  </div>

  <!-- Item 2 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="inv2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inv2" aria-expanded="false" aria-controls="inv2">
        Milestones Creation and Custom Parking Allocation Rules
      </button>
    </h2>
    <div id="inv2" class="accordion-collapse collapse" aria-labelledby="inv2Heading" data-bs-parent="#handoverAccordion">
      <div class="accordion-body">
        Create custom milestones and payment schedules tailored to your real estate project. Set personalized parking allocation rules and guidelines to match individual client preferences.
      </div>
    </div>
  </div>

  <!-- Item 3 -->
  <div class="accordion-item">
    <h2 class="accordion-header" id="inv3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inv3" aria-expanded="false" aria-controls="inv3">
        Checklist and Handover
      </button>
    </h2>
    <div id="inv3" class="accordion-collapse collapse" aria-labelledby="inv3Heading" data-bs-parent="#handoverAccordion">
      <div class="accordion-body">
        Set up a comprehensive Property Handover Checklist covering all essential activities such as documentation, inspection, and maintenance to ensure a smooth and complete handover process.
      </div>
    </div>
  </div>
</div>

                     </div>
                  </div>
               </div>
            </div>
         </div>
         <script>
            let currentTabIndex = 0;
            let userClicked = false; // Tracks user interaction
            let autoSwitching = false; // Flag to prevent multiple intervals
            let autoSwitchInterval; // Reference for the interval
            const tabs = [
               'marketingAutomation',
               'lead',
               'artificialIntelligence',
               'salesAutomation',
               'omniChannel',
               'inventory',
               'postsales'
            ];
            const tabIds = [
               'tab-marketingAutomation',
               'tab-lead',
               'tab-artificialIntelligence',
               'tab-salesAutomation',
               'tab-omniChannel',
               'tab-inventory',
               'tab-postsales'
            ];
            
            function showFeature(featureId) {
               // Hide all feature descriptions
               document.querySelectorAll('.feature-description').forEach(function(element) {
                  element.style.display = 'none';
               });
               // Show the selected feature description
               document.getElementById(featureId).style.display = 'block';
               // Remove active class from all tabs
               document.querySelectorAll('.feature-tab').forEach(function(tab) {
                  tab.classList.remove('active');
               });
               // Add active class to the selected tab
               const tab = document.getElementById('tab-' + featureId);
               tab.classList.add('active');
            }
            // Update the currentTabIndex and show the clicked tab, setting userClicked to true
            document.querySelectorAll('.feature-tab').forEach(function(tab, index) {
               tab.onclick = function() {
                  currentTabIndex = index;
                  userClicked = true; // Set userClicked to true
                  clearInterval(autoSwitchInterval); // Stop automatic switching
                  autoSwitching = false; // Reset autoSwitching flag
                  showFeature(tabs[currentTabIndex]);
               };
            });
            // Initialize first tab
            showFeature(tabs[currentTabIndex]);
            // Function to start the automatic tab switching
            function startAutoSwitching() {
               if (!autoSwitching) {
                  autoSwitching = true; // Prevent multiple intervals
                  autoSwitchInterval = setInterval(function() {
                     if (!userClicked) {
                        currentTabIndex = (currentTabIndex + 1) % tabs.length; // Cycle through tabs
                     }
                     showFeature(tabs[currentTabIndex]);
                     userClicked = false; // Reset userClicked for next cycle
                  }, 8000); // 8000ms = 8 seconds
               }
            }
            // Intersection Observer to detect when the section is in view
            const featureSection = document.getElementById('offer-section');
            const observer = new IntersectionObserver(
               (entries) => {
                  entries.forEach((entry) => {
                     if (entry.isIntersecting) {
                        startAutoSwitching(); // Start auto-switching when section is in view
                        observer.unobserve(featureSection); // Stop observing once detected
                     }
                  });
               }, {
                  threshold: 0.5
               }
            );
            // Observe the feature section
            observer.observe(featureSection);
         </script>
         <!--Mobile view what we offer -->

         <section class="faq-area pb-120" style="background: #EBF2F5;" id="mob-fea">
   <div class="container" style="background: #fff; padding: 50px 20px;">
      <div class="row g-4">
         <h2 class="section-title text-center">What we offer for Real Estate?</h2>
         <div class="col-lg-12 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="2000ms">
            <div class="accordion" id="accordionExample">

               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="headingOne">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                        <span class="offer-icon">
                           <svg width="19" height="19" viewBox="0 0 19 19" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M4.20495 2.79937C4.69958 2.62298 5.23607 2.60077 5.74359 2.73565C6.25111 2.87053 6.70578 3.15617 7.04758 3.55485C7.38937 3.95353 7.60221 4.4465 7.65799 4.96866C7.71377 5.49083 7.60987 6.01763 7.36 6.47952L15.3025 14.4228L14.2538 15.4715L6.31054 7.52823C5.84854 7.77736 5.3219 7.88066 4.80001 7.82453C4.27813 7.76839 3.7855 7.55545 3.38705 7.21377C2.98859 6.87209 2.70301 6.4177 2.56794 5.91049C2.43287 5.40327 2.45464 4.86704 2.63039 4.37244L4.2895 6.03155C4.49932 6.2342 4.78034 6.34633 5.07203 6.3438C5.36373 6.34126 5.64276 6.22426 5.84902 6.018C6.05529 5.81173 6.17229 5.5327 6.17483 5.24101C6.17736 4.94931 6.06523 4.66829 5.86258 4.45847L4.20495 2.79937ZM11.8938 4.19592L14.2538 2.88466L15.3025 3.93412L13.9912 6.29336L12.68 6.55591L11.1076 8.12898L10.0582 7.08027L11.6313 5.50719L11.8938 4.19592ZM6.91129 10.2272L7.96075 11.2759L4.02695 15.2089C3.89323 15.343 3.71327 15.4209 3.52397 15.4266C3.33468 15.4322 3.15039 15.3653 3.00888 15.2394C2.86737 15.1136 2.77937 14.9383 2.76291 14.7497C2.74646 14.561 2.8028 14.3732 2.92038 14.2247L2.97823 14.1602L6.91129 10.2272Z"
                                 fill="black" fill-opacity="0.7" />
                           </svg>
                        </span>
                        Marketing Automation
                     </button>
                  </h2>
                  <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/mark.png" alt="Marketing Automation"
                                 class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer">
                             
<div class="accordion" id="faqAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="headingOne">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq1" aria-expanded="false" aria-controls="faq1">
        Automated Lead Nurturing and Drip Campaigns
      </button>
    </h2>
    <div id="faq1" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Set up the Automated marketing workflow and nurture leads by sending them personalized drip marketing messages through Email and WhatsApp based on the leads' profiles. Once the lead stage is changed in the pipeline, the drip campaign automation will automatically send stage-wise marketing messages to leads.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingTwo">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2" aria-expanded="false" aria-controls="faq2">
        WhatsApp Marketing
      </button>
    </h2>
    <div id="faq2" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        With built-in WhatsApp Automation in PropFlo, reach out to your prospective customers directly through WhatsApp and send personalized messages, limited-period offers, site visit updates, reminders, and announcements.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingThree">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3" aria-expanded="false" aria-controls="faq3">
        Email Marketing
      </button>
    </h2>
    <div id="faq3" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Send personalized and bulk messages for a specific segment of leads or email lists and track email campaigns for the below-listed metrics:<br>
        - Email open rate<br>
        - Engagement rate<br>
        - Delivered Emails<br>
        - Link clicks
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFour">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4" aria-expanded="false" aria-controls="faq4">
        Communication Automation and Workflows
      </button>
    </h2>
    <div id="faq4" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        Real estate CRM makes client communication easier by automating Emails and WhatsApp messages. Personalize messages and set predefined communication for lead activity, site visit requests, re-engagement, brochure requests, etc.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="headingFive">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq5" aria-expanded="false" aria-controls="faq5">
        Marketing Campaign Analytics
      </button>
    </h2>
    <div id="faq5" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faqAccordion">
      <div class="accordion-body">
        CRM software provides consolidated analytics reports for marketing campaigns to measure performance effectiveness, calculate ROI, and strategize for future campaigns.
      </div>
    </div>
  </div>
</div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="headingfour">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsefour" aria-expanded="false" aria-controls="collapsefour">
                        <span class="offer-icon">

                           <svg width="24" height="24" viewBox="0 0 24 24" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M11.25 15H6.75C6.15326 15 5.58097 15.2371 5.15901 15.659C4.73705 16.081 4.5 16.6533 4.5 17.25V18.75H6V17.25C6 17.0511 6.07902 16.8603 6.21967 16.7197C6.36032 16.579 6.55109 16.5 6.75 16.5H11.25C11.4489 16.5 11.6397 16.579 11.7803 16.7197C11.921 16.8603 12 17.0511 12 17.25V18.75H13.5V17.25C13.5 16.6533 13.2629 16.081 12.841 15.659C12.419 15.2371 11.8467 15 11.25 15ZM9 14.25C9.59334 14.25 10.1734 14.0741 10.6667 13.7444C11.1601 13.4148 11.5446 12.9462 11.7716 12.3981C11.9987 11.8499 12.0581 11.2467 11.9424 10.6647C11.8266 10.0828 11.5409 9.54824 11.1213 9.12868C10.7018 8.70912 10.1672 8.4234 9.58527 8.30765C9.00333 8.19189 8.40013 8.2513 7.85195 8.47836C7.30377 8.70543 6.83524 9.08994 6.50559 9.58329C6.17595 10.0766 6 10.6567 6 11.25C6 12.0457 6.31607 12.8087 6.87868 13.3713C7.44129 13.9339 8.20435 14.25 9 14.25ZM9 9.75C9.29667 9.75 9.58668 9.83798 9.83335 10.0028C10.08 10.1676 10.2723 10.4019 10.3858 10.676C10.4994 10.9501 10.5291 11.2517 10.4712 11.5426C10.4133 11.8336 10.2704 12.1009 10.0607 12.3107C9.85088 12.5204 9.58361 12.6633 9.29264 12.7212C9.00166 12.7791 8.70006 12.7494 8.42598 12.6358C8.15189 12.5223 7.91762 12.33 7.7528 12.0834C7.58797 11.8367 7.5 11.5467 7.5 11.25C7.5 10.8522 7.65804 10.4706 7.93934 10.1893C8.22064 9.90804 8.60218 9.75 9 9.75Z"
                                 fill="black" />
                              <path
                                 d="M21 14.25V21H3V6H12V4.5H3C2.60218 4.5 2.22064 4.65804 1.93934 4.93934C1.65804 5.22064 1.5 5.60218 1.5 6V21C1.5 21.3978 1.65804 21.7794 1.93934 22.0607C2.22064 22.342 2.60218 22.5 3 22.5H21C21.3978 22.5 21.7794 22.342 22.0607 22.0607C22.342 21.7794 22.5 21.3978 22.5 21V14.25H21Z"
                                 fill="black" />
                              <path
                                 d="M15 14.25H19.5V15.75H15V14.25ZM16.5 17.25H19.5V18.75H16.5V17.25ZM24 7.5V6H22.4242C22.327 5.53069 22.1406 5.08439 21.8752 4.68525L22.9928 3.56775L21.9323 2.50725L20.8148 3.62475C20.4156 3.35941 19.9693 3.17305 19.5 3.07575V1.5H18V3.07575C17.5307 3.17305 17.0844 3.35941 16.6852 3.62475L15.5677 2.50725L14.5073 3.56775L15.6248 4.68525C15.3594 5.08439 15.173 5.53069 15.0757 6H13.5V7.5H15.0757C15.173 7.96931 15.3594 8.41561 15.6248 8.81475L14.5073 9.93225L15.5677 10.9928L16.6852 9.87525C17.0844 10.1406 17.5307 10.327 18 10.4242V12H19.5V10.4242C19.9693 10.327 20.4156 10.1406 20.8148 9.87525L21.9323 10.9928L22.9928 9.93225L21.8752 8.81475C22.1406 8.41561 22.327 7.96931 22.4242 7.5H24ZM18.75 9C18.305 9 17.87 8.86804 17.5 8.62081C17.13 8.37357 16.8416 8.02217 16.6713 7.61104C16.501 7.1999 16.4564 6.7475 16.5432 6.31105C16.63 5.87459 16.8443 5.47368 17.159 5.15901C17.4737 4.84434 17.8746 4.63005 18.311 4.54323C18.7475 4.45642 19.1999 4.50097 19.611 4.67127C20.0222 4.84157 20.3736 5.12996 20.6208 5.49997C20.868 5.86998 21 6.30499 21 6.75C20.9994 7.34655 20.7622 7.9185 20.3403 8.34033C19.9185 8.76216 19.3466 8.9994 18.75 9Z"
                                 fill="black" />
                           </svg>

                        </span>
                        Lead Management
                     </button>
                  </h2>
                  <div id="collapsefour" class="accordion-collapse collapse" aria-labelledby="headingfour"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/lm.png" alt="Workflow Automation"
                                 class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer">
                           <div class="accordion" id="leadManagementAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="lm1Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm1" aria-expanded="false" aria-controls="lm1">
        Lead Capture from Multi-Channels
      </button>
    </h2>
    <div id="lm1" class="accordion-collapse collapse" aria-labelledby="lm1Heading" data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Capture all leads from different platforms and channels in one place and organize them source-wise to never miss a sales opportunity.<br>
        - Websites and Web Forms<br>
        - Social Media<br>
        - Real Estate Property Portals<br>
        - Walk-in Site Visits<br>
        - Referrals and Direct Channels<br>
        - Offline Campaigns (Hoardings, Brochures, Leaflets)
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="lm2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm2" aria-expanded="false" aria-controls="lm2">
        Lead Segmentation
      </button>
    </h2>
    <div id="lm2" class="accordion-collapse collapse" aria-labelledby="lm2Heading" data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Categorize prospective customers based on factors like property preference, location, demographics, financial status, and engagement level to personalize communication.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="lm3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm3" aria-expanded="false" aria-controls="lm3">
        Lead Scoring
      </button>
    </h2>
    <div id="lm3" class="accordion-collapse collapse" aria-labelledby="lm3Heading" data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        PropFlo automatically scores leads based on conversion potential, engagement, and behavior. Prioritize high-value prospects and focus your sales efforts smartly.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="lm4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm4" aria-expanded="false" aria-controls="lm4">
        Lead Insights
      </button>
    </h2>
    <div id="lm4" class="accordion-collapse collapse" aria-labelledby="lm4Heading" data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Gain valuable behavioral and profile insights on every lead:<br>
        - Social Media Profile<br>
        - Annual Salary<br>
        - Professional Details<br>
        - Educational Details
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="lm5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm5" aria-expanded="false" aria-controls="lm5">
        Lead Assignment and Task Automation
      </button>
    </h2>
    <div id="lm5" class="accordion-collapse collapse" aria-labelledby="lm5Heading" data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Assign leads using round-robin logic and automate task creation for sales agents. PropFlo ensures no lead is missed with automatic notifications for follow-ups and reminders.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="lm6Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#lm6" aria-expanded="false" aria-controls="lm6">
        CP Lead Conflict Resolution
      </button>
    </h2>
    <div id="lm6" class="accordion-collapse collapse" aria-labelledby="lm6Heading" data-bs-parent="#leadManagementAccordion">
      <div class="accordion-body">
        Automatically detect and resolve conflicts when the same lead comes from multiple channels. PropFlo ensures the same lead isn’t assigned to multiple agents, avoiding duplication and confusion.
      </div>
    </div>
  </div>
</div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>
               <!-- Hidden FAQs initially -->

               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="headingthree">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapsethree" aria-expanded="false" aria-controls="collapsethree">
                        <span class="offer-icon">
                           <svg xmlns="http://www.w3.org/2000/svg" width="16" height="14" viewBox="0 0 16 14"
                              fill="none">
                              <path
                                 d="M2.38958 2.08294V12.4663H14.2563V2.08294H2.38958ZM1.64792 0.599609H14.9979C15.1946 0.599609 15.3833 0.677749 15.5224 0.816838C15.6614 0.955928 15.7396 1.14457 15.7396 1.34128V13.2079C15.7396 13.4046 15.6614 13.5933 15.5224 13.7324C15.3833 13.8715 15.1946 13.9496 14.9979 13.9496H1.64792C1.45121 13.9496 1.26257 13.8715 1.12348 13.7324C0.98439 13.5933 0.90625 13.4046 0.90625 13.2079V1.34128C0.90625 1.14457 0.98439 0.955928 1.12348 0.816838C1.26257 0.677749 1.45121 0.599609 1.64792 0.599609ZM10.3944 5.63775L9.06458 4.30794H12.7729V8.01628L11.4431 6.68647L8.57731 9.55227L7.00423 7.97919L4.90606 10.0766L3.85734 9.02791L7.00423 5.88102L8.57731 7.45409L10.3944 5.63775Z"
                                 fill="#000000" />
                           </svg>
                        </span>
                        AI Features
                     </button>
                  </h2>
                  <div id="collapsethree" class="accordion-collapse collapse" aria-labelledby="headingthree"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/ai.png" alt="Artificial Intelligence"
                                 class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer">
                           <div class="accordion" id="aifeaturesAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="ai1Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai1" aria-expanded="false" aria-controls="ai1">
        AI Sales Assistant
      </button>
    </h2>
    <div id="ai1" class="accordion-collapse collapse" aria-labelledby="ai1Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        PropFlo’s AI-powered sales assistant engages with visitors on your website 24/7, collecting lead information and also scheduling calls or site visits based on user preferences.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ai2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai2" aria-expanded="false" aria-controls="ai2">
        AI Content Writer
      </button>
    </h2>
    <div id="ai2" class="accordion-collapse collapse" aria-labelledby="ai2Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Support your teams with a unique and human-like content generator for customer communication via Email and WhatsApp:<br>
        - Follow-up emails<br>
        - Site visit communication<br>
        - Payment conversation<br>
        - Customer queries handling<br>
        - Prompt-based content generation
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ai3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai3" aria-expanded="false" aria-controls="ai3">
        AI-Based Ad Copy Writer
      </button>
    </h2>
    <div id="ai3" class="accordion-collapse collapse" aria-labelledby="ai3Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Easily craft highly engaging ad copy that converts and makes content your competitive advantage for better customer engagement and marketing impact.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ai4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ai4" aria-expanded="false" aria-controls="ai4">
        AI Data Analyst (Coming Soon)
      </button>
    </h2>
    <div id="ai4" class="accordion-collapse collapse" aria-labelledby="ai4Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Unlock powerful insights with our upcoming AI Data Analyst. Analyze trends, gain actionable recommendations, and make smarter decisions.
      </div>
    </div>
  </div>
        </div>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Display the first 4 FAQ items -->
               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="headingTwo">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                        <span class="offer-icon">
                           <svg width="17" height="17" viewBox="0 0 15 15" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M7.46797 0.668213V3.63488H0.792969V0.668213H7.46797ZM10.4346 11.0515V14.0182H0.792969V11.0515H10.4346ZM14.8846 5.85988V8.82655H0.792969V5.85988H14.8846Z"
                                 fill="black" fill-opacity="0.7" />
                           </svg>
                        </span>
                        Sales Management
                     </button>
                  </h2>
                  <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/sm.png" alt="Sales Automation" class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer">
                              
<div class="accordion" id="ecAccordion">
   <!-- SALES MANAGEMENT SECTION -->

   <div class="accordion-item">
    <h2 class="accordion-header" id="sales1Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales1" aria-expanded="false" aria-controls="sales1">
        Workflow Automation
      </button>
    </h2>
    <div id="sales1" class="accordion-collapse collapse" aria-labelledby="sales1Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        What if your team can concentrate only on big wins and all the routine tasks, such as approvals, follow-ups and updates, happen automatically? This is where workflow automation converts pain points into opportunities by automating CRM workflows.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="sales2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales2" aria-expanded="false" aria-controls="sales2">
        Instant Response and Automated Follow-ups
      </button>
    </h2>
    <div id="sales2" class="accordion-collapse collapse" aria-labelledby="sales2Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        PropFlo makes sure that no lead is left behind. Whether through email or notifications, the system sends timely, personalized follow-ups and responses based on predefined schedules.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="sales3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales3" aria-expanded="false" aria-controls="sales3">
        Pipeline Management and Customization
      </button>
    </h2>
    <div id="sales3" class="accordion-collapse collapse" aria-labelledby="sales3Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        We provide flexibility with pipeline customizations for stages and nomenclature as per your business definitions and requirements to take your sales to the next level.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="sales4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales4" aria-expanded="false" aria-controls="sales4">
        Site Visit Management
      </button>
    </h2>
    <div id="sales4" class="accordion-collapse collapse" aria-labelledby="sales4Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Manage all your client site visits in one place and automate the site visit scheduling updates and follow-up communication from CRM software—focus more on attending to the customers.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="sales5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales5" aria-expanded="false" aria-controls="sales5">
        Cost Sheet Generation and Sharing
      </button>
    </h2>
    <div id="sales5" class="accordion-collapse collapse" aria-labelledby="sales5Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Generate custom cost sheets as per your organization's template and share them with prospective customers instantly through the CRM system.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="sales6Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales6" aria-expanded="false" aria-controls="sales6">
        Inventory Availability/Booking/Blocking
      </button>
    </h2>
    <div id="sales6" class="accordion-collapse collapse" aria-labelledby="sales6Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Handle the real-time inventory and manage EOI bookings. Stay up-to-date with unit availability and manage instant bookings and blockings to avoid overlap and serve your customers better.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="sales7Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#sales7" aria-expanded="false" aria-controls="sales7">
        Sales Mobile App
      </button>
    </h2>
    <div id="sales7" class="accordion-collapse collapse" aria-labelledby="sales7Heading" data-bs-parent="#aifeaturesAccordion">
      <div class="accordion-body">
        Equip sales teams and agents with a mobile application to stay updated with every lead activity, follow-up, and reminder. Log a call directly through the mobile app via telephony integration from anywhere in the world.
      </div>
    </div>
  </div>
</div>



</div>
                        </div>
                     </div>
                  </div>
               </div>

               <!-- Add the remaining 3 FAQ items here -->
               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="heading5">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
                        <span class="offer-icon">
                           <svg width="17" height="17" viewBox="0 0 17 17" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M11.0591 9.08607L16.2241 12.0987L14.0191 12.7291L15.5951 15.4592L14.3106 16.2009L12.7345 13.4715L11.0858 15.0661L11.0591 9.08607ZM9.57578 3.8944H11.0591V5.37773H14.7674C14.9641 5.37773 15.1528 5.45587 15.2919 5.59496C15.431 5.73405 15.5091 5.9227 15.5091 6.1194V9.08607H14.0258V6.86107H6.60911V14.2777H9.57578V15.7611H5.86745C5.67075 15.7611 5.4821 15.6829 5.34301 15.5438C5.20392 15.4047 5.12578 15.2161 5.12578 15.0194V11.3111H3.64245V9.82773H5.12578V6.1194C5.12578 5.9227 5.20392 5.73405 5.34301 5.59496C5.4821 5.45587 5.67075 5.37773 5.86745 5.37773H9.57578V3.8944ZM2.15911 9.82773V11.3111H0.675781V9.82773H2.15911ZM2.15911 6.86107V8.3444H0.675781V6.86107H2.15911ZM2.15911 3.8944V5.37773H0.675781V3.8944H2.15911ZM2.15911 0.927734V2.41107H0.675781V0.927734H2.15911ZM5.12578 0.927734V2.41107H3.64245V0.927734H5.12578ZM8.09245 0.927734V2.41107H6.60911V0.927734H8.09245ZM11.0591 0.927734V2.41107H9.57578V0.927734H11.0591Z"
                                 fill="black" fill-opacity="0.7" />
                           </svg>
                        </span>
                        Omni Channel Communication
                     </button>
                  </h2>
                  <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/omni.png" alt="Omni Channel Communication"
                                 class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer">


<div class="accordion" id="ecAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="ec1Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec1" aria-expanded="false" aria-controls="ec1">
        Omni-Channel Communication
      </button>
    </h2>
    <div id="ec1" class="accordion-collapse collapse" aria-labelledby="ec1Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Centralize all your customer communication channels in one CRM platform—manage calls, WhatsApp, emails, and SMS seamlessly for a consistent and effective client engagement experience.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ec2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec2" aria-expanded="false" aria-controls="ec2">
        Call Logs and Recordings
      </button>
    </h2>
    <div id="ec2" class="accordion-collapse collapse" aria-labelledby="ec2Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Track customer communication with call logs, recent activity, and recordings to gain better insights and plan effective follow-up actions during the sales process.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ec3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec3" aria-expanded="false" aria-controls="ec3">
        WhatsApp Communication
      </button>
    </h2>
    <div id="ec3" class="accordion-collapse collapse" aria-labelledby="ec3Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        With built-in WhatsApp for real estate, you’ll always stay connected with customers, quickly respond to their queries, and send essential post-sales updates such as:<br>
        - Payment follow-ups, reminders<br>
        - Overdue payment interest calculations<br>
        - Construction updates<br>
        - Property milestones
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ec4Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec4" aria-expanded="false" aria-controls="ec4">
        Email Communication
      </button>
    </h2>
    <div id="ec4" class="accordion-collapse collapse" aria-labelledby="ec4Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Communicate your offerings to prospects, send bulk emails to specific lead segments with personalized messaging, and create drip campaigns to nurture leads and build long-term relationships.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="ec5Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ec5" aria-expanded="false" aria-controls="ec5">
        Telephony
      </button>
    </h2>
    <div id="ec5" class="accordion-collapse collapse" aria-labelledby="ec5Heading" data-bs-parent="#ecAccordion">
      <div class="accordion-body">
        Receive and log calls from the CRM software and automatically save recordings, call logs, and client details. Choose from the following supported telephony integrations:<br>
        - MCube<br>
        - Knowlarity<br>
        - Ozonetel<br>
        - Custom
      </div>
    </div>
  </div>
</div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="heading7">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
                        <span class="offer-icon">
                           <svg width="17" height="17" viewBox="0 0 17 15" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path
                                 d="M15.1615 11.7932V14.0182H13.6781V11.7932H12.1948V10.3099H16.6448V11.7932H15.1615ZM3.29479 11.7932V14.0182H1.81146V11.7932H0.328125V10.3099H4.77813V11.7932H3.29479ZM7.74479 2.89321V0.668213H9.22813V2.89321H10.7115V4.37655H6.26146V2.89321H7.74479ZM7.74479 5.85988H9.22813V14.0182H7.74479V5.85988ZM1.81146 8.82655V0.668213H3.29479V8.82655H1.81146ZM13.6781 8.82655V0.668213H15.1615V8.82655H13.6781Z"
                                 fill="black" fill-opacity="0.7" />
                           </svg>
                        </span>
                        Inventory Management
                     </button>
                  </h2>
                  <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/invm.png" alt="Inventory Management"
                                 class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer ">
                           <div class="accordion" id="handoverAccordion">
  <div class="accordion-item">
    <h2 class="accordion-header" id="inv1Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inv1" aria-expanded="false" aria-controls="inv1">
        Inventory Creation and Update
      </button>
    </h2>
    <div id="inv1" class="accordion-collapse collapse" aria-labelledby="inv1Heading" data-bs-parent="#handoverAccordion">
      <div class="accordion-body">
        Create or bulk import a real-time inventory for each project at the tower level. Easily switch between list and grid views to manage inventory based on your preference.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="inv2Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inv2" aria-expanded="false" aria-controls="inv2">
        Milestones Creation and Custom Parking Allocation Rules
      </button>
    </h2>
    <div id="inv2" class="accordion-collapse collapse" aria-labelledby="inv2Heading" data-bs-parent="#handoverAccordion">
      <div class="accordion-body">
        Create custom milestones and payment schedules tailored to your real estate project. Set personalized parking allocation rules and guidelines to match individual client preferences.
      </div>
    </div>
  </div>

  <div class="accordion-item">
    <h2 class="accordion-header" id="inv3Heading">
      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#inv3" aria-expanded="false" aria-controls="inv3">
        Checklist and Handover
      </button>
    </h2>
    <div id="inv3" class="accordion-collapse collapse" aria-labelledby="inv3Heading" data-bs-parent="#handoverAccordion">
      <div class="accordion-body">
        Set up a comprehensive Property Handover Checklist covering all essential activities such as documentation, inspection, and maintenance to ensure a smooth and complete handover process.
      </div>
    </div>
  </div>
</div>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>

               <div class="accordion-item mb-4 border-none">
                  <h2 class="accordion-header" id="heading6">
                     <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                        data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
                        <span class="offer-icon">

                           <svg width="18" height="18" viewBox="0 0 18 18" fill="none"
                              xmlns="http://www.w3.org/2000/svg">
                              <path fill-rule="evenodd" clip-rule="evenodd"
                                 d="M8.99563 10H9.01562C11.7771 10 14.0156 7.7615 14.0156 5C14.0156 2.2385 11.7771 0 9.01562 0H8.97563C6.23263 0.0215 4.01562 2.252 4.01562 5C4.01562 7.748 6.23263 9.9785 8.97563 10H8.99563ZM12.9846 5.5H11.9846C11.964 5.84567 11.9231 6.179 11.8621 6.5H12.7251C12.8526 6.185 12.9411 5.8495 12.9851 5.5M12.1386 7.5H11.5986C11.4961 7.795 11.3761 8.0715 11.2406 8.325C11.5802 8.09747 11.8834 7.81924 12.1386 7.5ZM10.8421 6.5C10.9106 6.1865 10.9591 5.8515 10.9826 5.5H9.51562V6.5H10.8421ZM9.51562 7.5H10.5271C10.4513 7.6795 10.3633 7.85358 10.2636 8.021C10.0136 8.4365 9.75513 8.6935 9.51562 8.839V7.5ZM8.51562 6.5V5.5H7.01663C7.04013 5.8515 7.08863 6.1865 7.15713 6.5H8.51562ZM7.47213 7.5H8.51562V8.858C8.26762 8.716 7.99663 8.4555 7.73563 8.021C7.63595 7.85358 7.54791 7.6795 7.47213 7.5ZM6.13713 6.5C6.07612 6.179 6.03529 5.84567 6.01463 5.5H5.04663C5.09013 5.8495 5.17863 6.185 5.30663 6.5H6.13713ZM5.89313 7.5H6.40112C6.49863 7.782 6.61313 8.047 6.74113 8.2905C6.42157 8.06958 6.13591 7.80328 5.89313 7.5ZM11.9846 4.5C11.9648 4.16442 11.9239 3.83043 11.8621 3.5H12.7251C12.8526 3.815 12.9411 4.1505 12.9851 4.5H11.9846ZM12.1381 2.5H11.5981C11.5005 2.21608 11.3808 1.94023 11.2401 1.675C11.5799 1.90249 11.8827 2.18072 12.1381 2.5ZM9.51562 2.5H10.5271C10.4513 2.3205 10.3633 2.14642 10.2636 1.979C10.0136 1.563 9.75513 1.3065 9.51562 1.161V2.5ZM10.8421 3.5H9.51562V4.5H10.9826C10.9599 4.16372 10.913 3.82952 10.8421 3.5ZM8.51562 1.142V2.5H7.47213C7.55279 2.311 7.64063 2.13733 7.73563 1.979C7.99613 1.5445 8.26762 1.284 8.51562 1.142ZM8.51562 3.5H7.15713C7.08628 3.82952 7.03932 4.16372 7.01663 4.5H8.51562V3.5ZM6.74063 1.7095C6.60787 1.96422 6.49423 2.22844 6.40063 2.5H5.89313C6.13591 2.19672 6.42107 1.93042 6.74063 1.7095ZM6.13762 3.5H5.30663C5.17709 3.82069 5.08969 4.15683 5.04663 4.5H6.01513C6.03579 4.15433 6.07662 3.821 6.13762 3.5Z"
                                 fill="black" />
                              <path
                                 d="M2.0545 13.3106C2.338 13.6116 2.6195 13.9106 2.8845 14.2906V15.0001H6.601V14.2906C6.5345 13.7386 6.4175 12.7441 6.407 12.4676C6.393 12.0786 5.871 11.3696 5.871 11.3696L4.2685 9.34959C4.2685 9.34959 3.815 8.87059 3.5555 8.33959C3.2955 7.80809 2.7435 8.47659 2.6705 8.95459C2.5965 9.43259 2.7365 9.68459 2.7365 9.68459L3.6515 11.5036C3.6515 11.5036 2.5905 10.0501 2.261 9.46609C2.094 9.17009 2.0475 8.54309 1.995 7.84259C1.9445 7.16009 1.8885 6.40759 1.711 5.82259C1.351 4.63759 0.309999 4.93409 0.129499 5.46409C-0.0505009 5.99359 -0.0100008 9.49309 0.0554992 10.0766C0.106999 10.5336 0.382499 10.9806 0.692999 11.4846C0.778999 11.6246 0.867999 11.7686 0.955499 11.9181C1.3035 12.5141 1.6805 12.9146 2.0545 13.3106ZM15.1165 14.2906C15.3815 13.9106 15.663 13.6116 15.9465 13.3106C16.3205 12.9146 16.6975 12.5141 17.046 11.9181C17.133 11.7681 17.222 11.6246 17.308 11.4851C17.6185 10.9811 17.894 10.5336 17.9455 10.0766C18.011 9.49309 18.052 5.99359 17.8715 5.46409C17.691 4.93409 16.65 4.63759 16.29 5.82309C16.113 6.40809 16.057 7.16009 16.006 7.84259C15.9535 8.54309 15.907 9.17009 15.74 9.46609C15.4105 10.0506 14.349 11.5036 14.349 11.5036L15.2645 9.68459C15.2645 9.68459 15.4045 9.43259 15.331 8.95459C15.2575 8.47659 14.7055 7.80809 14.446 8.33959C14.186 8.87059 13.7325 9.34959 13.7325 9.34959L12.13 11.3696C12.13 11.3696 11.608 12.0786 11.594 12.4676C11.584 12.7441 11.4665 13.7386 11.4 14.2906V15.0001H15.1165V14.2906ZM10 17.5001C10 17.6327 10.0527 17.7599 10.1464 17.8536C10.2402 17.9474 10.3674 18.0001 10.5 18.0001H14.5C14.6326 18.0001 14.7598 17.9474 14.8536 17.8536C14.9473 17.7599 15 17.6327 15 17.5001V16.5001C15 16.3675 14.9473 16.2403 14.8536 16.1465C14.7598 16.0528 14.6326 16.0001 14.5 16.0001H10.5C10.3674 16.0001 10.2402 16.0528 10.1464 16.1465C10.0527 16.2403 10 16.3675 10 16.5001V17.5001ZM8.001 17.5001C8.001 17.6327 7.94832 17.7599 7.85455 17.8536C7.76078 17.9474 7.63361 18.0001 7.501 18.0001H3.501C3.36839 18.0001 3.24121 17.9474 3.14745 17.8536C3.05368 17.7599 3.001 17.6327 3.001 17.5001V16.5001C3.001 16.3675 3.05368 16.2403 3.14745 16.1465C3.24121 16.0528 3.36839 16.0001 3.501 16.0001H7.501C7.63361 16.0001 7.76078 16.0528 7.85455 16.1465C7.94832 16.2403 8.001 16.3675 8.001 16.5001V17.5001Z"
                                 fill="black" />
                           </svg>

                        </span>
                        Post Sales Management
                     </button>
                  </h2>
                  <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6"
                     data-bs-parent="#accordionExample">
                     <div class="accordion-body" id="choose">
                        <div class="row">
                           <div class="col-md-7">
                              <img src="assets/img/homepage/psm.png" alt="CRM Mobile App" class="img-fluid2 rounded">
                           </div>
                           <div class="col-md-5 cont-ofer">
                           <section class="sc py-4">
  <div class="container">
   
    <div class="accordion" id="postSalesAccordion">
      <div class="accordion-item">
        <h2 class="accordion-header" id="ps1Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps1" aria-expanded="false" aria-controls="ps1">
            Booking Management
          </button>
        </h2>
        <div id="ps1" class="accordion-collapse collapse" aria-labelledby="ps1Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Whether it’s a site visit or a reservation, all booking details are organized and updated in real-time, ensuring smooth coordination with clients and preventing double-booking.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="ps2Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps2" aria-expanded="false" aria-controls="ps2">
            Payment Management
          </button>
        </h2>
        <div id="ps2" class="accordion-collapse collapse" aria-labelledby="ps2Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Manage and accept online/offline payments, maintain ledgers, and access complete payment histories. Set up automated reminders with interest calculations for overdue payments.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="ps3Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps3" aria-expanded="false" aria-controls="ps3">
            Milestone & Collection Management
          </button>
        </h2>
        <div id="ps3" class="accordion-collapse collapse" aria-labelledby="ps3Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Track every project milestone and view collection progress across inventory levels. Schedule automated payment reminders to ensure financial goals are met.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="ps4Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps4" aria-expanded="false" aria-controls="ps4">
            Demand Note, AOS & Sale Deed
          </button>
        </h2>
        <div id="ps4" class="accordion-collapse collapse" aria-labelledby="ps4Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Create, manage, and store legal documents like Agreement of Sale (AOS), Demand Notes, and Sale Deeds within the CRM system for a seamless post-sales experience.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="ps5Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps5" aria-expanded="false" aria-controls="ps5">
            WhatsApp & Email Communication
          </button>
        </h2>
        <div id="ps5" class="accordion-collapse collapse" aria-labelledby="ps5Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Stay in touch with buyers post-booking using built-in WhatsApp and Email updates. Send reminders and updates related to:<br>
            - Payment follow-ups<br>
            - Overdue interest<br>
            - Construction milestones<br>
            - Property updates
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="ps6Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps6" aria-expanded="false" aria-controls="ps6">
            Checklist and Handover
          </button>
        </h2>
        <div id="ps6" class="accordion-collapse collapse" aria-labelledby="ps6Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Set up a structured property checklist for documentation, inspection, and maintenance tasks. Ensure smooth and professional handovers to your clients.
          </div>
        </div>
      </div>

      <div class="accordion-item">
        <h2 class="accordion-header" id="ps7Heading">
          <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#ps7" aria-expanded="false" aria-controls="ps7">
            Task Management
          </button>
        </h2>
        <div id="ps7" class="accordion-collapse collapse" aria-labelledby="ps7Heading" data-bs-parent="#postSalesAccordion">
          <div class="accordion-body">
            Manage all post-sales activities in one place. Automate repetitive tasks to save your CRM team’s time and increase efficiency.
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

                           </div>
                        </div>
                     </div>
                  </div>
               </div>

            </div>
         </div>
      </div>
   </div>
</section>












   <style>
   /* CSS Animation for Infinite Zoom-In */
   @keyframes zoomInOut {
   0%,
   100% {
   transform: scale(1);
   opacity: 1;
   }
   50% {
   transform: scale(1.2);
   /* Slightly bigger at midpoint */
   opacity: 0.8;
   /* Slight fade at midpoint */
   }
   }
   /* Apply Infinite Animation */
   .stat-box {
   font-size: 2.5rem;
   font-weight: bold;
   color: #08CF65;
   margin-bottom: 10px;
   display: inline-block;
   animation: zoomInOut 2s ease-in-out infinite;
   /* Infinite loop */
   }
   .stat-label {
   font-size: 1rem;
   color: #666;
   }
   /* Responsive Design */
   @media (max-width: 991px) {
   /* Tablet view (max-width 991px) */
   .col-md-3 {
   width: 50%;
   /* Two items side by side */
   margin-bottom: 30px;
   }
   }
   @media (max-width: 576px) {
   /* Mobile view (max-width 576px) */
   .col-md-3 {
   width: 50%;
   /* Two items side by side */
   margin-bottom: 30px;
   }
   }
   @media (min-width: 992px) {
   /* Desktop view (min-width 992px) */
   .col-md-3 {
   width: 25%;
   /* Four items in one row */
   }
   }
   .track-record-section {
   background-color: #ffff;
   padding: 60px 0;
   text-align: center;
   }
   </style>
   <div class="track-record-section mt-10 mb-10">
   <div class="section-header mb-80 text-center">
   <h2 class="fw-600 wow splt-txt" data-splitting> What Makes Us #Top-rated CRM
   </h2>
   <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
   Designed to keep you selling and save your valuable time
   </p>
   </div>
   <div class="container">
   <div class="row text-center">
   <div class="col-md-3">
   <div class="stat-box" data-target="96" data-suffix="%">0</div>
   <p style="font-weight:600;font-size:20px;margin-top:7px">
   increase 
   <svg
      xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
      fill="none">
   <path
      d="M8.75586 6.42896H18.0696C19.1741 6.42896 20.0696 7.32439 20.0696 8.42896V17.7427"
      stroke="#c2b7ed" stroke-width="3" stroke-linecap="round"></path>
   <path d="M19.7163 6.78246L5.92773 20.571" stroke="#c2b7ed" stroke-width="3"
      stroke-linecap="round"></path>
   </svg>
   </p>
   <div class="stat-label">Client Satisfaction Rate</div>
   </div>
   <div class="col-md-3">
   <div class="stat-box" data-target="80" data-suffix="%">0</div>
   <p style="font-weight:600;font-size:20px;margin-top:7px">
   increase 
   <svg
      xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
      fill="none">
   <path
      d="M8.75586 6.42896H18.0696C19.1741 6.42896 20.0696 7.32439 20.0696 8.42896V17.7427"
      stroke="#c2b7ed" stroke-width="3" stroke-linecap="round"></path>
   <path 404d="M19.7163 6.78246L5.92773 20.571" stroke="#c2b7ed" stroke-width="3"
      stroke-linecap="round"></path>
   </svg>
   </p>
   <div class="stat-label">Lead to Deal conversion ratio</div>
   </div>
   <div class="col-md-3">
   <div class="stat-box" data-target="70" data-suffix="%">0</div>
   <p style="font-weight:600;font-size:20px;margin-top:7px">
   faster 
   <svg
      xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
      fill="none">
   <path
      d="M8.75586 6.42896H18.0696C19.1741 6.42896 20.0696 7.32439 20.0696 8.42896V17.7427"
      stroke="#c2b7ed" stroke-width="3" stroke-linecap="round"></path>
   <path d="M19.7163 6.78246L5.92773 20.571" stroke="#c2b7ed" stroke-width="3"
      stroke-linecap="round"></path>
   </svg>
   </p>
   <div class="stat-label">Funnel Movement</div>
   </div>
   <div class="col-md-3">
   <div class="stat-box" data-target="25" data-suffix="+">0</div>
   <p style="font-weight:600;font-size:20px;margin-top:7px">
   saved 
   <svg
      xmlns="http://www.w3.org/2000/svg" width="26" height="27" viewBox="0 0 26 27"
      fill="none">
   <path
      d="M8.75586 6.42896H18.0696C19.1741 6.42896 20.0696 7.32439 20.0696 8.42896V17.7427"
      stroke="#c2b7ed" stroke-width="3" stroke-linecap="round"></path>
   <path d="M19.7163 6.78246L5.92773 20.571" stroke="#c2b7ed" stroke-width="3"
      stroke-linecap="round"></path>
   </svg>
   </p>
   <div class="stat-label">Weekly Work Hours per user
   </div>
   </div>
   </div>
   </div>
   </div>
   <script>
      // Function to animate the numbers
      function animateStats() {
          const stats = document.querySelectorAll('.stat-box');
      
          stats.forEach(stat => {
              const target = +stat.getAttribute('data-target'); // Target value
              const suffix = stat.getAttribute('data-suffix') || ''; // Suffix (M+, K+, etc.)
              const duration = 3000; // Animation duration in ms
              const increment = target / (duration / 50); // Increment step
              let current = 0;
      
              const updateCount = () => {
                  current += increment;
                  if (current < target) {
                      stat.textContent = Math.floor(current) + suffix;
                      requestAnimationFrame(updateCount);
                  } else {
                      stat.textContent = target + suffix; // Set final value
                  }
              };
      
              updateCount();
          });
      }
      
      // Set up Intersection Observer
      document.addEventListener('DOMContentLoaded', () => {
          const section = document.querySelector('.track-record-section'); // The section to observe
          const observer = new IntersectionObserver(
              (entries, observer) => {
                  entries.forEach(entry => {
                      if (entry.isIntersecting) {
                          animateStats(); // Trigger the animation
                          observer.disconnect(); // Stop observing after the animation starts
                      }
                  });
              }, {
                  threshold: 0.5
              } // Trigger when 50% of the section is visible
          );
      
          if (section) {
              observer.observe(section);
          }
      });
   </script>
   <section class="py-5">
   <div class="container">
   <div class="row align-items-center">
   <!-- Left Column -->
   <div class="col-lg-7">
   <div class="section-header mt-20 mb-20 ">
   <h2 class="fw-600 wow splt-txt" data-splitting>How CRM Supports the Needs of the Real Estate business?
   </h2>
   <p class="mb-5">
   In real estate, selling or buying is a long process with too many followups and
   touchpoints, like capturing the leads, positioning the product, scheduling a site
   visit, negotiations, documents and transactions. Under these circumstances, opting
   for the real estate CRM gives realtors an effective way to manage all their leads,
   tasks, contacts, deals, site visits, follow-up, remainders and sales pipelines to
   stay organized and focus more on building better customer relationships and closing
   more deals.
   </p>
   </div>
   <div class="row g-4">
   <!-- Card 1 -->
   <div class="col-md-6">
   <div class="text-center p-3 border rounded bg-white h-100">
   <i class="fa-solid fa-chart-line fa-2x text-primary mb-3"></i>
   <h6>Improved Productivity</h6>
   <p class="small">Manage leads, schedule tasks and followups, nurture deals,
   handle inventory, generate documents easily and track sales transactions.
   </p>
   </div>
   </div>
   <!-- Card 2 -->
   <div class="col-md-6">
   <div class="text-center p-3 border rounded bg-white h-100">
   <i class="fa-solid fa-lightbulb fa-2x text-warning mb-3"></i>
   <h6>Informed Decision-Making</h6>
   <p class="small">With real-time access to marketing, sales and post-sales
   reports, project overviews, campaign metrics, lead insights and cashflows
   </p>
   </div>
   </div>
   <!-- Card 3 -->
   <div class="col-md-6">
   <div class="text-center p-3 border rounded bg-white h-100">
   <i class="fa-solid fa-comments fa-2x text-success mb-3"></i>
   <h6>Simplified Communication</h6>
   <p class="small">Send WhatsApp messages, emails, payment remainders, make calls
   directly through CRM, and record the conversations.
   </p>
   </div>
   </div>
   <!-- Card 4 -->
   <div class="col-md-6">
   <div class="text-center p-3 border rounded bg-white h-100">
   <i class="fa-solid fa-users fa-2x text-danger mb-3"></i>
   <h6>Streamline Workflows</h6>
   <p class="small">Automate repetitive task, simplify process, optimize
   operations, Integrated system for sales, marketing and CRM teams.
   </p>
   </div>
   </div>
   <a href="https://calendly.com/propflo-realestatecrm" class="btn-propflo text-center"
      id="cal2" target="_blank" style="margin:20px auto;">Request a Demo
   </a>
   </div>
   </div>
   <!-- Right Column (Image) -->
   <div class="col-lg-5 text-center mt-20">
   <img src="assets/img/mobile-app/mobile-crm4.png" alt="Mobile App Mockup" class="img-fluid"
      width="300px">
   </div>
   </div>
   </div>
   </section>
   <!-- Banner area end here -->
   <?php
      include('home-choose.php');
            
            ?>
   <!-- Banner area end here -->
   <?php
      include('home-awards.php');
            
            ?>
   <section class="faq-area pb-120" style="background: #EBF2F5;">
   <div class="container" style="background: #fff; padding: 50px 20px;">
   <div class="row g-4">
   <div class="section-header mb-20 text-center">
   <h2 class="fw-600 wow splt-txt" data-splitting>Frequently Asked Questions</h2>
   </div>
   <div class="col-lg-12 wow fadeInRight" data-wow-delay="400ms" data-wow-duration="2000ms">
   <div class="accordion" id="accordionExample">
   <!-- FAQ 1 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading1">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse1" aria-expanded="false" aria-controls="collapse1">
   Who can use a real estate CRM?
   </button>
   </h2>
   <div id="collapse1" class="accordion-collapse collapse" aria-labelledby="heading1" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>A real estate CRM (customer relationship management) system can be used by a wide range of professionals and businesses within the real estate industry. Here’s a breakdown of who can benefit from using a real estate CRM:
   <ul>
   <li>Real Estate Developers</li>
   <li>  Real Estate Agents and brokers</li>
   <li>Real Estate channel partner firms</li>
   <li>Real Estate Agencies/Firms</li>
   <li>Real Estate Consultants</li>
   <li>Property Managers</li>
   </p>
   </div>
   </div>
   </div>
   <!-- FAQ 2 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading2">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse2" aria-expanded="false" aria-controls="collapse2">
   How does the real estate CRM handle every stage of the customer lifecycle?
   </button>
   </h2>
   <div id="collapse2" class="accordion-collapse collapse" aria-labelledby="heading2" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>A real estate CRM system plays a crucial role in managing and optimizing the entire customer lifecycle, from customer enquiry to bookings and post-sale follow-up. 
   <ul>
   <li>Captures leads from multiple sources (websites, social media, referrals, offline campaigns, loyalty programs).</li>
   <li>Faster inquiry response, gather requirements, identifies sources and assign it to a particular salesperson.</li>
   <li>Lead nurturing and automated follow-ups through WhatsApp,Emails and reminders.</li>
   <li>Use lead qualification, lead Scoring and segmentation to prioritize high-value prospects to save time.</li>
   <li>Site visit management for a better visit to bookings ratio and manages real-time inventory.</li>
   <li>Generate documents like AOS, sale deeds, demand notes and cost sheets and provide flexibility to modify.</li>
   <li>Constant touch and communicate  with customers even after sales and share updates about construction progress, automated payment reminders, follow-ups, etc.</li>
   </ul>
   </p>
   </div>
   </div>
   </div>
   <!-- FAQ 3 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading3">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse3" aria-expanded="false" aria-controls="collapse3">
   How does the CRM for real estate work?
   </button>
   </h2>
   <div id="collapse3" class="accordion-collapse collapse" aria-labelledby="heading3" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>CRM software like PropFlo, which is specifically built for real estate, knows the industry language. It improves the process by automating the sales and marketing cycle and keeps the pipeline active with healthy potential buyers by driving the customer engagement throughout the customer lifecycle journey and ensuring no opportunity is missed. Additionally, it manages transactions and inventory in real time.</p>
   </div>
   </div>
   </div>
   <!-- FAQ 4 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading4">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse4" aria-expanded="false" aria-controls="collapse4">
   What are the benefits of real estate CRM vs. generic CRM software?
   </button>
   </h2>
   <div id="collapse4" class="accordion-collapse collapse" aria-labelledby="heading4" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>The Real Estate CRM provides below benefits over generic crm softwares</p>
   <ul>
   <li>Real Estate Industry-specific features like Site visit management, cost sheetsand all legal document generation (built-int customizable templates)</li>
   <li>Track CP commission structures, brokerage split and payment schemes, and customer payment schedules</li>
   <li>Automated real estate workflows and nomenclature, etc.</li>
   <p>To sum up, Generic CRM software requires heavy customizations for real estate use and is still not able to provide a solution such as real estate CRM software.</p>
   </div>
   </div>
   </div>
   <!-- FAQ 5 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading5">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse5" aria-expanded="false" aria-controls="collapse5">
   How does real estate CRM software help real estate developers?
   </button>
   </h2>
   <div id="collapse5" class="accordion-collapse collapse" aria-labelledby="heading5" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>A Real Estate CRM helps real estate developers in capturing multisource enquiries, reduce the lead leakages and response time, keep track of buyers journey and provides the automation to expedite the process, real-time inventory management, document generation, payment tracking and cash collections, team and individual performance tracking, and consolidated reports for each real estate function</p>
   </div>
   </div>
   </div>
   <!-- FAQ 6 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading6">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse6" aria-expanded="false" aria-controls="collapse6">
   What will be the ROI of using real estate CRM?
   </button>
   </h2>
   <div id="collapse6" class="accordion-collapse collapse" aria-labelledby="heading6" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>By using integrated real estate CRM, you can achieve faster enquiry response time, a better lead-to-deal ratio, track all the multi-source enquiries properly, and measure campaign performance; achieve higher productivity; and communicate with customers  directly through CRM software, which saves you from spending cost for third-party applications.</p>
   </div>
   </div>
   </div>
   <!-- FAQ 7 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading7">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse7" aria-expanded="false" aria-controls="collapse7">
   Which platforms can be integrated with CRM software?
   </button>
   </h2>
   <div id="collapse7" class="accordion-collapse collapse" aria-labelledby="heading7" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>A real estate CRM provides flexibility to integrate CRM software with all your favorite applications, like real estate portals (99 Acres, housing.com and many more), Google Ads and Meta Ads, Social media, Emails, websites, Telephony and Analytics tools</p>
   </div>
   </div>
   </div>
   <!-- FAQ 8 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading8">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse8" aria-expanded="false" aria-controls="collapse8">
   Why is PropFlo Real Estate CRM the Best for real estate businesses?
   </button>
   </h2>
   <div id="collapse8" class="accordion-collapse collapse" aria-labelledby="heading8" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>PropFlo CRM software is considered one of the best for real estate businesses for its user-friendly and easy-to-use interface and scalability. PropFlo offers outstanding features that are specifically designed for real estate only.
   <ul>
   <li>Lead Management, lead scoring and lead insights.</li>
   <li>Marketing Automation through Whatsapp and Emails</li>
   <li>Sales, inventory, channel partners and  Post sales management</li>
   <li>Workflow automation and task management.</li>
   <li>Real-Time Analytics and Team-wise in-depth reports</li>
   <li>Mobile Access and Real estate integrations </li>
   <li>24/7 Customer Support in multiple languages</li>
   </p>
   </div>
   </div>
   </div>
   <!-- FAQ 9 -->
   <div class="accordion-item mb-2 border-none">
   <h2 class="accordion-header" id="heading9">
   <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapse9" aria-expanded="false" aria-controls="collapse9">
   How do I sign up for PropFlo CRM for my real estate business?
   </button>
   </h2>
   <div id="collapse9" class="accordion-collapse collapse" aria-labelledby="heading9" data-bs-parent="#accordionExample">
   <div class="accordion-body">
   <p>To get started with PropFlo CRM is very easy; just call us at +91 8008656081 or mail us at marketing@propflo.ai, and within a minute one of our representatives will be in touch with you for setting up a real estate crm for your business.</p>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </div>
   </section>
   <section class="start-now-area bg-image pt-50 pb-50">
   <div class="container">
   <div class="section-header" id="cta" style="text-align:center">
   <h2 style="color:#08cf65" class="fw-600 wow splt-txt words chars splitting animated"
      data-splitting>Close your Deals Faster, Easier and Smarter <br> With AI-Powered CRM
   </h2>
   <a href="demo" class="btn-white mt-15 wow fadeInUp" data-wow-delay="400ms"
      data-wow-duration="1500ms"
      style="visibility: visible; animation-duration: 1500ms; animation-delay: 400ms; animation-name: fadeInUp;">Request
   a Free Demo</a>
   </div>
   </div>
   </section>
   </main>
   <?php
      include('footer.php');
       
       ?>
   </div>
   <button id="back-top" class="btn-backToTop">
   <i class="fa-solid fa-chevron-up"></i>
   </button>
   <?php
      include('footerjs.php');
      
      ?>