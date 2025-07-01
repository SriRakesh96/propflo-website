<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>

<head>

    <!-- Best Intelligent Real Estate CRM Software India 2024 - PropFlo -->
    <title>Best Intelligent Real Estate CRM Software India 2024 - PropFlo</title>

    <meta name="description"
        content="PropFlo is the AI-powered, customer-centric CRM for real estate developers and brokers. Manage leads, sales, and post-sales with ease. Discover more now!">

    <?php
     
     include('head.php');
      
      ?>

    <style>
        #mob-fea {

            display: none;
        }

        @media only screen and (max-width: 600px) {
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

        .iti {
            display: block !important;
        }

        #row-jb {
            width: 80%;
            display: block;
            margin: 0 auto;

        }


        .job-row {
            margin-bottom: 15px;
            /* Add space between rows */
            border-bottom: 10px solid #f8f9fa;
            /* Light gray border as spacing */
        }

        .table {
            border-spacing: 0;
            /* Ensure no default cell spacing */
        }


        @media only screen and (max-width: 600px) {
            .btn-propflo {
                padding: 10px !important;
                font-size: 14px !important;
            }

            #row-jb {
                width: 100%;


            }

            h5 {
                font-size: 14px !important;

            }
        }

        #myFileInput {

            background: #fff !important;
        }
    </style>

    <!-- Add these lines to the head of your HTML document -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>

    <!-- Google reCAPTCHA API script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
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
            <?php

$job_id=base64_decode($_GET['jb_id']);

$fetch_careers="SELECT * FROM propflo_jobs WHERE job_id='$job_id' AND act='1'";
    
$fetech_j_query=mysqli_query($conn, $fetch_careers);

while($row3=mysqli_fetch_assoc($fetech_j_query)){
  
  $job_title=$row3['job_role'];

  $job_about=$row3['job_about'];

  $job_desc=str_replace("?", "&bull;", $row3['job_description']);

  $job_exp=$row3['job_experience'];
  
$skills=$row3['skills'];

  $job_req=str_replace("?", "&bull;", $row3['job_req']);

}

?>

            <!-- breadcrumb-area-start -->
            <div class="breadcrumb__area breadcrumb-height p-relative blue-bg-2">
                <div class="breadcrumb__shape-1">
                    <img src="img/breadcrumb/breadcrumb-shape-1.png" alt="">
                </div>
                <div class="breadcrumb__shape-2">
                    <img src="img/breadcrumb/breadcrumb-shape-2.png" alt="">
                </div>
                <div class="container">
                    <div class="row">
                        <div class="col-xl-8 col-lg-7">
                            <div class="breadcrumb__content z-index-3">
                                <h3 class="breadcrumb__title tp-char-animation">Careers Details</h3>
                                <div class="breadcrumb__list wow tpfadeUp" data-wow-duration=".9s" data-wow-delay=".4s">
                                    <span class="child-one"><a href="https://qa.bentolabs.co/">Home</a></span>
                                    <span class="dvdr"><i class="fal fa-angle-right"></i></span>
                                    <span class="child-one"><a href="career">Careers page</a></span>
                                    <span class="dvdr"><i class="fal fa-angle-right"></i></span>
                                    <span><?php echo $job_title; ?> </span>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-4 col-lg-5 col-lg-4 text-center text-md-end">
                            <div class="breadcrumb__img p-relative text-start z-index">
                                <img class="z-index-3" src="img/breadcrumb.png" alt="">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- breadcrumb-area-end -->

            <div class="career-details-area career-border-bottom pt-110 pb-110">
                <div class="container">
                    <div class="row align-content-start">
                        <div class="col-xl-12 col-lg-12">
                            <div class="career-details-wrapper">
                                <div class="career-details-title-box">

                                    <h4 class="career-details-title" style="text-align:center;">
                                        <?php echo $job_title; ?></h4>
                                </div>

                                <div class="career-details-job-responsiblity mb-45">
                                    <h4 class="career-details-title-sm">About Company</h4>
                                    <p>
                                        <?php echo $job_about; ?>
                                    </p>
                                </div>
                                <div class="career-details-job-responsiblity mb-45">
                                    <h4 class="career-details-title-sm">Job description</h4>
                                    <p class="pb-15"><?php echo $job_desc; ?></p>

                                </div>

                                <div class="career-details-job-responsiblity">
                                    <h4 class="career-details-title-sm">Experience</h4>
                                    <p class="pb-15"><?php echo $job_exp; ?> Years
                                    </p>
                                </div>

                                <div class="career-details-job-responsiblity mb-20">
                                    <h4 class="career-details-title-sm">Job Requirements</h4>
                                    <p class="pb-15"><?php echo $job_req; ?></p>

                                </div>

                                <div class="career-details-job-responsiblity">
                                    <h4 class="career-details-title-sm">Skills</h4>
                                    <p class="pb-15"><?php echo $skills; ?>
                                    </p>
                                </div>

                            </div>
                        </div>

                    </div>

                    <section class="contact-area pb-120">
                        <div class="contact__shape1">
                            <img src="assets/images/shape/contact-dots.png" alt="shape">
                        </div>
                        <div class="contact__shape2">
                            <img src="assets/images/shape/contact-roket.png" alt="shape">
                        </div>
                        <div class="container">
                            <div class="row g-4 align-items-center justify-content-between">
                                <div class="col-lg-12">
                                    <div class="contact__item-right">
                                        <div class="contact__item">
                                            <h3 style="font-weight:600" class="text-center">Apply Now</h3>
                                            <form action="career_pro" method="POST" class="box"
                                                enctype="multipart/form-data" onsubmit="return verifyCaptcha();">
                                                <div class="row g-4">

                                                <input type="hidden" name="job_id" value="<?php echo $job_id; ?>">

                                                <input type="hidden" name="job_title" value="<?php echo $job_title; ?>">
                                                    <!-- Full Name -->
                                                    <div class="col-md-6">
                                                        <label for="name">Full Name</label>
                                                        <input id="name" name="name" type="text"
                                                            placeholder="Enter your name here" required>
                                                    </div>
                                                    <!-- Email -->
                                                    <div class="col-md-6">
                                                        <label for="email">Email Address</label>
                                                        <input id="email" name="email" type="email"
                                                            placeholder="Enter your email address" required>
                                                    </div>
                                                    <!-- Phone -->
                                                    <div class="col-md-6">
                                                        <label for="phone">Phone *</label>
                                                        <input type="tel" maxlength="10" name="phone" id="phone"
                                                            placeholder="Enter Phone Number" required>
                                                        <small id="phone-error" class="error-message"></small>
                                                    </div>
                                                    <!-- Referral -->
                                                    <div class="col-md-6">
                                                        <label for="how-propflo">How Did You Come Across Bento
                                                            Labs?</label>
                                                        <input id="how-propflo" name="how-propflo" type="text"
                                                            placeholder="How Did You Come Across Bento Labs?" required>
                                                    </div>
                                                    <!-- Upload Resume -->
                                                    <div class="col-md-6">
                                                        <label for="myFileInput" class="custom-file-input">Upload Resume
                                                            <small>(Type: PDF, DOCX. Max Size: 5MB)</small></label>
                                                        <input type="file" id="myFileInput" name="file"
                                                            onchange="validateFile()" accept=".doc, .docx, .pdf"
                                                            required>
                                                        <p id="fileName" class="selected-file"></p>
                                                    </div>
                                                    <!-- CAPTCHA -->
                                                    <div class="col-md-12" style="margin-bottom: 12px;">
                                                        <div class="g-recaptcha"
                                                            data-sitekey="6LfTQooqAAAAAHTb9TYtaAGGsrOoqfuBKO38Pn8v">
                                                        </div>
                                                        <input type="hidden" id="recaptchaResponse"
                                                            name="recaptchaResponse">
                                                        <small id="recaptchaValidationMessage"
                                                            class="error-message"></small>
                                                    </div>
                                                    <!-- Submit Button -->
                                                    <div class="col-12">
                                                        <button class="btn-propflo" type="submit">Apply Now</button>
                                                    </div>
                                                </div>
                                            </form>

                                            <script>
                                                // Validate File Upload
                                                function validateFile() {
                                                    const input = document.getElementById('myFileInput');
                                                    const fileNameDisplay = document.getElementById('fileName');
                                                    const maxFileSize = 5 * 1024 * 1024; // 5MB
                                                    const allowedExtensions = ['doc', 'docx', 'pdf'];
                                                    if (input.files && input.files[0]) {
                                                        const fileSize = input.files[0].size;
                                                        const fileExtension = input.files[0].name.split('.').pop()
                                                            .toLowerCase();
                                                        if (fileSize > maxFileSize) {
                                                            fileNameDisplay.textContent = 'File size exceeds 5MB.';
                                                            input.value = ''; // Clear the input field
                                                            alert(
                                                                'File size exceeds 5MB. Please select a smaller file.');
                                                        } else if (!allowedExtensions.includes(fileExtension)) {
                                                            fileNameDisplay.textContent = 'Invalid file format.';
                                                            input.value = ''; // Clear the input field
                                                            alert(
                                                                'Invalid file format. Please select a DOC, DOCX, or PDF file.');
                                                        } else {
                                                            fileNameDisplay.textContent = input.files[0].name;
                                                        }
                                                    }
                                                }
                                                // Captcha Verification and Submission
                                                function verifyCaptcha() {
                                                    const response = grecaptcha.getResponse();
                                                    if (!response) {
                                                        document.getElementById("recaptchaValidationMessage")
                                                            .textContent = "Please complete the CAPTCHA.";
                                                        return false; // Prevent submission
                                                    } else {
                                                        document.getElementById("recaptchaValidationMessage")
                                                            .textContent = "";
                                                        return true; // Allow submission
                                                    }
                                                }
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
                                                        initialCountry: countryCode ? countryCode
                                                            .toUpperCase() :
                                                            'auto', // Set initial country based on user's IP address, default to 'auto' if not available
                                                    });
                                                    // Set initial value for the hidden input
                                                    countryInput.value = "+" + iti.getSelectedCountryData()
                                                        .dialCode;
                                                    // Listen for changes to the phone number input
                                                    input.addEventListener("input", function() {
                                                        var countryCode = iti.getSelectedCountryData()
                                                            .dialCode;
                                                        countryInput.value = "+" + countryCode;
                                                    });
                                                    // Optional: Listen for country changes
                                                    iti.events.on("countrychange", function() {
                                                        countryInput.value = "+" + iti
                                                            .getSelectedCountryData().dialCode;
                                                    });
                                                });
                                                input.addEventListener("keypress", function(event) {
                                                    var key = event.which || event.keyCode;
                                                    if (key < 48 || key > 57) {
                                                        event.preventDefault();
                                                    }
                                                });
                                            </script>

                                            <div class="container my-5 pt-120">

                                                <div class="container mb-30">
                                                    <h2 class="section-title"
                                                        style="text-align:center;margin-bottom:5px;">Explore Our Open
                                                        Roles</h2>
                                                    <p style="text-align:center;">Still finding a role that suits you?
                                                        <br> Reach out to us!</p>
                                                </div>

                                                <div class="table-responsive mt-30" id="row-jb">
                                                    <table class="table align-middle">
                                                        <tbody>

                                                            <?php
    $fetch_careers="SELECT * FROM propflo_jobs WHERE job_id!='$job_id' AND act='1' ORDER BY id DESC";
    
    $fetech_j_query=mysqli_query($conn, $fetch_careers);

    if(mysqli_num_rows($fetech_j_query)<= '0'){

     echo"<h3 style=\"text-align:center; color:gray\" > No Jobs Found </h3>";

    } // if ends

    else{


    
    while($row3=mysqli_fetch_assoc($fetech_j_query)){
      
      $job_title=$row3['job_role'];

      $job_type=$row3['job_type'];

      $job_id=base64_encode($row3['job_id']);

      $job_exp=$row3['job_experience'];



    
                        $job_role = $row3['job_role'];
                        $job_req = $row3['job_req'];
                        

                        $job_exp = $row3['job_experience'];
                        $job_type = $row3['job_type'];




     
      echo"  
                
                <tr class=\"job-row\">
                    <td>
                        <div class=\"d-flex justify-content-between align-items-center\">
                            <div>
                                <h5 class=\"mb-1\"> $job_role</h5>
                            <small class=\"text-muted\"> $job_type | $job_exp Years</small>
                        </div>
                        <a href=\"job_description?jb_id=$job_id\" class=\"btn-propflo\">View Opportunity</a>
                    </div>
                    </td>
                    </tr>

                   
            ";

            }//while fetch ends

            }// else ends

            ?>

                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>

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