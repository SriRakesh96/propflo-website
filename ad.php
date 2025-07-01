<?php
   session_start();
   include('offline.php');
   include('doctype.php');
   ?>

<head>
    <!-- Best Intelligent Real Estate CRM Software India 2024 - PropFlo -->
    <title>PropFlo Ad Copier: AI-Powered Real Estate Ad Copy Generator</title>
    <meta name="description"
        content="Create high-converting real estate ad copies effortlessly with PropFlo Ad Copier. Powered by AI, it generates tailored ads for projects, properties, and more in seconds. Boost your marketing now!">
    <!-- <script src="https://www.google.com/recaptcha/api.js?render=6LeMHaEqAAAAAPIxsRAs4981gCYN5XDCj14nkvuJ"></script>-->
    <script src="https://www.google.com/recaptcha/api.js?render=6Lcc98EqAAAAACWFnaoh5WJjhkwetDFODOE9Gqgb"></script>
    <?php include('head.php'); ?>
    <style>
    .floating-cta {
        display: none !important;
    }

    .bottom_fixed_item {
        display: none !important;
    }

    .grecaptcha-badge {
        display: none !important;
    }

    .banner-three__content h1 {
        font-size: 35px !important;
        line-height: 40px !important;
    }

    @media (min-width: 1200px) and (max-width: 1440px) {
        .banner-three__content h1 {
            font-size: 33px !important;
        }
    }

    /* Hover effect when the file input is disabled */
    .upload-container input[type="file"]:disabled {
        background-color: #f1f1f1;
        /* Hover color */
        cursor: not-allowed;
        /* Show not-allowed cursor */
    }

    /* Styling for form container */
    .form-container {
        max-width: 60%;
        margin: 0px auto;
        background: #fff;
        box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 25px 25px;
    }

    @media only screen and (max-width: 600px) {
        .form-container {
            max-width: 100%;
            margin-top: 100px !important;
        }
    }

    .btn-generate {
        background-color: #00c853;
        color: #fff;
        font-weight: 500;
    }

    .btn-generate:hover {
        background-color: #00b147;
        color: #fff;
    }

    .divider {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .divider2 {
        display: flex;
        align-items: center;
        text-align: center;
    }

    .divider2::before,
    .divider2::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #8b8b8b;
    }

    .divider::before,
    .divider::after {
        content: '';
        flex: 1;
        border-bottom: 1px solid #e9e9e9;
    }

    .divider:not(:empty)::before {
        margin-right: .5em;
    }

    .divider:not(:empty)::after {
        margin-left: .5em;
    }

    /* Upload box styling */
    .upload-content img {
        width: 50px;
    }

    .upload-container {
        position: relative;
        width: 100%;
        height: 150px;
        /* Adjust height */
        border: 1px dashed #999;
        border-radius: 10px;
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: #f9f9f9;
        text-align: center;
        cursor: pointer;
    }

    .upload-container:hover {
        background-color: #f1f1f1;
    }

    .upload-container input[type="file"] {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        opacity: 0;
        cursor: pointer;
    }

    #project::placeholder {
        font-size: 14px;
        line-height: 1.8;
        /* Adjust the font size as needed */
        color: #999;
        /* Placeholder color */
    }

    #project {
        line-height: 1.6;
        /* Adjust line height for readability */
    }

    .position-relative {
        position: relative;
    }

    .close-btn {
        position: absolute;
        top: 52%;
        right: 10px;
        /* Adjust as needed for spacing */
        color: #212529;
        background: none;
        border: none;
        font-size: 1.2rem;
        cursor: pointer;
        display: none;
    }

    .close-btn:hover {
        color: #08CF65;
        /* Change color on hover */
    }

    /* Ensure that textarea has enough padding for the button */
    #project {
        padding-right: 30px;
        /* Adjust the padding for the close button */
    }

    .form-control {
        width: 100%;
        padding: 10px;
        padding-right: 40px;
        font-size: 1rem;
        transition: color 0.3s ease;
        /* Smooth color transition for placeholder */
    }

    .form-control::placeholder {
        color: #ccc;
        opacity: 1;
        transition: opacity 0.3s ease;
    }

    .backg {
        background-image: url("assets/img/ad-back.png");
        background-repeat: no-repeat;
        background-size: cover;
    }

    @media only screen and (max-width: 600px) {
        .backg {
            background-image: none;
        }
    }

    /* General Dropdown Styling */
    .custom-dropdown {
        background-color: #f8f9fa;
        /* Light background for the dropdown */
        border: 1px solid #ced4da;
        /* Light gray border */
        border-radius: 8px;
        /* Rounded corners */
        padding: 12px;
        /* Padding inside the dropdown */
        font-size: 1rem;
        /* Slightly larger text for readability */
        color: #495057;
        /* Neutral text color */
        transition: border-color 0.3s ease, box-shadow 0.3s ease;
    }

    /* Focus State */
    .custom-dropdown:focus {
        border-color: #007bff;
        /* Bootstrap primary color for focus */
        box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
        /* Subtle blue glow */
        outline: none;
        /* Remove default outline */
    }

    /* Dropdown Option Styling */
    .custom-dropdown option {
        padding: 10px;
        /* Add padding for better spacing */
        color: #495057;
        /* Neutral text color */
        background-color: #ffffff;
        /* Ensure options have a white background */
    }

    /* Hover Effect for Dropdown */
    .custom-dropdown:hover {
        border-color: #80bdff;
        /* Lighter blue border on hover */
    }

    /* Disabled Option Styling */
    .custom-dropdown option:disabled {
        color: #adb5bd;
        /* Gray color for disabled text */
    }

    .copies-sec {
        display: flex;
    }

    .copies {
        background: #ebebeb;
        padding: 8px;
        text-align: center;
        display: inline-block;
        border-radius: 25px;
        margin: 0px auto 30px auto;
    }
    </style>
</head>

<body class="backg">
    <?php include('preloader.php'); ?>
    <?php include('header.php'); ?>
    <div class="ScrollSmoother-content">
        <main>
            <div class="container mt-120 mb-50">
                <div class="form-container">
                    <div class="banner-three__content text-center">
                        <h1 style="color: #2B3857; margin-bottom:5px;" class="wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="900ms">
                            Free WhatsApp Copy Generator
                        </h1>
                        <p class="text-center text-muted" style="margin-top:0px; margin-bottom:30px">
                            Craft High-Converting Real Estate Ads in seconds
                        </p>
                    </div>
                    <?php
                  // Initial values
                  $initial_copies = 612; // Starting copies
                  $initial_marketers = 120; // Starting marketers
                  $start_date = '2024-12-27'; // Base date for calculation
                  
                  // Get the current date
                  $current_date = new DateTime();
                  $base_date = new DateTime($start_date);
                  
                  // Calculate the difference in days
                  $interval = $base_date->diff($current_date);
                  $days_since_start = $interval->days;
                  
                  // Calculate updated values
                  $copies_generated = $initial_copies + ($days_since_start * 150);
                  $marketers = $initial_marketers + ($days_since_start * 50);
                  
                  // Display the result
                  echo '<div class="copies-sec">';
                  echo '<p class="copies">🔥 ' . $copies_generated . '+ Copies Generated So Far by ' . $marketers . ' Marketers</p>';
                  echo '</div>';
                  ?>
                    <form id="myForm" action="ad_copy" method="POST" enctype="multipart/form-data"
                        onsubmit="return showPreloader(event)">
                        <div class="mb-4 position-relative">
                            <label for="project" class="form-label fw-semibold">Which project do you want to
                                advertise?</label>
                            <input type="text" id="project" class="form-control" name="project_name"
                                placeholder="Lodha The World Towers, Worli, Mumbai" />
                            <button id="close-btn" class="close-btn" onclick="clearText(event)">✖</button>
                        </div>
                        <div class="divider text-muted fw-bold mt-40 mb-40">OR</div>
                        <div class="mb-4">
                            <label for="brochure" class="form-label fw-semibold">Upload project's brochure</label>
                            <div class="upload-container">
                                <input type="file" id="brochure" name="brochure"
                                    accept=".docx,.doc,.pdf,.jpeg,.png,.jpg,.gif,.xls,.xlsx,.ppt,.pptx,.csv"
                                    onchange="validateFileSize(event)">
                                <div class="upload-content">
                                    <img src="assets/img/up.png" alt="Upload Icon">
                                    <div id="file-name" class="upload-text">Upload a file or drag and drop</div>
                                    <div class="upload-small-text">Files up to 20 MB</div>
                                </div>
                            </div>
                        </div>
                        <script>
                        function validateFileSize(event) {
                            const file = event.target.files[0]; // Get the selected file
                            const maxSize = 20 * 1024 * 1024; // 20 MB in bytes

                            if (file && file.size > maxSize) {
                                alert("The selected file exceeds the 20 MB limit. Please choose a smaller file.");
                                event.target.value = ""; // Clear the input field
                                document.getElementById("file-name").textContent =
                                    "Upload a file or drag and drop"; // Reset file name display
                            } else if (file) {
                                document.getElementById("file-name").textContent = file.name; // Display the file name
                            }
                        }
                        </script>
                        <div class="divider2 text-muted fw-bold mt-40 mb-40"></div>
                        <div class="mb-4">
                            <label for="category" class="form-label fw-semibold">What do you want to focus on in the ad
                                copy?</label>
                            <select id="category" class="form-select custom-dropdown" name="category" required>
                                <option value="" selected disabled>Select an option</option>
                                <option
                                    value="Highlight the property's strategic location, proximity to amenities, and accessibility.">
                                    Location</option>
                                <option value="Emphasize the credibility and track record of the developer.">Developer
                                    Reputation</option>
                                <option
                                    value="Indicate the scale of the project, whether it's a large-scale development or a boutique project.">
                                    Project Size</option>
                                <option value="Specify the available property configurations (e.g., 1BHK, 2BHK, 3BHK).">
                                    Configurations</option>
                                <option
                                    value="Highlight the range of amenities offered, such as swimming pools, gyms, clubhouses, and landscaped gardens.">
                                    Amenities</option>
                                <option value="Clearly state the pricing and any special offers or discounts.">Price
                                </option>
                                <option
                                    value="Emphasize the property's connectivity to major roads, highways, public transportation, and commercial hubs.">
                                    Connectivity</option>
                                <option value="None">None</option>

                            </select>
                        </div>
                        <div class="text-center">
                            <button id="submit-button" class="btn-propflo mt-20" style="width:100%" disabled>Generate AD
                                Copy</button>
                        </div>
                    </form>
                    <script>
                    // Array of placeholders
                    const placeholders = [
                        "Lodha The World Towers, Worli, Mumbai",
                        "DLF The Camellias, Golf Course Road, Gurugram",
                        "Rajapushpa Aurelia, Tellapur, Hyderabad"
                    ];

                    const inputField = document.getElementById("project");
                    const closeBtn = document.getElementById("close-btn");

                    let currentIndex = 0;
                    let placeholderInterval;

                    // Function to rotate the placeholder
                    function rotatePlaceholder() {
                        if (inputField.value.trim() !== "") return; // Stop rotation if input field has text

                        // Fade out the placeholder
                        inputField.style.color = "transparent"; // Make text transparent
                        setTimeout(() => {
                            // Change the placeholder text
                            inputField.placeholder = placeholders[currentIndex];
                            currentIndex = (currentIndex + 1) % placeholders.length;

                            // Fade in the placeholder
                            inputField.style.color = ""; // Reset text color
                        }, 500); // Wait for fade-out to complete
                    }

                    // Start the placeholder rotation every 2 seconds
                    placeholderInterval = setInterval(rotatePlaceholder, 2000);

                    // Event listener for input field
                    inputField.addEventListener("input", () => {
                        closeBtn.style.display = inputField.value.trim() ? "block" : "none";

                        if (inputField.value.trim() !== "") {
                            clearInterval(placeholderInterval); // Stop placeholder rotation
                        } else {
                            // Resume placeholder rotation if input is cleared
                            if (!placeholderInterval) {
                                placeholderInterval = setInterval(rotatePlaceholder, 2000);
                            }
                        }
                    });

                    // Allow form submission on Enter key press
                    inputField.addEventListener("keydown", (event) => {
                        if (event.key === "Enter") {
                            event.preventDefault(); // Prevent the default action (e.g., form submission)
                            document.querySelector('form').dispatchEvent(new Event('submit', {
                                cancelable: true
                            })); // Trigger form submission
                        }
                    });

                    // Clear the text when close button is clicked
                    function clearText(event) {
                        event.preventDefault();
                        inputField.value = "";
                        closeBtn.style.display = "none";

                        // Resume placeholder rotation
                        if (!placeholderInterval) {
                            placeholderInterval = setInterval(rotatePlaceholder, 2000);
                        }
                    }
                    </script>
                    <script>
                    const textarea = document.getElementById('project');
                    const closeButton = document.getElementById('close-btn');
                    const fileInput = document.getElementById('brochure');
                    const submitButton = document.getElementById('submit-button');

                    function checkFormValidity() {
                        // Enable the submit button if either the textarea has text or a file is selected
                        if (textarea.value.trim() !== "" || fileInput.files.length > 0) {
                            submitButton.disabled = false;
                        } else {
                            submitButton.disabled = true;
                        }
                    }

                    textarea.addEventListener('input', function() {
                        closeButton.style.display = textarea.value.trim() ? "block" : "none";
                        fileInput.disabled = textarea.value.trim() !== "";
                        checkFormValidity(); // Check form validity on input
                    });

                    fileInput.addEventListener('change', function() {
                        updateFileName(); // Update file name display
                        checkFormValidity(); // Check form validity on file change
                    });

                    function clearText(event) {
                        event.preventDefault();
                        textarea.value = "";
                        closeButton.style.display = "none";
                        fileInput.disabled = false;
                        fileInput.value = ""; // Clear the file input
                        document.getElementById('file-name').innerText =
                            "Upload a file or drag and drop"; // Reset file name display
                        checkFormValidity(); // Check form validity after clearing
                    }

                    function showPreloader(event) {
                        // Prevent the default form submission to handle it manually
                        event.preventDefault();

                        // Show the preloader
                        document.getElementById('preloader').style.display = 'flex';
                        document.body.style.backgroundColor = '#f0f0f0';

                        // Define the stages to display
                        const stages = [
                            "Preparing your request...",
                            "Getting ready to search...",
                            "Searching the web...",
                            "Sifting through information...",
                            "Processing the results...",
                            "Analyzing the data...",
                            "Formatting your results...",
                            "Almost there...",
                            "Hold on! Taking longer than expected"
                        ];

                        let messageIndex = 0;
                        const messageElement = document.getElementById('preloader-message');

                        // Update messages sequentially every 1 second (1000ms)
                        const messageInterval = setInterval(() => {
                            if (messageIndex < stages.length) {
                                messageElement.textContent = stages[messageIndex];
                                messageIndex++;
                            } else {
                                clearInterval(messageInterval); // Stop updating after all messages are shown
                            }
                        }, 1500); // Update every 1 second

                        // Submit the form immediately (parallel execution)
                        document.getElementById('myForm').submit();
                    }


                    function updateFileName() {
                        const fileName = fileInput.files[0]?.name || "Upload a file or drag and drop";
                        document.getElementById('file-name').innerText = fileName;
                    }
                    </script>
                </div>
            </div>
        </main>
        <?php include('footer.php'); ?>
    </div>
    <!-- Back to top btn area start here -->
    <button id="back-top" class="btn-backToTop">
        <i class="fa-solid fa-chevron-up"></i>
    </button>
    <!-- Back to top btn area end here -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <?php include('footerjs.php'); ?>
    <!-- Preloader (hidden by default) -->
    <!-- Preloader (hidden by default) -->
    <!-- Preloader -->
    <div id="preloader" style="display: none;">
        <div class="loader"></div>
        <div class="message" id="preloader-message">Preparing your request...</div>
    </div>
    <script>
    grecaptcha.ready(function() {
        grecaptcha.execute('6Lcc98EqAAAAACWFnaoh5WJjhkwetDFODOE9Gqgb', {
            action: 'submit'
        }).then(function(token) {
            // Append the token to the form
            var recaptchaResponse = document.createElement('input');
            recaptchaResponse.setAttribute('type', 'hidden');
            recaptchaResponse.setAttribute('name', 'recaptcha_response');
            recaptchaResponse.setAttribute('value', token);
            document.getElementById('myForm').appendChild(recaptchaResponse);
        });
    });
    </script>
    <style>
    /* Preloader */
    #preloader {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: rgba(0, 0, 0, 0.8);
        z-index: 9999;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        color: white;
        font-size: 18px;
        text-align: center;
    }

    #preloader .loader {
        border: 6px solid #f3f3f3;
        /* Light gray */
        border-top: 6px solid #3498db;
        /* Blue */
        border-radius: 50%;
        width: 40px;
        height: 40px;
        animation: spin 1.5s linear infinite;
    }

    @keyframes spin {
        0% {
            transform: rotate(0deg);
        }

        100% {
            transform: rotate(360deg);
        }
    }

    #preloader .message {
        margin-top: 20px;
        font-size: 16px;
        color: white;
        padding: 0 15px;
        /* Adjust for smaller screens */
    }
    </style>
</body>

</html>