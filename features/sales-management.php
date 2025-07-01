<?php
   session_start();
   
  
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>
    <!-- Sales Management CRM Software and Tools 2024 | PropFlo -->
    <title>Sales Management CRM Software and Tools 2024 | PropFlo</title>
    <meta name="title" content="Sales Management CRM Software and Tools 2024 | PropFlo">
    <meta name="description"
        content="Enhance your sales with PropFlo, the AI-powered CRM designed for real estate developers and builders. Increase closures and efficiency today!">


    <?php
      include('head.php');
       
       ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- propFlo Feature css -->
    <link rel="stylesheet" href="../assets/css/features.css">


    <style>
    /* Button Styling */
    .arrow-btn {
        display: inline-flex;
        align-items: center;

        font-size: 16px;
        font-weight: bold;

        text-decoration: none;
        border-radius: 5px;
        transition: background 0.3s ease-in-out;
    }

    /* Hover effect */
    .read-more-prop:hover {
        text-decoration: underline;

    }



    /* Arrow image styling */
    .arrow-icon {
        width: 20px;
        /* Adjust size */
        height: auto;
        margin-left: 8px;
        /* Spacing between text and arrow */
    }

    /* Optional: Add margin-top */
    .mt-20 {
        margin-top: 20px;
        display: inline-block;
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
            <div class="lm-menu mb-20">
                <div class="custom-menu">
                    <a href="#" style="text-decoration:underline">Sales Management</a>
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
            <section class="banner-three-area paralax__animation"
                style="background:#04454D; background-size: cover; background-repeat: no-repeat; background-position: center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-sm-12">
                            <p class="banner-tag wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms"
                                style="text-transform: uppercase;">Sales Management</p>
                            <div class="banner-three__content text-center">
                                <h1 style="color:#fff;" class="wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    Most Trusted Real Estate Sales Automation CRM

                                </h1>
                                <p style="color:#fff;" class="wow fadeInUp mb-30" data-wow-delay="800ms"
                                    data-wow-duration="2000ms">
                                    Implement our Real Estate CRM to Increase Employee Productivity, Grow Sales,
                                    Automate Communication and Drip Marketing.


                                </p>
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
                    <h2 class="fw-600 wow splt-txt" data-splitting>Increase your Sales Efficiency with PropFlo's
                        End-to-End Sales Management CRM software
                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        From automation and pipeline customization to real-time inventory control, PropFlo equips your
                        team to optimize every step of the sales process.
                    </p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/sales-management/sm1.png" alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-1" class="lmcont">
                                    <p class="fea-tag">Workflow Automation
                                    </p>
                                    <h3 class="fw-bold mb-15">Automate Workflows, Perform Task and Business Processes
                                        With No Need Of Human Input

                                    </h3>
                                    <p> What if your team can concentrate only on big wins? This is possible with
                                        PropFlo’s workflow automation; it replaces manual processes with automated ones,
                                        increases productivity for entire sales and marketing workflows with zero
                                        errors, and sets the stage for intelligent decision-making.
                                    </p>
                                    <p>
                                        Think about it: How much more could your team achieve if routine approvals,
                                        follow-ups, and updates happen automatically? Whether you’re dealing with slow
                                        approvals and large data entry tasks, workflow automation transforms these pain
                                        points into opportunities for real estate growth.
                                    </p>
                                    <a href="../contact" class="read-more-prop mt-4">
                                        See it in action now
                                        <img src="../assets/img/icons/arw.png" alt="arrow" class="arrow-icon">
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-2 order-md-2">
                                <div id="section-2" class="lmcont">
                                    <p class="fea-tag">Automated Follow-ups
                                    </p>
                                    <h3 class="fw-bold mb-15">Unlock Automated Follow-Up Workflows and Increase Sales
                                        Conversions

                                    </h3>
                                    <p>With follow-up automation, provide instant response when a prospect expresses
                                        interest. Even if your sales team is occupied with workload or on leave with
                                        automation, you can communicate with leads and provide content like brochures,
                                        floor or unit plans, property tour videos and the most common pricing-related
                                        details prospects want to know before they move forward.
                                    </p>
                                    <a href="../contact" class="read-more-prop mt-4">
                                        See it in action now
                                        <img src="../assets/img/icons/arw.png" alt="arrow" class="arrow-icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 order-1 order-md-1">
                                <img class="img-fluid" src="../assets/img/sales-management/sm2.png" alt="Dynamic Image">
                            </div>
                        </div>
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/sales-management/sm3.png" alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-3" class="lmcont">
                                    <p class="fea-tag">Sales Pipeline Management

                                    </p>
                                    <h3 class="fw-bold mb-15">Take Your Sales To The Next Level and Close More Deals
                                        with Pipeline Management
                                    </h3>
                                    <p>With PropFlo sales management crm, you can setup and manage the pipeline for
                                        leads and deals and customize the stages as per your business goals. Also, you
                                        can track and maintain the flow of each lead and deal in the pipeline stagewise
                                    </p>
                                    <a href="../contact" class="read-more-prop mt-4">
                                        See it in action now
                                        <img src="../assets/img/icons/arw.png" alt="arrow" class="arrow-icon">
                                    </a>
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

    <div class="container-fluid section-background mt-20">
        <div class="container">
            <!-- Main Heading -->
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-10">CRM Software for Sales Pipeline Management
                </h2>
                <p>Track sales and real estate inventory at project, tower and unit levels in real time, manage site
                    visits and generate customized cost sheets with PropFlo’s sales management system.

                </p>
            </div>
            <!-- Tab Navigation -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="dashboardTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="collaboration-tab" data-bs-toggle="tab"
                        data-bs-target="#collaboration" type="button" role="tab" aria-controls="collaboration"
                        aria-selected="false">Inventory Availability/Booking/Blocking
                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="visibility-tab" data-bs-toggle="tab" data-bs-target="#visibility"
                        type="button" role="tab" aria-controls="visibility" aria-selected="false">Site Visit Management
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="customization-tab" data-bs-toggle="tab" data-bs-target="#customization"
                        type="button" role="tab" aria-controls="customization" aria-selected="true">Cost Sheet
                        Generator/Sharing
                    </button>
                </li>

            </ul>
            <!-- Tab Content Area -->
            <div class="tab-content">
                <!-- Visibility Content -->


                <!-- Collaboration Content -->
                <div class="tab-pane fade show active" id="collaboration" role="tabpanel"
                    aria-labelledby="collaboration-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Inventory Management

                                </p>
                                <h3 class="fw-bold mb-20">Real-Time Inventory Management for Peak Sales Performance

                                </h3>
                                <p>You can be on top of your real estate inventory with PropFlo real estate crm, keeping
                                    up-to-date with any unit availability, instant booking, and blocking units to avoid
                                    overlaps. It will help to utilize the inventory in an efficient way and maintain the
                                    accuracy status in the availability column to make the sales team job easier and
                                    bring home more sales. and manage from anywhere using a central cloud-based real
                                    estate inventory management platform.
                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">

                            <video autoplay loop muted playsinline style="width:100%">
                                <source src="../assets/img/videos/sm.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>




                <div class="tab-pane fade" id="visibility" role="tabpanel" aria-labelledby="visibility-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Site Visit Management
                                </p>
                                <h3 class="fw-bold mb-20">Automate Site Visit Scheduling and Tacking with PropFlo Sales
                                    CRM
                                </h3>
                                <p>Real Estate CRM makes managing site visits a breeze—from site visit scheduling to
                                    tracking. everything in one system with zero error and ensuring you won't lose
                                    potential clients. With PropFlo crm you can enhance the customer experience, time
                                    efficiency and deal closure rate.
                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/sales-management/sm4.png" alt="Visibility Dashboard"
                                class="img-fluid">
                        </div>
                    </div>
                </div><!-- Customization Content -->
                <div class="tab-pane fade" id="customization" role="tabpanel" aria-labelledby="customization-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Cost Sheet generation
                                </p>
                                <h3 class="fw-bold mb-20">Bulk Cost Sheet Generation with customization and Sharing for
                                    Faster Decisions
                                </h3>
                                <p>The real estate cost sheet provides insights into products or services. With the
                                    PropFlo sales management crm, you can quickly create customized cost sheets and
                                    share detailed cost breakdowns in bulk. helping prospective buyers make informed
                                    decisions faster. This feature promotes transparency and builds trust with your
                                    clients.
                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/sales-management/sm5.png" alt="Customization Dashboard"
                                class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
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