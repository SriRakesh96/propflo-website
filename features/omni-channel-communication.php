<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>

    <!-- Omnichannel Communication CRM Software 2024 | PropFlo -->
    <title>Omnichannel Communication CRM Software 2024 | PropFlo</title>
    <meta name="title" content="Omnichannel Communication CRM Software 2024 | PropFlo">
    <meta name="description"
        content="Connect via WhatsApp, email, and call centers with PropFlo’s omnichannel communication CRM. Enhance customer engagement for real estate businesses.">

    <?php
      include('head.php');
       
       ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- propFlo Feature css -->
    <link rel="stylesheet" href="../assets/css/features.css">

    <style>
    .dashboard-feature-title {

        line-height: 30px !important;
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
                                style="text-transform: uppercase;">Omni Channel Management</p>
                            <div class="banner-three__content text-center">
                                <h1 style="color:#fff;" class="wow fadeInUp" data-wow-delay="400ms"
                                    data-wow-duration="1500ms">
                                    Transform Real Estate Engagement with PropFlo’s Intelligent Communication Suite

                                </h1>
                                <p style="color:#fff;" class="wow fadeInUp mb-30" data-wow-delay="800ms"
                                    data-wow-duration="2000ms">
                                    Engage and convert prospects effortlessly with PropFlo’s suite of tools, featuring
                                    personalized email campaigns, smart WhatsApp marketing, and advanced telephony
                                    integration.
                                    Boost client connections and streamline communications for maximum impact.

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
                    <h2 class="fw-600 wow splt-txt" data-splitting>Improve your Sales Performance with Personalized
                        touch and
                        Bulk Emails

                    </h2>
                    <p class="wow fadeInUp" data-wow-delay="200ms" data-wow-duration="2500ms">
                        PropFlo’s personalized bulk emails, delivering tailored messages to engage and convert prospects
                        effectively.

                    </p>
                </div>
                <div class="container-fluid">
                    <div class="row">
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/omni-channel/om1.png" alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-1" class="lmcont">
                                    <h3 class="fw-bold mb-15">Personalised Email Templates

                                    </h3>
                                    <p>Make your emails truly yours PropFlo’s personalized email templates allow you to
                                        send out
                                        communication that truly reflects your brand, while offering your team the ease
                                        of
                                        creating it in minutes. No extensive design work or delays here!
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-2 order-md-2">
                                <div id="section-2" class="lmcont">
                                    <h3 class="fw-bold mb-15">Bulk Email Campaign

                                    </h3>
                                    <p>Reach all your leads at once Whether you have an email to send to all the leads
                                        in one
                                        stage or just want to convey the season's greetings, you can send emails in
                                        bulk, reaching
                                        all your leads or multiple leads at once.</p>
                                </div>
                            </div>
                            <div class="col-md-6 col-12 order-1 order-md-1" style="background:#fff !important;">

                                <video autoplay="" loop="" muted="" playsinline="" style="width:100%">
                                    <source src="../assets/img/videos/om45.mp4" type="video/mp4">
                                    Your browser does not support the video tag.
                                </video>

                            </div>
                        </div>
                        <div class="lead-management scroll-row d-flex flex-wrap align-items-center">
                            <div class="col-md-6 col-12 order-1 order-md-2">
                                <img class="img-fluid" src="../assets/img/omni-channel/om3.png" alt="Dynamic Image">
                            </div>
                            <div class="col-md-6 col-12 order-2 order-md-1">
                                <div id="section-3" class="lmcont">
                                    <h3 class="fw-bold mb-15">Track Email Statuses
                                    </h3>
                                    <p>Delivery, Opens & Clicks Track the effectiveness of your email marketing An email
                                        sent is
                                        not a successful job done - you always need to know how many of the bulk emails
                                        you sent
                                        actually got delivered, how many were opened and how many recipients clicked on
                                        the email
                                        or call-to-action.
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

    <div class="container-fluid section-background mt-20">
        <div class="container">
            <!-- Main Heading -->
            <div class="text-center mb-4">
                <h2 class="fw-bold mb-10">Smart Real Estate Whatsapp Marketing with PropFlo CRM

                </h2>
                <p>Engage your real estate clients with PropFlo CRM’s intelligent WhatsApp marketing for real time and
                    impactful communication.
                </p>
            </div>
            <!-- Tab Navigation -->
            <ul class="nav nav-tabs justify-content-center mb-4" id="dashboardTabs" role="tablist">
                <li class="nav-item" role="presentation">
                    <button class="nav-link active" id="collaboration-tab" data-bs-toggle="tab"
                        data-bs-target="#collaboration" type="button" role="tab" aria-controls="collaboration"
                        aria-selected="false">Two-Way WhatsApp Integration

                    </button>
                </li>

                <li class="nav-item" role="presentation">
                    <button class="nav-link " id="visibility-tab" data-bs-toggle="tab" data-bs-target="#visibility"
                        type="button" role="tab" aria-controls="visibility" aria-selected="false">WhatsApp Marketing

                    </button>
                </li>
                <li class="nav-item" role="presentation">
                    <button class="nav-link" id="customization-tab" data-bs-toggle="tab" data-bs-target="#customization"
                        type="button" role="tab" aria-controls="customization" aria-selected="true">One-Click Access to
                        Real
                        Estate WhatsApp CRM

                    </button>
                </li>

            </ul>
            <!-- Tab Content Area -->
            <div class="tab-content">

                <!-- Collaboration Content -->
                <div class="tab-pane fade show active" id="collaboration" role="tabpanel"
                    aria-labelledby="collaboration-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Whatsapp Communication
                                </p>
                                <h3 class="fw-bold mb-20">Two-Way WhatsApp Integration

                                </h3>
                                <p>2-way WhatsApp in Sales CRM
                                    Enable seamless two-way communication directly within the Sales module.
                                    Easily initiate and respond to WhatsApp messages from clients.
                                    Ensure all conversations are logged and tracked for a complete communication
                                    history.

                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/omni-channel/om6.png" alt="Collaboration Dashboard"
                                class="img-fluid">
                        </div>
                    </div>
                </div>

                <!-- Visibility Content -->
                <div class="tab-pane fade" id="visibility" role="tabpanel" aria-labelledby="visibility-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Inbuilt Whatsapp

                                </p>
                                <h3 class="fw-bold mb-20">WhatsApp Marketing

                                </h3>
                                <p>PropFlo allows users to create WhatsApp QR codes for site visits, sales office
                                    visits, and
                                    campaigns which allows users to easily engage with the customers.
                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/omni-channel/om4.png" alt="Visibility Dashboard" class="img-fluid">
                        </div>
                    </div>
                </div><!-- Customization Content -->
                <div class="tab-pane fade" id="customization" role="tabpanel" aria-labelledby="customization-tab">
                    <div class="row">
                        <div class="col-md-6">
                            <div class="dashboards-cont">
                                <p class="fea-tag">Telephony
                                </p>
                                <h3 class="fw-bold mb-20">One-Click Access to Real Estate WhatsApp CRM

                                </h3>
                                <p>Chat using WhatsApp with leads for real-time engagement with live tracking and logs.

                                </p>
                                <a href="../demo" class="btn-propflo">Try PropFlo Now</a>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <img src="../assets/img/omni-channel/om10.png" alt="Customization Dashboard"
                                class="img-fluid">
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <div class="container dashboard-feature-section">
        <div class="container text-center mb-5">
            <h2 class="fw-bold big-head">Get State of the art Telephony services support that improves performance
            </h2>
            <p>Real Estate CRM automation, workflows, and in-depth analytics.
                Manage opportunities with a visual board that displays the progress and status of each item and views
                statistics on all tasks.
            </p>
        </div>
        <div class="swiper-container">
            <div class="swiper-wrapper">

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/1.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">On-premise & Cloud Telephony Support
                        </h3>
                        <p class="dashboard-feature-description">Flexible telephony options to suit your infrastructure
                            needs.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/lead-management/lm-icons/2.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Built-in Voicemail, IVR & Greetings:
                        </h3>
                        <p class="dashboard-feature-description">Customizable voicemail, interactive voice response, and
                            greeting messages.

                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/3.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Intelligent Call Routing
                        </h3>
                        <p class="dashboard-feature-description">Smart routing to connect calls to the most appropriate
                            agents.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/lead-management/lm-icons/4.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Aggregate Calculations
                        </h3>
                        <p class="dashboard-feature-description">Calculate the sum, median, and mean of your real estate
                            data,
                            categorized, at a glance to enable intelligent decisions.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/5.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Sticky Routing</h3>
                        <p class="dashboard-feature-description">Ensures repeat callers reach the same agent for
                            consistency.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/6.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Call Barging & Conference Calls</h3>
                        <p class="dashboard-feature-description">Allows managers to join or listen in on calls for
                            support and
                            training.

                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/lead-management/lm-icons/7.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Dispositions & Breaks
                        </h3>
                        <p class="dashboard-feature-description">Track call outcomes and manage agent breaks
                            efficiently.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/8.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Real-Time Monitoring & Dashboard
                        </h3>
                        <p class="dashboard-feature-description">Monitor call activities and performance metrics in real
                            time.

                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/9.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Call-Related Intelligence On Leads
                        </h3>
                        <p class="dashboard-feature-description">Gather and analyze call data to enhance lead
                            management.

                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/10.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Click to Call
                        </h3>
                        <p class="dashboard-feature-description">Instantly dial numbers from your CRM with a single
                            click.
                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/11.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Manual Call Logs
                        </h3>
                        <p class="dashboard-feature-description">Keep accurate records of all call details manually.

                        </p>
                    </div>
                </div>

                <div class="swiper-slide col-md-4">
                    <div class="dashboard-feature-card">
                        <div class="dashboard-feature-icon">
                            <img src="../assets/img/omni-icons/12.png" class="ico">
                        </div>
                        <h3 class="dashboard-feature-title">Always Available Call Recordings
                        </h3>
                        <p class="dashboard-feature-description">Access call recordings anytime for quality assurance
                            and
                            training.

                        </p>
                    </div>
                </div>

            </div>

            <div class="mt-60 mb-60">
                <div class="swiper__info">
                    <button class="testimonial-three__arry-prev"><i class="fa-regular fa-arrow-left-long"></i></button>
                    <div class="dot testimonial-three__dot"></div>
                    <button class="testimonial-three__arry-next active"><i
                            class="fa-regular fa-arrow-right-long"></i></button>
                </div>
            </div>

        </div>
    </div>

    <script>
    const swiper = new Swiper('.swiper-container', {
        slidesPerView: 3,
        /* Default to 3 slides per view on desktop */
        spaceBetween: 30,
        loop: true,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".testimonial-three__arry-next",
            prevEl: ".testimonial-three__arry-prev",
        },
        breakpoints: {
            1200: {
                slidesPerView: 3,
                /* 2 items per row on tablet */
            },
            850: {
                slidesPerView: 2,
                /* 2 items per row on tablet */
            },
            0: {
                slidesPerView: 1,
                /* 1 item per row on mobile */
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