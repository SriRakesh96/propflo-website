<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>

    <!-- Leading Real Estate CRM Software for Developers and Builders to Easy Leads and Sales Management | PropFlo -->
    <title>Leading Real Estate CRM Software for Developers and Builders to Easy Leads and Sales Management | PropFlo
    </title>
    <meta name="title"
        content="Leading Real Estate CRM Software for Developers and Builders to Easy Leads and Sales Management | PropFlo">
    <meta name="description"
        content="Streamline your workflow and boost sales with PropFlo real estate CRM. Our solutions help manage leads, marketing automation, and sales processes.">

    <?php
      include('head.php');
       
       ?>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <style>
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

    .fw-600 {
        width: 80%;
        margin: 0 auto;
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
        padding-top: 190px !important;
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
            padding-top: 190px !important;
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
                    <a href="#ma" id="mai">Marketing Automation</a>
                    <a href="#ps" id="psi">Presales</a>
                    <a href="#sm" id="sai">Sales</a>
                    <a href="#cp" id="cpi">Channel Partner</a>
                    <a href="#pos" id="posi" style="padding-right: 20px;">Post-sales</a>
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
                                    India’s #1 CRM For Real Estate Developers to Manage Client Interactions
                                </h1>
                                <p style="color:#2B3857;" class="wow fadeInUp mb-30" data-wow-delay="800ms"
                                    data-wow-duration="2000ms">
                                    PropFlo CRM Software helps to manage the entire real estate customer lifecycle from
                                    lead enquiry to possession to sell smarter and faster.
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

            <section id="ma">
                <div class="container py-5">
                    <div class="row g-4 scroll-row">

                        <div class="section-header mb-25 text-center">
                            <h2 class="fw-600 splt-txt" data-splitting>
                                All-in-One Marketing Automation Software To Drive Customer Engagement
                            </h2>
                            <p>
                                PropFlo CRM provides a solution to all your marketing challenges, automates workflow and
                                tasks, follow-ups and sends personalized communications with AI to turn leads into gold
                                and drive more revenue.

                            </p>
                        </div>
                        <!-- Section 1: Image First on Desktop -->
                        <div class="col-md-6 text-center order-1 order-md-1">
                            <img src="../assets/img/developers/dev2.png" alt="Dashboard Image 1" class="img-fluid">
                        </div>
                        <div class="col-md-6 order-2 order-md-2">
                            <div class="div-cont">
                                <h3 class="fw-bold mb-3">Marketing Automation</h3>
                                <p>
                                    Automates routine tasks, enabling developers to focus on strategic activities and
                                    faster lead conversion.
                                </p>
                                <ul class="feature-list">
                                    <li>In-built WhatsApp Marketing automation</li>
                                    <p>Instantly engage and communicate with prospective customers in bulk via
                                        personalized messages and drive purchase decisions with PropFlo WhatsApp
                                        automation CRM.</p>
                                    <li>WorkFlow Automation</li>
                                    <p>Set up, clean and automate business processes, repetitive tasks and follow-ups
                                        with no human interventions in real time to focus on winning customers and
                                        closing deals.
                                    </p>
                                    <li>Lead Capture and Management</li>
                                    <p>Automatically Capture leads from multiple sources, store in centralized directory
                                        and perform segmentation, lead nurturing, marketing attribution and bulk
                                        marketing to turn them into happy paying customer
                                    </p>
                                    <li>AI Content Generator</li>
                                    <p>Put AI to work for compelling marketing content that resonates with your real
                                        estate target audience segment and build long-lasting customer relationships.
                                    </p>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="ps">
                <div class="container py-5">
                    <div class="row g-4 scroll-row">
                        <div class="section-header mb-25 text-center">
                            <h2 class="fw-600 splt-txt" data-splitting>
                                Make Sales with Clean and Complete Presales CRM for Real estate
                            </h2>
                            <p>
                                PropFlo’s Strong presales crm operations set you up for bigger success with a tool that
                                manages all the activities and support that occur before final sale closure

                            </p>
                        </div>
                        <!-- Section 2: Content First on Desktop -->
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="div-cont">
                                <h3 class="fw-bold mb-10">Presales Management</h3>
                                <p>
                                    Automates routine tasks, enabling developers to focus on strategic activities and
                                    faster lead conversion.
                                </p>
                                <ul class="feature-list">
                                    <li>AI-based Lead Scoring</li>
                                    <p>PropFlo AI CRM assigns numerical values to each lead based on their likelihood of
                                        converting them as potential customers, and it analyzes various aspects and
                                        parameters while evaluating.</p>
                                    <li>Lead Insights</li>
                                    <p>Realtor CRM fetches lead information available over search engines and social
                                        media to make your presales team's first call interaction better.

                                    </p>
                                    <li>Lead Routing</li>
                                    <p>Automatically assign the specific project leads to specific presales people and
                                        automate the presales workflow for equal distribution of leads among team
                                        members</p>
                                    <li>Presales Performance Dashboard</li>
                                    <p>Get a unified view of all your presales progress. Team and individual performance
                                        on interactive dashboards. Analysis for better lead conversions and
                                        decision-making </p>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-center order-1 order-md-2">
                            <img src="../assets/img/developers/dev3.png" alt="Dashboard Image 1" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <section id="sm">
                <div class="container py-5">
                    <div class="row g-4 scroll-row">
                        <div class="section-header mb-25 text-center">
                            <h2 class="fw-600 splt-txt" data-splitting>
                            Track Progress, Engage and Sell More with Sales Automation
                            </h2>
                            <p>
                            PropFlo sales CRM streamlines sales operations, manages pipelines, and tracks deals with advanced tools and AI technology. Automate lead assignments for better efficiency and AI sales assistants to run your business 24x7 automatically.

                            </p>
                        </div>
                        <!-- Section 3: Image First on Desktop -->
                        <div class="col-md-6 text-center order-1 order-md-1">
                            <img src="../assets/img/developers/dev4.png" alt="Dashboard Image 1" class="img-fluid">
                        </div>
                        <div class="col-md-6 order-2 order-md-2">
                            <div class="div-cont">
                                <h3 class="fw-bold mb-10">Sales Management</h3>
                                <p>
                                In PropFlo CRM process management software, close deals within record time, reduce turnaround time and automate your sales with the easiest CRM solution for real estate developers.
                                </p>
                                <ul class="feature-list">
                                    <li>Pipeline Management </li>
                                    <p>Qualify and segment leads, track pipeline metrics and manage deal through different stages of customer lifecycle ( enquiry-site visit-negotiation-closure) in our web-based real estate crm</p>
                                    <li>Task Automation</li>
                                    <p>Schedule calls, site visits, follow-ups, and automated lead assignment to salespersons based on predefined criteria.</p>
                                    <li>AI Sales Assistance</li>
                                    <p>Let AI work for you. Automatically engages and assists prospective clients 24x7, ensuring the sales pipeline never slows down.</p>
                                    <li>CRM Mobile Application</li>
                                    <p>Enables the field sales team in real time to manage deals, tasks, notes, site visits and follow-ups to make sure no sales opportunity is missed.</p>
                                    <li>Sales Process Management</li>
                                    <p>Manage your sales by setting up your own process and customization for managing the real estate business</p>
                                
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <section id="cp">
                <div class="container py-5">
                    <div class="row g-4 scroll-row">
                        <div class="section-header mb-25 text-center">
                            <h2 class="fw-600 splt-txt" data-splitting>
                            Track Channel Partners Bookings, Inventory, and Payouts in Real Estate CRM.
                            </h2>
                            <p>
                            PropFlo Empowers Collaborative Selling for all your projects and leads in one platform, ensuring effective communication and faster growth.

                            </p>
                        </div>
                        <!-- Section 4: Content First on Desktop -->
                        <div class="col-md-6 order-2 order-md-1">
                            <div class="div-cont">
                                <h3 class="fw-bold mb-10">Channel Partner Management</h3>
                                <p>
                                Build a mutually profitable relationship with your channel partners by empowering them to add leads, manage inventory, and collaborate on channel deals within PropFlo CRM.
                                </p>
                                <ul class="feature-list">
                                    <li>Register, onboard and approve all your channel partners in the CRM system.</li>
                                    <li>Dedicated lead enquiry form
                                    </li>
                                    <li>Smooth Integration with PropFlo Channel Partner CRM</li>
                                    <li>Inventory management access to your partner network and commission tracking.</li>

                                    <li>In-depth reports for tracking channel partner performance.</li>
                                    <p>PropFlo is the best realtor CRM to build trust and long-lasting relationships with channel partners who further extend your business growth.</p>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 text-center order-1 order-md-2">
                            <img src="../assets/img/developers/dev5.png" alt="Dashboard Image 1" class="img-fluid">
                        </div>
                    </div>
                </div>
            </section>

            <section id="pos">
                <div class="container py-5">
                    <div class="row g-4 scroll-row">
                        <div class="section-header mb-25 text-center">
                            <h2 class="fw-600 splt-txt" data-splitting>
                            All-in-one Post-Sales Management CRM for Real Estate Developers


                            </h2>
                            <p>
                            We offer a solution for managing entire client management even after booking and automate tasks for CRM teams to manage transactions, bookings, Inventory and payment collections. Provide inbuilt WhatsApp for customer communication with CRM.
                            </p>
                        </div>
                        <!-- Section 5: Image First on Desktop -->
                        <div class="col-md-6 text-center order-1 order-md-1">
                            <img src="../assets/img/developers/dev6.png" alt="Dashboard Image 1" class="img-fluid">
                        </div>
                        <div class="col-md-6 order-2 order-md-2">
                            <div class="div-cont">
                                <h3 class="fw-bold mb-10">Post-Sales Management</h3>
                                <p>
                                PropFlo provides  easy real estate bookings and customer management CRM for a better buying experience with a transparent booking process and enhances customer satisfaction.
                                </p>
                                <ul class="feature-list">
                                    <li>Bookings and Customer Management</li>
                                    <p>Manage all aspects of customer bookings, such as agreement or registration details, bank details, cost sheet, and proof of payment for transparent booking process</p>
                                    <li>Ledger, Payment Tracking and Collection</li>
                                    <p>In Post-Sales CRM, Track payment milestones, manage both online and offline payments, and track the collections from each customer.
                                    </p>
                                    <li>Document Creation in CRM</li>
                                    <p>Within 5 seconds, you can create bulk demand letters, AOS and sales deeds and send them to customers with a single click.
                                    </p>
                                    <li>Handover Management</li>
                                    <p>We ensure smooth transition of property to your clients by implementing customized checklist for inspection, approvals and handover

                                    </p>
                                    <li>Customer Communication automation  </li>
                                    <p>Route all your post-sales conversations through email and inbuilt WhatsApp. Automate the communication for payment remainder, overdue payments and follow-ups within the CRM system
                                    </p>

                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </section>

            <div class="container py-5">
                <div class="row g-4">
                    <div class="section-header mb-20 text-center">
                        <h2 class="fw-600 wow splt-txt" data-splitting>Why Propflo is Every Developer’s Top Choice
                        </h2>
                        <p>
                            Learn how our trusted CRM solutions have increased their sales efficiency and what makes
                            PropFlo the Top choice for Real Estate Industry Leaders
                        </p>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-4">
                            <img src="../assets/img/clients/tranquillo.png" alt="Tranquillo Logo"
                                style="max-width: 150px;">
                            <h1>75%</h1>
                            <p>Increase in Lead to Deal ratio</p>
                            <a href="#">Tranquillo's Story</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-4">
                            <img src="../assets/img/clients/ankura.png" alt="Ankura Homes Logo"
                                style="max-width: 150px;">
                            <h1>95%</h1>
                            <p>Cut down the time for manual tasks</p>
                            <a href="#">Ankura Homes Story</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-4">
                        <div class="custom-card p-4">
                            <img src="../assets/img/clients/rv-nirman.png" alt="RV Nirmaan Logo"
                                style="max-width: 150px;">
                            <h1>80%</h1>
                            <p>Increase in Customer Engagement</p>
                            <a href="#">RV Nirmaan's Story</a>
                        </div>
                    </div>
                </div>
            </div>

            <section class="start-now-area bg-image pt-50 pb-50">
                <div class="container">
                    <div class="section-header" id="cta" style="text-align:center">
                        <h2 style="color:#08cf65" class="fw-600 wow splt-txt words chars splitting animated"
                            data-splitting>Take your business to the next level with PropFlo Real Estate CRM

                        </h2>
                        <a href="../demo" class="btn-white mt-15 wow fadeInUp" data-wow-delay="400ms"
                            data-wow-duration="1500ms">Get Started</a>
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