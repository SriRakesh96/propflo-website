<?php
   session_start();
   
   include('offline.php');
   
   include('doctype.php');
   
   ?>
<?php
// 1. Fetch user's IP address
$user_ip = $_SERVER['REMOTE_ADDR'];

// 2. Default country code is set to 'IN' (India)
$country_code = "IN"; 

// 3. Fetch country code from ipapi.co using the user's IP
$api_url = "https://ipapi.co/{$user_ip}/json/";

try {
    $response = @file_get_contents($api_url); // Call API to fetch data
    if ($response !== FALSE) {
        $data = json_decode($response, true); // Decode JSON response
        if (!empty($data['country_code'])) {
            $country_code = strtoupper($data['country_code']); // Extract and capitalize country code
        }
    }
} catch (Exception $e) {
    // If API call fails, default to 'IN'
    $country_code = "IN";
}
?>

<head>

    <!-- Request Demo - PropFlo -->
    <title>Request Demo - PropFlo</title>
    <meta name="title" content="Request Demo - PropFlo">
    <meta name="description"
        content="Explore PropFlo's intelligent workflow automation and customer-centric features for maximum customer satisfaction and sales conversions. Request a demo today!">

    <?php
      include('head.php');
       
       ?>
    <!-- Add these lines to the head of your HTML document -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/css/intlTelInput.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js"></script>
    <!-- Include jQuery -->
    <script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>
    <!-- Google reCAPTCHA API script -->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <style>
    @media (max-width: 767px) {
        .floating-cta {
            display: none !important;

        }

        .bottom_fixed_item {
            position: fixed;
            bottom: 20px !important;
            right: 15px !important;
            z-index: 9999;
        }
    }

    .iti {
        display: block !important;
    }

    .demo-section {
        background-color: #EBF5F3;
        padding: 15px;
        border-radius: 15px;
        box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
    }

    @media only screen and (max-width: 768px) {
        .demo-section {
            margin-top: 40px;
        }

        .demo-section {
            padding: 10px 0px;
        }
    }

    .left-content {
        text-align: center;
    }

    .left-content img {
        max-width: 80%;
        border-radius: 10px;
    }

    .btn-three {
        display: inline-block;
        background-color: #007bff;
        color: #fff;
        padding: 10px 20px;
        border-radius: 5px;
        text-decoration: none;
        transition: background-color 0.3s ease;
    }

    .btn-three:hover {
        background-color: #0056b3;
    }

    label {
        font-weight: bold;
    }

    input,
    textarea {
        width: 100%;
        margin-bottom: 7px;
        padding: 6px;
        border: 1px solid #ced4da;
        border-radius: 5px;
    }

    input::placeholder,
    textarea::placeholder {
        font-size: 15px;
        /* Set the placeholder font size */
    }

    @media (min-width: 1400px) {

        #for {
            max-width: 1150px !important;
        }
    }



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

    @media only screen and (max-width: 600px) {
        #contact-img {
            display: none;
        }
    }

    .start-now-area {
        position: relative;
        z-index: 1;
        background: linear-gradient(to bottom, #EBF2F5, #ffffff) !important;
        margin-top: 0px;
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
            <div class="container my-5 pt-60" id="for">
                <div class="row align-items-center demo-section">
                    <!-- Left Content (Image Section) -->
                    <div class="col-md-6 left-content" id="contact-img">
                        <img src="assets/img/demoimg.png" alt="Recognition and Awards" width="100%">
                    </div>
                    <!-- Right Content (Form Section) -->
                    <div class="col-md-6 mt-20">
                        <h3 class="section-title text-center" style="margin-bottom: 5px;"> Book a demo</h3>
                        <!-- <p class="text-center" style="margin-bottom:10px">Fill out the form below and we’ll get back to
                            you.</p>-->
                        <form id="demo-form" action="contact_pro" method="POST">
                            <input type="hidden" name="form-name" value="Demo_Form">
                            <input type="hidden" name="g-recaptcha-response" id="recaptchaResponse">

                            <label for="name">Full Name</label>
                            <input id="name" type="text" name="name" placeholder="Enter your name here" required
                                maxlength="30">
                            <small id="name-error" class="error-message"></small>

                            <label for="email">Email Address</label>
                            <input id="email" type="email" name="email" placeholder="Enter your email address" required>
                            <small id="email-error" class="error-message"></small>

                            <label for="phone">Phone *</label>
                            <input type="tel" maxlength="10" name="phone" id="phone" placeholder="Enter Phone Number"
                                required>
                            <small id="phone-error" class="error-message"></small>
                            <input type="hidden" name="country_code" id="country_code" required="">

                            <label for="company-name" style="margin-top: 10px;">Company Name</label>
                            <input id="company-name" type="text" name="company"
                                placeholder="Enter your company name here" maxlength="30" required>
                            <small id="company-error" class="error-message"></small>


                            <!-- <label for="message">Message</label>
                            <textarea id="message" name="message" placeholder="Enter your message here" 
                                maxlength="150"></textarea>
                            <small id="message-error" class="error-message"></small>-->

                            <div class="col-md-12" style="margin:12px 0px;">
                                <!--   <div class="g-recaptcha" data-sitekey="6Lc8-5EqAAAAALIUkxp4EW1R3Kpwpa-y37r9_TK0"></div>-->
                                <div class="g-recaptcha" data-sitekey="6Lf9OyArAAAAAE6CqZoiXzQvyCFaYkxoj__ua5_H"></div>



                                <small id="recaptchaValidationMessage" class="error-message"></small>
                            </div>

                            <button type="submit" class="btn-propflo">Submit</button>
                        </form>

                        <style>
                        .error-message {
                            color: red;
                            font-size: 0.9em;
                            display: none;
                        }

                        input.invalid,
                        textarea.invalid {
                            border: 1px solid red;
                        }
                        </style>

                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const form = document.getElementById("demo-form");
                            const recaptchaValidationMessage = document.getElementById(
                                "recaptchaValidationMessage");
                            // Error messages
                            const errorMessages = {
                                name: "Full Name is required and should be less than 30 characters.",
                                email: "Please enter a valid email address.",
                                phone: "Please enter a valid 10-digit phone number.",

                            };
                            // Function to validate email
                            function validateEmail(email) {
                                const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
                                return emailPattern.test(email);
                            }
                            // Function to validate phone (exactly 10 digits)
                            function validatePhone(phone) {
                                const phonePattern = /^[0-9]{10}$/;
                                return phonePattern.test(phone);
                            }
                            // Handle form submit
                            form.addEventListener("submit", function(event) {
                                let formValid = true;
                                // Reset all error messages
                                const errorElements = form.querySelectorAll(".error-message");
                                errorElements.forEach(function(errorElement) {
                                    errorElement.style.display = "none";
                                });
                                // Validate each field
                                const inputs = form.querySelectorAll("input, textarea");
                                inputs.forEach(input => {
                                    const errorElement = document.getElementById(
                                        `${input.id}-error`);
                                    input.classList.remove(
                                        "invalid"); // Remove previous invalid class
                                    // Check required fields
                                    if (input.hasAttribute("required") && !input.value
                                        .trim()) {
                                        formValid = false;
                                        errorElement.textContent = errorMessages[input
                                            .name] || "This field is required.";
                                        errorElement.style.display = "block";
                                        input.classList.add("invalid");
                                    }
                                    // Validate name length (max 30 characters)
                                    else if (input.id === "name" && input.value.length >
                                        30) {
                                        formValid = false;
                                        errorElement.textContent = errorMessages.name;
                                        errorElement.style.display = "block";
                                        input.classList.add("invalid");
                                    }
                                    // Validate company name length (max 30 characters)

                                    // Validate email format
                                    else if (input.id === "email" && !validateEmail(input
                                            .value)) {
                                        formValid = false;
                                        errorElement.textContent = errorMessages.email;
                                        errorElement.style.display = "block";
                                        input.classList.add("invalid");
                                    }
                                    // Validate phone format (exactly 10 digits)
                                    else if (input.id === "phone" && !validatePhone(input
                                            .value)) {
                                        formValid = false;
                                        errorElement.textContent = errorMessages.phone;
                                        errorElement.style.display = "block";
                                        input.classList.add("invalid");
                                    }
                                });
                                // Validate reCAPTCHA
                                const recaptchaResponse = document.getElementById(
                                    "g-recaptcha-response").value;
                                if (!recaptchaResponse) {
                                    formValid = false;
                                    recaptchaValidationMessage.textContent =
                                        "Please complete the reCAPTCHA validation.";
                                    recaptchaValidationMessage.style.display = "block";
                                } else {
                                    recaptchaValidationMessage.style.display = "none";
                                }
                                // If form is not valid, prevent submission
                                if (!formValid) {
                                    event.preventDefault();
                                }
                            });
                        });
                        </script>
                        <!-- intl-tel-input JS -->
                        <script
                            src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/intlTelInput.min.js">
                        </script>
                        <script src="https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js"></script>


                        <script>
                        document.addEventListener("DOMContentLoaded", function() {
                            const phoneInput = document.querySelector("#phone");
                            const countryCodeInput = document.querySelector("#country_code");

                            // 10. Set the initial country code passed from PHP
                            const defaultCountry = "<?php echo $country_code; ?>";

                            // 11. Initialize intlTelInput with default country
                            const iti = window.intlTelInput(phoneInput, {
                                initialCountry: defaultCountry.toLowerCase(),
                                utilsScript: "https://cdnjs.cloudflare.com/ajax/libs/intl-tel-input/17.0.8/js/utils.js",
                            });

                            // 12. Update hidden input field with dial code when country changes
                            phoneInput.addEventListener("countrychange", function() {
                                const countryDialCode = iti.getSelectedCountryData().dialCode;
                                countryCodeInput.value = "+" + countryDialCode;
                            });

                            // 13. Set initial value for hidden input
                            countryCodeInput.value = "+" + iti.getSelectedCountryData().dialCode;

                            // 14. Prevent non-numeric input in phone number field
                            phoneInput.addEventListener("keypress", function(event) {
                                const charCode = event.which || event.keyCode;
                                if (charCode < 48 || charCode > 57) {
                                    event.preventDefault(); // Prevent non-numeric character
                                }
                            });
                        });
                        </script>
                    </div>
                </div>
            </div>

            <?php
         include('home-testimonals.php');
          
          ?>

            <section class="start-now-area bg-image pb-50" style="margin-top:-80px">
                <div class="container">
                    <div class="section-header" id="cta" style="text-align:center">
                        <img src="assets/img/medal.svg" alt="" width="150px">
                        <h2 class="fw-600 wow splt-txt words chars splitting animated">Our users have ranked us a High
                            Performer on G2</h2>

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

    <?php
      include('footerjs.php');
       
       ?>