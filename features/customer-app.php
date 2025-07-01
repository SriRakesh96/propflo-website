<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<head>
   
   
   
<!-- Real Estate Customer Portal 2024 | PropFlo -->
<title>Real Estate Customer Portal 2024 | PropFlo</title>
<meta name="title" content="Real Estate Customer Portal 2024 | PropFlo">
<meta name="description" content="Share real-time property updates and communicate with customers using PropFlo's customer portal for real estate management. Book a demo today!">


<?php
      include('head.php');
       
       ?>
   <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
   <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
      <!-- propFlo Feature css -->
      <link rel="stylesheet" href="../assets/css/features.css">
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
         <div class="lm-menu mb-20">
            <div class="custom-menu">
               <a href="#" style="text-decoration:underline">Lead Management</a>
               <a href="#" class="custom-section-item">Call Centre Management</a>
               <a href="#" class="custom-section-item" style="padding-right: 30px;">Workflow Automation</a>
            </div>
            <div class="custom-arrow-right" onclick="customScrollMenu()">
               &rarr;
            </div>
         </div>
         <script>
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
                    menu.style.top = window.innerWidth <= 768 ? "70px" : "0px";
                    menu.style.paddingTop = "15px";
                } else {
                    if (window.innerWidth <= 768) {
                        menu.style.top = "60px";
                        menu.style.padding = "15px";
                    } else {
                        menu.style.top = "120px";
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
         <section class="banner-three-area paralax__animation" style="background:#04454D; background-size: cover; background-repeat: no-repeat; background-position: center;">
            <div class="container">
               <div class="row align-items-center">
               <div class="col-lg-12 col-sm-12">
                     <p class="banner-tag wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms" style="text-transform: uppercase;">Customer Portal/App</p>
                     <div class="banner-three__content text-center">
                        <h1 style="color:#fff;" class="wow fadeInUp" data-wow-delay="400ms" data-wow-duration="1500ms">
                        Empowering Clients with a Comprehensive Self Serve

                        </h1>
                        <p style="color:#fff;" class="wow fadeInUp mb-30" data-wow-delay="800ms" data-wow-duration="2000ms">
                        PropFlo’s customer portal offers clients a seamless self-service experience with access to personalized dashboards, real-time project updates, transparent payment schedules, instant payment receipts, and centralized document management. Elevate client engagement, boost satisfaction, and ensure effortless access to all essential property information. </p>
                        <div class="input-field wow fadeInUp" data-wow-delay="700ms" data-wow-duration="1500ms">
                           <div class="solutions-btn mt-30 mb-30">  
                           <a href="../contact" class="btn-nrml" style="color:#fff">Contact Us</a>
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
         <div class="container">
            <div class="section-header mt-20 mb-20 text-center">
               <h2 class="fw-600 wow splt-txt" data-splitting>Share Real time Property updates with your Customers from PropFlo's Property Management CRM Solution
               </h2>
               <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
               PropFlo revolutionizes real estate management by providing clients with an intuitive dashboard for a comprehensive view of their property investments. This personalized portal enhances client engagement through real-time project updates, flexible payment schedules, and centralized document management, ensuring transparency and satisfaction at every step of their journey. </p>
            </div>
            <div class="container-fluid">
               <div class="row">
                  <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                     <div class="col-md-6 col-12 order-1 order-md-2">
                        <img class="img-fluid" src="../assets/img/customer-app/ca1.png" alt="Dynamic Image">
                     </div>
                     <div class="col-md-6 col-12 order-2 order-md-1">
                        <div id="section-1" class="lmcont">
                           <h3 class="fw-bold mb-15">Personalized Client Dashboards for Easy Access</h3>
                           <p>Customer Interaction with a personalized, interactive dashboard that offers a clear overview of their property details, payments, project milestones, and communication history. Enhance client engagement with quick access to essential information and status updates.

                           </p>
                        </div>
                     </div>
                  </div>
                  <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                     <div class="col-md-6 col-12 order-2 order-md-2">
                        <div id="section-2" class="lmcont">
                        <h3 class="fw-bold mb-15">Stay Informed with Real-Time Project Updates
                           </h3>
                           <p>Keep your clients informed about project progress with timely updates on construction milestones, approvals, and other key developments. PropFlo ensures transparency and builds trust by delivering up-to-date project information right to your customers.     </p>
                       
                        </div>
                     </div>
                     <div class="col-md-6 col-12 order-1 order-md-1">
                        <img class="img-fluid" src="../assets/img/customer-app/ca2.png" alt="Dynamic Image">
                     </div>
                  </div>
                  <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                     <div class="col-md-6 col-12 order-1 order-md-2">
                        <img class="img-fluid" src="../assets/img/customer-app/ca3.png" alt="Dynamic Image">
                     </div>
                     <div class="col-md-6 col-12 order-2 order-md-1">
                        <div id="section-3" class="lmcont" >
                        <h3 class="fw-bold mb-15">Transparent and Flexible Payment Schedules</h3>
                           <p>Offer clients a clear view of their customized payment schedules, including upcoming payments and due dates. PropFlo's customer portal ensures transparency, helps clients stay on track with their commitments, and enhances payment reliability.</p>
                        </div>
                     </div>
                  </div>




                  <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                     <div class="col-md-6 col-12 order-2 order-md-2">
                        <div id="section-2" class="lmcont">
                        <h3 class="fw-bold mb-15">Instant Access to Payment Receipts

</h3>
<p>Clients can access and download their payment receipts directly from the portal, ensuring accuracy, transparency, and easy record-keeping for all completed transactions.

</p>
</div>
                     </div>
                     <div class="col-md-6 col-12 order-1 order-md-1">
                        <img class="img-fluid" src="../assets/img/customer-app/ca4.png" alt="Dynamic Image">
                     </div>
                  </div>
                 


                  <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                  <div class="col-md-6 col-12 order-1 order-md-2 ratio-16x9">
                        <img class="img-fluid" src="../assets/img/customer-app/ca5.png"  srcset="../assets/img/customer-app/ca5.png 2x"  alt="Dynamic Image">
                     </div>
                     
                     
                     <div class="col-md-6 col-12 order-2 order-md-1">
                        <div id="section-2" class="lmcont">
                        <p class="fea-tag">Accessible Customer Portal for Real Estate</p>
                        
                        <h3 class="fw-bold mb-15">Centralized Document Management for Clients
        </h3>
                           <p>PropFlo’s customer portal provides clients with easy access to all relevant documents, including agreements, receipts, and project files. This ensures seamless document retrieval and enhances client convenience and satisfaction.
                           </p>
                        </div>
                     </div>
                     
                  </div>

                  
                


               </div>
            </div>
         </div>
         <script>
            /*   
               const dynamicImage = document.getElementById('dynamic-image');
               const sections = document.querySelectorAll('.content-section');
               const images = [
                 '../assets/img/lead-management/lm1.png',
                 '../assets/img/lead-management/lm2.png',
                 '../assets/img/lead-management/lm3.png',
               
               ];
               
             
               window.addEventListener('scroll', () => {
                 sections.forEach((section, index) => {
                   const rect = section.getBoundingClientRect();
                   if (rect.top >= 0 && rect.top < window.innerHeight / 2) {
                     dynamicImage.src = images[index];
                   }
                 });
               });*/
         </script>
         <!-- <div class="container" id="mob-scroll">
            <div class="row mb-4" id="scroll-item">
               <div class="col-md-6 text-center">
                  <img src="../assets/img/lm/lm1.png" alt="Dashboard Image 1" class="img-fluid2">
               </div>
               <div class="col-md-6">
                  <div class="div-cont">
                     <h3 class="fw-bold mb-15">Centralized lead capture across all channels</h3>
                     <p>PropFlo's lead capture forms seamlessly integrate with live chat, landing pages, social media, search campaigns and property portals(99acres, magicbricks, housing,com and many more) automatically gather all leads in one place for easy viewing and tracking, ensuring instant responses to keep real estate buyers and investors engaged
                     </p>
                  </div>
               </div>
            </div>
            
            <div class="row mb-4" id="scroll-item">
               <div class="col-md-6 text-center">
                  <img src="../assets/img/lm/lm2.png" alt="Dashboard Image 2" class="img-fluid2">
               </div>
               <div class="col-md-6">
                  <div class="div-cont">
                     <h3 class="fw-bold mb-15">Lead Scoring for Optimized Conversion Potential</h3>
                     <p>PropFlo’s lead scoring algorithm uses AI to rank potential customers by their likelihood to convert, based on their interactions and behavior.</p>
                  </div>
               </div>
            </div>
            
            <div class="row mb-4" id="scroll-item">
               <div class="col-md-6 text-center">
                  <img src="../assets/img/lm/lm3.png" alt="Dashboard Image 3" class="img-fluid2">
               </div>
               <div class="col-md-6">
                  <div class="div-cont">
                     <h3 class="fw-bold mb-15">Lead Insights for Targeted conversations</h3>
                     <p>PropFlo provides AI-researched lead information including their keywords, professional and personal details, social feeds, and more to generate the perfect conversation. 
                     </p>
                  </div>
               </div>
            </div>
            </div> -->
   </div>
   <div class="scroll-btn mb-50" id="scrl-btn">
   <div class="solutions-btn mt-50">  
   <a href="../contact" class="btn-propflog">Contact Us</a>
   
   <a href="../demo" class="btn-propflo">Book a Demo</a>

   </div>
   </div>
  
  <!--
   <div class="container-fluid section-background">
   <div class="container">
 
   <div class="text-center mb-4">
   <h2 class="fw-bold mb-10">Streamline Sales Efficiency with PropFlo: Assign, Segment, and Resolve Leads Effectively
   </h2>
   <p>PropFlo Automates lead distribution, optimizes targeted marketing, and resolves lead conflicts efficiently.</p>
   </div>
   
   <ul class="nav nav-tabs justify-content-center mb-4" id="dashboardTabs" role="tablist">
   <li class="nav-item" role="presentation">
   <button class="nav-link active" id="visibility-tab" data-bs-toggle="tab" data-bs-target="#visibility" type="button" role="tab" aria-controls="visibility" aria-selected="false">Lead Conflict for CP and other sources 
   </button>
   </li>
   <li class="nav-item" role="presentation">
   <button class="nav-link" id="customization-tab" data-bs-toggle="tab" data-bs-target="#customization" type="button" role="tab" aria-controls="customization" aria-selected="true">Lead Assignment Rule</button>
   </li>
   <li class="nav-item" role="presentation">
   <button class="nav-link" id="collaboration-tab" data-bs-toggle="tab" data-bs-target="#collaboration" type="button" role="tab" aria-controls="collaboration" aria-selected="false">Lead segmentation</button>
   </li>
   </ul>
 
   <div class="tab-content">
  
   <div class="tab-pane fade" id="visibility" role="tabpanel" aria-labelledby="visibility-tab">
   <div class="row align-items-center">
   <div class="col-md-6">
   <div class="dashboards-cont">
   <h3 class="fw-bold mb-20">Conflict Resolution for Multi-Source Leads</h3>
   <p>PropFlo ensures seamless lead management by detecting and resolving conflicts when multiple channel partners or sources generate the same lead. This prevents duplication, maintains lead integrity, and ensures proper attribution, so your sales teams can focus on qualified prospects without confusion or overlapping efforts.
   </p>
    <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
   </div>
   </div>
   <div class="col-md-6 text-center">
   <img src="../assets/img/lm/lm6.png" alt="Visibility Dashboard" class="img-fluid">
   </div>
   </div>
   </div>
   <div class="tab-pane fade show active" id="customization" role="tabpanel" aria-labelledby="customization-tab">
   <div class="row align-items-center">
   <div class="col-md-6">
   <div class="dashboards-cont">
   <h3 class="fw-bold mb-20">Automated leads distribution to your Sales team members</h3>
   <p>Leads and Opportunities are distributed to appropriate sales representatives based on certain user-set criteria.
   </p>
    <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
   </div>
   </div>
   <div class="col-md-6 text-center">
   <img src="../assets/img/lm/lm4.png" alt="Customization Dashboard" class="img-fluid">
   </div>
   </div>
   </div>
  
   <div class="tab-pane fade" id="collaboration" role="tabpanel" aria-labelledby="collaboration-tab">
   <div class="row align-items-center">
   <div class="col-md-6">
   <div class="dashboards-cont">
   <h3 class="fw-bold mb-20">Advanced leads segmentation for a personalized marketing
   </h3>
   <p>Lead segmentation is an important part of every targeting strategy today and helps you market and sell to customers in a way that will help them truly relate with your brand. PropFlo allows you to segment leads based on a number of attributes so you can send them emails, SMS and Whatsapps in a way that they are most likely to engage with.</p>
    <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
   </div>
   </div>
   <div class="col-md-6 text-center">
   <img src="../assets/img/lm/lm5.png" alt="Collaboration Dashboard" class="img-fluid">
   </div>
   </div>
   </div>
   </div>
   </div>
   </div> -->
   <!-- <div class="container dashboard-feature-section">
      <div class="container text-center mb-5">
         <h2 class="fw-bold big-head">Streamline Real Estate with PropFlo's Automation, Kanban, and Smart Lead Management!</h2>
         <p>Real Estate CRM automation, workflows, and in-depth analytics.
            Manage opportunities with a visual board that displays the progress and status of each item and views statistics on all tasks.
         </p>
      </div>
      <div class="swiper-container">
         <div class="swiper-wrapper">
         
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/1.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Kanban Workflow Visualization
                  </h3>
                  <p class="dashboard-feature-description">Manage your real estate leads easily using a Kanban board that gives their visually arranged profiles in open, won, and lost stages.</p>
               </div>
            </div>
          
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/2.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Custom Filtering and Sorting
                  </h3>
                  <p class="dashboard-feature-description">Filter and sort leads according to custom rules so that your real estate CRM only shows the most relevant information based on your workflow.
                  </p>
               </div>
            </div>
          
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/3.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Kanban Customizable Profiles
                  </h3>
                  <p class="dashboard-feature-description">Personalize the information that displays with your Kanban profiles to stay in line with your real estate CRM system requirements.</p>
               </div>
            </div>
         
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/4.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Aggregate Calculations
                  </h3>
                  <p class="dashboard-feature-description">Calculate the sum, median, and mean of your real estate data, categorized, at a glance to enable intelligent decisions.
                  </p>
               </div>
            </div>
          
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/5.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Quick Meeting Scheduling</h3>
                  <p class="dashboard-feature-description">Schedule meetings right out of the lead profile in your real estate CRM, streamlining your real estate lead management strategy.</p>
               </div>
            </div>
        
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/6.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Flexible Lead Assignment </h3>
                  <p class="dashboard-feature-description">Assign leads automatically, in a specific order, or manually, optimizing your real estate lead management strategy. 
                  </p>
               </div>
            </div>
           
            <div class="swiper-slide col-md-4">
               <div class="dashboard-feature-card">
                  <div class="dashboard-feature-icon">
                     <img src="../assets/img/lead-management/lm-icons/7.png" class="ico">
                  </div>
                  <h3 class="dashboard-feature-title">Automated Marketing Notifications 
                  </h3>
                  <p class="dashboard-feature-description">Create the rules within your real estate CRM that trigger marketing notifications based on lead gestures, all with the goal in mind.
                  </p>
               </div>
            </div>
         </div>
         <div class="mt-60 mb-60">
            <div class="swiper__info">
               <button class="testimonial-three__arry-prev"><i
                  class="fa-regular fa-arrow-left-long"></i></button>
               <div class="dot testimonial-three__dot"></div>
               <button class="testimonial-three__arry-next active"><i
                  class="fa-regular fa-arrow-right-long"></i></button>
            </div>
         </div>
      </div>
      </div> -->
   <script>
      const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        spaceBetween: 30,
        loop: true,
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        pagination: {
      el: ".testimonial-three__dot",
      clickable: true,
      },
      navigation: {
      nextEl: ".testimonial-three__arry-next",
      prevEl: ".testimonial-three__arry-prev",
      },
        breakpoints: {
          768: { 
            slidesPerView: 3,
          },
          0: { 
            slidesPerView: 1,
          },
        },
      });
      
   </script>
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