<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>

    <!-- Marketing Automation CRM Software for Real Estate | PropFlo -->
    <title>Marketing Automation CRM Software for Real Estate | PropFlo</title>
    <meta name="title" content="Marketing Automation CRM Software for Real Estate | PropFlo">
    <meta name="description"
        content="Automate WhatsApp and email campaigns, offline tracking, and EOI lead management with PropFlo's marketing automation CRM for real estate.">

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
            <section class="banner-three-area paralax__animation"
                style="background:#04454D; background-size: cover; background-repeat: no-repeat; background-position: center;">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-lg-12 col-sm-12">
                            <p class="banner-tag wow fadeInLeft" data-wow-delay="400ms" data-wow-duration="1500ms"
                                style="text-transform: uppercase;">Marketing Automation</p>
                            <div class="banner-three__content text-center">
                                <h1 style="color:#fff;" class="wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    Turn Your Prospects Into Customers With Intelligent Marketing Automation
                                </h1>
                                <p style="color:#fff;" class="wow fadeInUp mb-30" data-wow-delay="800ms"
                                    data-wow-duration="2000ms">
                                    With PropFlo’s marketing automation CRM, you can do segmentation of the leads,
                                    automate communication, nurture and re-target leads through PropFlo’s built-in
                                    WhatsApp and drip email campaigns.


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
                    <h2 class="fw-600 wow splt-txt" data-splitting>Save Time, Increase Marketing ROI with Smart CRM
                        Automation.

                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        For real estate success, you need to cover all your customer touchpoints and be one step ahead
                        of the competition. With Propflo’s real estate marketing automation, you can make sure no leads
                        communication is missed from the top, middle and bottom of the funnel and instant lead
                        engagement with AI Sales Assistant.

                    </p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/marketing-automation/ma1.png"
                                    alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-1" class="lmcont">
                                    <p class="fea-tag">Built-In Whatsapp</p>
                                    <h3 class="fw-bold mb-15">Nurture Relationships Throughout The Customer Journey From
                                        New Leads to Loyal Customers

                                    </h3>
                                    <p>Build brand awareness from personalized marketing conversations by providing the
                                        correct information about your business to prospects instantly and driving more
                                        sales, insuring maximum response rates. Also, you can do bulk WhatsApp marketing
                                        campaigns, automate communication, WhatsApp nurture, re-engage leads, track
                                        every interaction with leads, and measure WhatsApp marketing campaign
                                        performance in the PropFlo CRM system.

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
                                    <p class="fea-tag">Email Marketing Automations</p>

                                    <h3 class="fw-bold mb-15">Connect with Potential Customers, Promote Products and
                                        Build Stronger Relationships.

                                    </h3>
                                    <p>Create and automate email marketing campaigns with personalized messaging. With
                                        marketing automation, you can automate workflows, nurture leads via drip emails
                                        in bulk, and optimize the campaign management. Deliver engaging content, track
                                        all your emails and responses with dashboard metrics, and optimize email
                                        campaigns for better results.
                                    </p>
                                    <a href="../contact" class="read-more-prop mt-4">
                                        See it in action now
                                        <img src="../assets/img/icons/arw.png" alt="arrow" class="arrow-icon">
                                    </a>



                                </div>
                            </div>
                            <div class="col-md-6 col-12 order-1 order-md-1">
                                <img class="img-fluid" src="../assets/img/marketing-automation/ma2.png"
                                    alt="Dynamic Image">
                            </div>
                        </div>
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/marketing-automation/ma3.png"
                                    alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-3" class="lmcont">
                                    <p class="fea-tag">Tracking Offline Campaigns</p>
                                    <h3 class="fw-bold mb-15">Tracking Offline Real Estate Campaigns and Driving
                                        Business Growth.
                                    </h3>
                                    <p>Real-time tracking and monitoring of offline marketing campaigns is a critical
                                        aspect for business growth. You can track all your offline marketing
                                        initiatives, such as print media or events and direct walk-ins for a real estate
                                        project, by simply using QR code functionality, and all details will be directly
                                        flow into the Propflo CRM. More interestingly, you can create and customize the
                                        lead forms, sources, and sub-sources as per the business requirement to ensure
                                        uniformity across channels and lead attribution.
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
                                    <p class="fea-tag">AI Sales Assistant</p>

                                    <style>
                                    .text-container {
                                        position: relative;
                                        height: 30px;
                                        /* Adjust height based on text size */
                                        overflow: hidden;
                                        display: inline-block;
                                        white-space: nowrap;
                                        /* Prevents text from breaking into multiple lines */
                                        width: max-content;
                                        /* Ensures it adjusts to the longest text */
                                    }

                                    .fw-bold span {
                                        display: inline !important;
                                    }

                                    .text-slide {
                                        position: absolute;
                                        opacity: 0;
                                        color: #08CF65;
                                        animation: slideUp 5s infinite;
                                        width: 100%;
                                        white-space: nowrap;
                                        /* Ensures text stays in one line */
                                    }

                                    @keyframes slideUp {

                                        0%,
                                        10% {
                                            opacity: 0;
                                            transform: translateY(20px);
                                        }

                                        20%,
                                        30% {
                                            opacity: 1;
                                            transform: translateY(0);
                                        }

                                        40%,
                                        100% {
                                            opacity: 0;
                                            transform: translateY(-20px);
                                        }
                                    }

                                    /* Adjust delays so texts do not overlap */
                                    .text-slide:nth-child(1) {
                                        animation-delay: 2s;
                                    }

                                    .text-slide:nth-child(2) {
                                        animation-delay: 4s;
                                    }

                                    .text-slide:nth-child(3) {
                                        animation-delay: 6s;
                                    }

                                    .text-slide:nth-child(4) {
                                        animation-delay: 8s;
                                    }

                                    .text-slide:nth-child(5) {
                                        animation-delay: 10s;
                                    }
                                    </style>

                                    </style>
                                    <h3 class="fw-bold mb-15">
                                        The expert AI sales assistant for<br> 24x7 better &nbsp;
                                        <span class="text-container">
                                            <span class="text-slide">Conversions</span>
                                            <span class="text-slide">Conversations</span>
                                            <span class="text-slide">Customer insights</span>
                                            <span class="text-slide">Revenue insights</span>
                                            <span class="text-slide">Productivity</span>
                                        </span>
                                    </h3>

                                    <p>With PropFlo’s AI sales assistant, you will be
                                        Able to respond to leads instantly 24x7—no downtime, no missed chances
                                        Personalized engagement and qualify them effectively
                                        Get prospective customer insights and schedule site visits automatically
                                        <br>
                                        Even when your team is on leave or busy, PropFlo's AI Sales Assistant keeps your
                                        sales pipeline active!
                                    </p>
                                    <a href="../contact" class="read-more-prop mt-4">
                                        See it in action now
                                        <img src="../assets/img/icons/arw.png" alt="arrow" class="arrow-icon">
                                    </a>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 order-1 order-md-1">
                                <img class="img-fluid" src="../assets/img/marketing-automation/ma5.png"
                                    alt="Dynamic Image">
                            </div>
                        </div>
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/marketing-automation/ma6.png"
                                    alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-3" class="lmcont">
                                    <p class="fea-tag">PropFlo AI Content Generator</p>
                                    <h3 class="fw-bold mb-15">Generate High-Quality Marketing Content, Copy with AI for
                                        Better Conversations

                                    </h3>
                                    <p>Use AI to generate unique and engaging human-like content and templates for
                                        emails, messages, followups, conversations and other marketing collateral and
                                        save time with PropFlo AI Content generator.
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

            <!--    <div class="container" id="mob-scroll">
             
               <div class="row mb-4" id="scroll-item">
                  <div class="col-md-6 text-center">
                     <img src="../assets/img/lead-management/lm1.png" alt="Dashboard Image 1" class="img-fluid2">
                  </div>
                  <div class="col-md-6">
                     <div class="div-cont">
                     <h3 class="fw-bold mb-15">Engage Clients with Targeted WhatsApp Campaigns
                     </h3>
                     <p>Use tailored WhatsApp campaigns to connect with leads instantly. Track every enquiry and interaction in real-time, ensuring seamless communication and maximizing response rates to drive real estate sales.

                     </p>
                     </div>
                  </div>
               </div>
             
               <div class="row mb-4" id="scroll-item">
                  <div class="col-md-6 text-center">
                     <img src="../assets/img/lead-management/lm2.png" alt="Dashboard Image 2" class="img-fluid2">
                  </div>
                  <div class="col-md-6">
                     <div class="div-cont">
                     <h3 class="fw-bold mb-15">Drive Conversions with Personalized Email Campaigns
                     </h3>
                     <p>Create and manage email campaigns tailored to different segments of your real estate audience. Deliver engaging content, track responses, and optimize campaigns for maximum engagement and lead nurturing.
                     </p> </div>
                  </div>
               </div>
              
               <div class="row mb-4" id="scroll-item">
                  <div class="col-md-6 text-center">
                     <img src="../assets/img/lead-management/lm3.png" alt="Dashboard Image 3" class="img-fluid2">
                  </div>
                  <div class="col-md-6">
                     <div class="div-cont">
                     <h3 class="fw-bold mb-15">Seamlessly Track Offline Real Estate Campaigns
                     </h3>
                     <p>Monitor and analyze the performance of offline marketing initiatives, such as events or print ads. PropFlo integrates these campaigns into your CRM to ensure complete visibility and lead attribution.

                     </p>
                     </div>
                  </div>
               </div>

            
                 <div class="row mb-4" id="scroll-item">
                  <div class="col-md-6 text-center">
                     <img src="../assets/img/lead-management/lm3.png" alt="Dashboard Image 3" class="img-fluid2">
                  </div>
                  <div class="col-md-6">
                     <div class="div-cont">
                     <h3 class="fw-bold mb-15">Capture Leads 24/7 with Smart Web Bots

</h3>
<p>Use AI-powered web bots to engage website visitors, capture lead information, and provide instant responses, increasing engagement and conversion opportunities for your real estate business.


</p>
                     </div>
                  </div>
               </div>


              
                 <div class="row mb-4" id="scroll-item">
                  <div class="col-md-6 text-center">
                     <img src="../assets/img/lead-management/lm3.png" alt="Dashboard Image 3" class="img-fluid2">
                  </div>
                  <div class="col-md-6">
                     <div class="div-cont">
                     <h3 class="fw-bold mb-15">Generate High-Quality Marketing Content Effortlessly

</h3>
<p>Leverage AI to create content and templates for emails, messages, and other marketing collateral. Ensure consistent, compelling communication with minimal effort, saving time and enhancing brand impact.


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
                <h2 class="fw-bold mb-10">Move From Conversations to Communication with Real Marketing Automation Tools

                </h2>
                <p>Optimising Real Estate Business Efficiency with Relevant Messaging on Auto-Pilot
                </p>
            </div>
            <!-- Tab Navigation -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="dashboardTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="customization-tab" data-bs-toggle="tab"
                        data-bs-target="#customization" type="button" role="tab" aria-controls="customization"
                        aria-selected="true">Communication Automation</button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="collaboration-tab" data-bs-toggle="tab" data-bs-target="#collaboration"
                        type="button" role="tab" aria-controls="collaboration" aria-selected="false">EOI (Expression of
                        Interest)
                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="visibility-tab" data-bs-toggle="tab" data-bs-target="#visibility"
                        type="button" role="tab" aria-controls="visibility" aria-selected="false">CRM Retargeting Based
                        on Lost Reason


                    </button>
                </li>
            </ul>
            <!-- Tab Content Area -->
            <div class="tab-content">
                <!-- Customization Content -->
                <div class="tab-pane fade show active" id="customization" role="tabpanel"
                    aria-labelledby="customization-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Communication Automation</p>
                                <h3 class="fw-bold mb-20">Communication Automation in Real Estate Marketing
                                </h3>
                                <p>In real estate marketing, staying competitive requires more than just traditional
                                    methods. With PropFlo marketing automation, you can automate the personalized
                                    messaging across the multiple channels like WhatsApp, Email and chatbots to ensure
                                    instant engagement and follow-ups to build better customer relationships with
                                    prospective customers and clients.

                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/marketing-automation/ma7.png" alt="Customization Dashboard"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Collaboration Content -->
                <div class="tab-pane fade" id="collaboration" role="tabpanel" aria-labelledby="collaboration-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">EOI & Launch Campaigns
                                </p>
                                <h3 class="fw-bold mb-20">Run EOI Campaigns with Confidence and Handle Launches with
                                    Priority access.

                                </h3>
                                <p>PropFlo automates the entire token system with priority access right from
                                    registrations, assigning the token number, restricted access, appointment
                                    scheduling, payments and remainders to keep prospective customers engaged during the
                                    entire process.
                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <video playsinline autoplay loop muted width="100%" style="border-radius: 12px;
    border: 2px solid #f3f4f6;">
                                <source src="../assets/img/videos/eoi.mp4" type="video/mp4">
                                Your browser does not support the video tag.
                            </video>
                        </div>
                    </div>
                </div>
                <!-- Visibility Content -->
                <div class="tab-pane fade " id="visibility" role="tabpanel" aria-labelledby="visibility-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">CRM Retargeting
                                </p>
                                <h3 class="fw-bold mb-20">Re-Engage Customers with CRM Retargeting strategies
                                </h3>
                                <p>Implementing CRM retargeting can help you create more personalized and engaging
                                    interactions with prospects that are already familiar with your brand, so you can
                                    turn lost opportunities into valuable deals.

                                    PropFlo Real Estate CRM Retargeting Benefits:
                                    <br>
                                    - More personalized solution<br>
                                    - Focus on high-value prospects;<br>
                                    - Cross-sell to Current customers;<br>
                                    - use it as part of ABM Strategy for real estate<br>

                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/marketing-automation/ma9.png" alt="Visibility Dashboard"
                                class="img-fluid">
                        </div>
                    </div>
                </div>
                <!-- Strategy Content -->
                <div class="tab-pane fade" id="strategy" role="tabpanel" aria-labelledby="strategy-tab">
                    <div class="row align-items-center">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <h3 class="fw-bold mb-20">Strategize for success</h3>
                                <p>PropFlo has inbuilt-generated AI chatbots to engage customers instantly, give
                                    immediate
                                    assistance, and enhance user experience. It ensures prompt, relevant interactions,
                                    improving
                                    engagement and conversion rates.
                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/lead-management/live-chat.png" alt="Strategy Dashboard"
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