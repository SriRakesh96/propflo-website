<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<head>
   <!-- Real Estate Channel Partner CRM | PropFlo -->
   <title>Real Estate Channel Partner CRM | PropFlo</title>
   <meta name="title" content="Real Estate Channel Partner CRM | PropFlo">
   <meta name="description" content="PropFlo helps real estate Channel Partners reduce manual effort, save time, increase sales, and establish better connections with clients. Try it today!">
   <?php
      include('head.php');
       
       ?>
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
   <style>

.fea-tag { 
display: inline-block; 
border: 1px solid #08cf65;
 border-radius: 30px;
 padding: 3px 8px;
margin-bottom:10px;
 /* Optional: Add padding for better aesthetics */ }



      .banner-three__content{
      max-width:75% !important;
      margin: 0 auto;
      }
      @media (max-width: 767px) {
      .banner-three__content{
      max-width:100% !important;
      }
      }
      .fw-600 {
      width:80%;
      margin:0 auto;
      }
      @media only screen and (max-width: 600px) {
      .fw-600 {
      width:100%;
      margin:0 auto;
      }
      }
      h2, h3{
      color:#2B3857 !important;
      }
      #feature-banner{
      padding-top:220px;
      }
      @media only screen and (max-width: 600px) {
      #feature-banner{
      padding-top:145px;
      }
      .btn-propflo2{
      border:1px solid #08CF65;
      color: var(--white);
      border-radius: 12px;
      padding: 13px 13px;
      }
      }
      .btn-propflo2{
      border:1px solid #08CF65;
      color: var(--white);
      border-radius: 12px;
      padding: 12px 24px;
      }
      .btn-nrml{
      border:1px solid #D1D5DB;
      padding: 12px 24px;
      border-radius: 12px;
      color:#6B7280;
      margin-right:15px;
      }
      .banner-three-area    .banner-tag{
      text-align: center;
      border: 1px solid #08CF65;
      padding: 5px 5px;
      color:#fff;
      margin-bottom: 15px;
      width: 30%;
      display: block;
      margin: 20px auto;
      border-radius: 50px;
      }
      @media only screen and (max-width: 768px) {
      .banner-three-area  .banner-tag{
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
      .lm-menu{
      /*padding-top: 140px;*/
      }
      #lmen-item{
      width:60% !important;
      }
      .banner-three-area {
      padding-top: 190px !important;
      }
      .banner-three__content h1 {
      font-size: 45px !important; 
      }
      .banner-three__content p {
      }
      .big-head{
      line-height:60px !important;
      }
      @media only screen and (max-width: 600px) {
      .banner-three__content h1 {
      font-size: 45px !important; 
      }
      .lm-menu{
      padding-top: 90px;
      }
      #lmen-item{
      width:100% !important; 
      }
      .banner-three-area {
      padding-top: 190px !important;
      }
      .big-head{
      line-height:40px !important;
      }
      }
      .menu-sol a{
      margin:0px 15px;
      }
      .scroll-section{
      height: 120vh !important;
      margin-top: 10px!important;
      background:#fff;
      }
      .scroll-item{
      height: 125vh !important;
      }
      .scroll-row{
      display: flex;
      align-items: center;
      }
      .feature-list{
      margin-top:5px !important;
      }
      .feature-list li{
      margin:10px 0px;
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
      background-color:#F2F5F8;
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
      .scrol-sec{
      background: #F2F5F8;
      padding: 50px;
      }
      @media only screen and (max-width: 600px) {
      .scrol-sec{
      padding: 0px !important;
      }
      .scroll-item{
      padding:5px !important;
      }
      }
      .footer__item h3{
      color:#fff !important;
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
      transform: scale(1.1); /* Slight zoom-in effect */
      color: #08CF65; 
      }
      .img-fluid2{
      width:100%;
      }
      .custom-card:hover {
      transform: scale(1.05);
      box-shadow: 0 8px 16px rgba(0, 0, 0, 0.4);
      animation: hover-wobble 1s ease-in-out;
      }
      .crm{
      background: none !important;
      padding: 50px 30px;
      } 
      @media only screen and (max-width: 768px) {
      .crm {
      padding:5px !important;
      }
      }
      #cta h2{
      color:#fff !important;
      }
      .start-now-area {
      position: relative;
      z-index: 1;
      background: linear-gradient(to bottom, #08cf65, #1B4650) !important;


         margin-top: 0px;
      }
      .btn-white{
   
      padding: 12px 24px;
      background:#1B4650;
      color: var(--white);
      border-radius: 12px;
      }
      .btn-white:hover{
      background: #fff !important;
      color:#000 !important;
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
      .header-area.menu-fixed {
      top: 0;
      background: #fff;
      box-shadow: var(--shadow);
      display: none;
      }
      @media only screen and (max-width: 768px) {
      .lm-menu {
      /*padding: 100px 20px 20px 20px; */
      display: block !important;
      }
      .header-area.menu-fixed {
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
         <style>
            a {
            text-decoration: none;
            }
            a.selected {
            text-decoration: underline;
            }
         </style>
         <div class="lm-menu mb-20">
            <div class="custom-menu">
               <a href="#po" id="poi">Projects Onboarding</a>
               <a href="#lm" id="lmi">Leads management</a>
               <a href="#we" id="wei" >Marketing</a>
               <a href="#si" id="sii">Integrations</a>
               <a href="#c" id="ci">Tasks Management</a>
               <a href="#dm" id="dmi" style="padding-right: 20px;">Deals Management</a>
            </div>
            <div class="custom-arrow-right" onclick="customScrollMenu()">
               &rarr;
            </div>
         </div>
         <script>
            // Select all the anchor elements
            const links = document.querySelectorAll('.custom-menu a');
            // Loop through each link and add event listeners
            links.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault(); // Prevent default link behavior
                    // Remove 'selected' class from all links
                    links.forEach(link => link.classList.remove('selected'));
                    // Add 'selected' class to the clicked link
                    this.classList.add('selected');
                    // Scroll to the corresponding section
                    const targetId = this.getAttribute('href').substring(1);
                    const targetSection = document.getElementById(targetId);
                    // Smooth scrolling to the section
                    targetSection.scrollIntoView({
                        behavior: "smooth"
                    });
                });
            });
            // Adjust menu position on scroll
            function adjustMenuPosition() {
                const menu = document.querySelector(".lm-menu");
                if (window.innerWidth <= 768) {
                    menu.style.padding = "15px 15px";
                    menu.style.top = "80px";
                } else {
                    menu.style.padding = "15px 15px";
                }
            }
            
            function handleScroll() {
                const menu = document.querySelector(".lm-menu");
                if (window.scrollY > 0) {
                    menu.style.top = window.innerWidth <= 768 ? "100px" : "0px";
                    menu.style.paddingTop = "15px";
                } else {
                    if (window.innerWidth <= 768) {
                        menu.style.top = "100px";
                        menu.style.padding = "15px";
                    } else {
                        menu.style.top = "80px";
                        menu.style.padding = "15px 0px";
                    }
                }
            }
            
            function customScrollMenu() {
                const menu = document.querySelector(".custom-menu");
                menu.scrollBy({
                    left: 100, // Scroll by 100px to the right
                    behavior: "smooth"
                });
            }
            adjustMenuPosition();
            handleScroll();
            window.addEventListener("resize", adjustMenuPosition);
            window.addEventListener("scroll", handleScroll);
         </script>
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
         <section class="banner-three-area paralax__animation" style="background:#F2F5F8; background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="container">
               <div class="row align-items-center">
                  <div class="col-12 col-md-12 text-center text-md-left">
                     <p class="banner-tag wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms" style="text-transform: uppercase;color:#2B3857">Channel Partner</p>
                     <div class="banner-three__content text-left">
                        <h1 style="color:#2B3857;" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                       Most Trusted Real Estate CRM for Faster Growth

                        </h1>
                        <p style="color:#2B3857;" class="wow fadeInUp mb-30" data-wow-delay="800ms" data-wow-duration="2000ms">
                        PropFlo Real Estate CRM designed specifically for the real estate sector, and catering to the needs of real estate channel partners. From project management, leads handling, and client communications - all in one from a single platform. From automatically capturing leads from diverse sources to facilitating direct engagements via WhatsApp and optimizing team performance with actionable insights


                        </p>
                        <div class="input-field wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                           <div class="solutions-btn mt-30 mb-30">  
                              <a href="../contact" class="btn-nrml" style="color:#2B3857">Contact Us</a>
                              <a href="../demo" class="btn-propflo">Book a Demo</a>
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
         <section >
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <div class="section-header mb-25 text-center">
                     <h2 class="fw-600 splt-txt" data-splitting>
                        Drive Real Estate Success with Specialized <br>Channel Partners CRM
                     </h2>
                     <p>
                        Manage every aspect of your real estate projects and leads on one platform, ensuring effective communication and faster closures.
                     </p>
                  </div>
                  <!-- Section 1: Image First on Desktop -->
                  <div class="col-md-6 text-center order-1 order-md-1" id="po">
                     <img src="https://propflo.ai/assets/img/cpp/cpp1.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
                  <div class="col-md-6 order-2 order-md-2">
                     <div class="div-cont">
                        <h3 class="fw-bold mb-2 mt-4">Quickly Onboard and Manage Projects
                        </h3>
                        <ul class="feature-list">
                           <li>
                              Easily add new projects by pulling information from brochures, websites, or typing it in. 
                           </li>
                           <li> Manage everything from unit details, important documents and links, and the person in charge of each project.</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="lm">
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <!-- Section 2: Content First on Desktop -->
                  <div class="col-md-6 order-2 order-md-1">
                     <div class="div-cont">
                      <p class="fea-tag">Leads Management</p>
                        <h3 class="fw-bold mb-2">Manage All Your Leads from a Single Dashboard
                        </h3>
                        <ul class="feature-list">
                           <li> <strong> Lead Assignment :</strong>
                              Distribute leads efficiently based on rules such as community or response time, making sure no opportunity is missed.
                           </li>
                           <li>  <strong>Lead Routing/Pooling :</strong>
                              Ensure leads are managed promptly by assigning them to the appropriate agents without delay.
                           </li>
                           <li><strong>Lead Tagging :</strong>
                              Send the leads for tagging with builders on email and whatsapp.
                           </li>
                           <li><strong>IVR Telephony :</strong>
                              Connect instantly and engage with all your leads with IVR telephony integration with PropFlo CRM systems
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 text-center order-1 order-md-2">
                     <img src="https://propflo.ai/assets/img/cpp/cpp2.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
               </div>
            </div>
         </section>
         <section id="we">
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <!-- Section 5: Image First on Desktop -->
                  <div class="col-md-6 text-center order-1 order-md-1">
                     <img src="https://propflo.ai/assets/img/cpp/cpp6.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
                  <div class="col-md-6 order-2 order-md-2">
                     <div class="div-cont">
                     <p class="fea-tag">Marketing                     </p>
                      <h3 class="fw-bold mb-2">Stay Connected with Your Customers at Every Step
                        </h3>
                        <ul class="feature-list">
                           <li>  <strong>Comprehensive Management :</strong>
                              Manage all your marketing efforts, from project listing to creating engaging emails and whatsapp messages
                           </li>
                           <li>  <strong>Campaign Setup :</strong>
                              Automated email and Inbuilt Whatsapp campaigns based on predefined criteria, ensuring your messages reach the right clients at the right time.
                           </li>
                           <li> <strong> Workflow Automation :</strong>
                              Create automation rules with custom triggers, conditions, and actions to streamline your daily tasks and save valuable time. For example, automatically assign leads to agents, and auto-rotate or reassign them to other agents if there are delays in contacting a lead
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="si">
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <!-- Section 3: Image First on Desktop -->
                  <div class="col-md-6 text-center order-1 order-md-2">
                     <img src="https://propflo.ai/assets/img/cpp/int.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
                  <div class="col-md-6 order-2 order-md-1">
                     <div class="div-cont">
                        <h3 class="fw-bold mb-2 mt-4">Boost your efficiency with
                           integrations
                        </h3>
                        <ul class="feature-list">
                           <li>
                              PropFlo Seamlessly Integrate with Dozens of
                              Applications for Effortless Real Estate Management
                           </li>
                           <li> Social Media</li>
                           <li>IVR </li>
                           <li> Third Party Integration</li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>
         <section id="c">
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <!-- Section 4: Content First on Desktop -->
                  <div class="col-md-6 order-2 order-md-2">
                     <div class="div-cont">
                     <p class="fea-tag">Task Management</p>
                       <h3 class="fw-bold mb-2">Key Tasks and Stakeholder Management Simplified
                        </h3>
                        <ul class="feature-list">
                           <li>Start each day with a homepage that outlines key tasks.</li>
                           <li>Stay organized and productive at every step.</li>
                           <li>Easily manage multiple stakeholders within the same project.</li>
                           <li>Keep everyone aligned and tasks streamlined.</li>
                           <li> <strong>  Site Visit Management :</strong>
                              You can easily manage all site visits project wise, update the status and schedule in the PropFlo CRM Solution. 
                           </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 text-center order-1 order-md-1">
                     <img src="https://propflo.ai/assets/img/cpp/cpp4.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
               </div>
            </div>
         </section>
         <section id="dm">
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <!-- Section 5: Image First on Desktop -->
                  <div class="col-md-6 text-center order-1 order-md-2">
                     <img src="https://propflo.ai/assets/img/cpp/cpp5.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
                  <div class="col-md-6 order-2 order-md-1">
                     <div class="div-cont">
                     <p class="fea-tag">Deals Management
                     </p>
                      <h3 class="fw-bold mb-2">Assign, Manage, and Close Deals Faster with PropFlo CRM
                        </h3>
                        <ul class="feature-list">
                           <li>  <strong>  Deal Tracking : </strong>
                              Accurately monitor completed deals and commissions earned by both the company and individual agents.
                           </li>
                           <li><strong>  Unified deals overview : </strong>
                              Seamlessly record sales deals completed by agents, keeping all your transactions in one place.
                           </li>
                           <li><strong>  Deal Pipeline  : </strong>
                              Oversee  all your deals with pipeline stages and deal details to further make better enagements.
                           </li>
                        </ul>
                     </div>
                  </div>
               </div>
            </div>
         </section>


         <section>
            <div class="container py-5">
               <div class="row g-4 scroll-row">
                  <!-- Section 4: Content First on Desktop -->
                  <div class="col-md-6 order-2 order-md-2">
                     <div class="div-cont">
                     <p class="fea-tag">Reporting and Analytics                     </p>
                       <h3 class="fw-bold mb-2">Reporting and Analytics
                        </h3>
                        <ul class="feature-list">
                        Get out-of-the-box reports for a complete overview of your business. Generate detailed reports on agent leaderboard, lead sources, conversion rates, and more. Leverage these insights to make informed decisions, optimize strategies, and drive business growth.
<li> <strong>Leads Dashboard :</strong>
Identify top-performing lead sources, analyse supply-to-demand ratios, and discover the most popular locations.
        </li><li> <strong>Deals Dashboards :</strong>
Access critical performance data on your deals, empowering you to make informed business decisions.
        </li><li> <strong>Custom Reports :</strong>
Create tailored reports for agents, projects, locations, and property portals, ensuring you have the insights you need.
        </li>
                        </ul>
                     </div>
                  </div>
                  <div class="col-md-6 text-center order-1 order-md-1">
                     <img src="https://propflo.ai/assets/img/reports-dashboards/rp6.png" alt="Dashboard Image 1" class="img-fluid">
                  </div>
               </div>
            </div>
         </section>


   </div>
   </div>
   </div>
   </div>
   </section>
   <section class="crm ">
   <div class="container">
   <div class="row align-items-center">
   <div class="col-md-12 text-center">
   <div class="section-header mt-20 mb-20">
   <h2 class="fw-600  splt-txt" style="width:100%" data-splitting>
   Run Your Real Estate Business Anywhere with Our Mobile CRM App


   </h2>
   </div>
   <p>For Channel partners and agents on-the-go, our mobile app ensures they stay connected and productive. Receive assignment and reminder notifications to never miss out on important tasks, enhancing efficiency and responsiveness
   </p>
   </div>
   </div>
   </div>
   </section>
   <section class="start-now-area bg-image pt-50 pb-50" >
   <div class="container">
   <div class="section-header" id="cta" style="text-align:center">
   <h2 style="color:#08cf65" class="fw-600 wow splt-txt words chars splitting animated" data-splitting>Try PropFlo Real Estate CRM and Say Goodbye to Spreadsheets Forever!
   </h2>
   <a href="../demo" class="btn-white mt-15 wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">Get Started</a> 
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