<?php
session_start();
include('offline.php');
include('doctype.php');

function formatAdCopy($text) {
   // Replace *text* with <strong>text</strong>
   $formattedText = preg_replace('/\*(.*?)\*/', '<strong>$1</strong>', $text);
   // Convert newlines to <br> for proper line breaks
   $formattedText = nl2br($formattedText);
   return $formattedText;
}

// Define the API key and URL for the request
$apiKey = "amcv2wq7pu3ocieiagf3uwaq2eqpbzrwhrb9rzaqnd08sju00nbk4d0fjr83ygtr";
$apiUrl = "https://ai.test.propflo.ai/api/fetch-details/whatsapp-ad-copies";



// Default values
$projectName = "";
$language = "english"; // Default language
$uploadDirectory = 'ad_files/'; // Folder to store uploaded files
$brochureLink = ''; // Variable to store the file path
$error = '';
$captchaError = '';

// Handle POST request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   // reCAPTCHA validation
  // $recaptchaSecret = '6LeMHaEqAAAAAIYe3lam0N_ipeV3T24n1IU4uvxF'; // Replace with your secret key
   $recaptchaSecret='6Lcc98EqAAAAAJYLAzudSf-RbLZOZsB8IDMr9guJ';
   $recaptchaResponse = $_POST['recaptcha_response'];
   
   // Verify the CAPTCHA response
   $captchaVerifyUrl = 'https://www.google.com/recaptcha/api/siteverify';
   $response = file_get_contents($captchaVerifyUrl . '?secret=' . $recaptchaSecret . '&response=' . $recaptchaResponse);
   $responseKeys = json_decode($response, true);
   
   if(intval($responseKeys["success"]) !== 1) {
       $captchaError = "Please verify that you are not a robot.";
   } else {
        // Continue processing the form if CAPTCHA is successful
        $projectName = isset($_POST['project_name']) ? $_POST['project_name'] : '';
        $language = isset($_POST['language']) ? $_POST['language'] : 'english';
        $brochure = isset($_FILES['brochure']) ? $_FILES['brochure'] : null;
       $category=$_POST['category'];

        if($category == "None"){
             $category="";
        }


        $ipAddress = $_SERVER['REMOTE_ADDR']; // Get IP address of the user

         // Validate form data
         if (empty($projectName) && !$brochure) {
            $error = "Please provide project details or upload a brochure.";
        }

        // If brochure is uploaded, handle the file upload
        if ($brochure && $brochure['error'] == 0) {
            $fileName = basename($brochure['name']);
            $filePath = $uploadDirectory . $fileName;
            
            // Move the uploaded file to the target folder
            if (move_uploaded_file($brochure['tmp_name'], $filePath)) {
                $brochureLin = $filePath; // Set the file link
                $brochureLink="https://propflo.ai/$brochureLin";
            } else {
                $error = "There was an error uploading the file. Please try again.";
            }
        }

           // If no error, proceed with data insertion
           if (empty($error)) {
            // Prepare the SQL query (procedural style)
            $query = "INSERT INTO ad_pro (project_name, project_file, ip, created_at) VALUES ('$projectName', '$brochureLink', '$ipAddress', '$ltz')";
            
            // Execute the query
            if (mysqli_query($conn, $query)) {
                // Query was successful
                //echo "Data successfully inserted!";
            } else {
                // Query failed
                echo "Error: " . mysqli_error($conn);
            }
        }

       if (empty($error)) {
           $data = [
               'entityProjectName' => $projectName,
               'location' => '', // Example location
               'prompt' => $category,
               'additionalPrompt' => '', 
               'broucherLink' => $brochureLink,
               'domain' => '',
               'projectId' => '',
               'environment' => 'test'
           ];

           // Convert the data to JSON format for the API request
           $jsonData = json_encode($data);

           // Make the cURL request to the API
           $ch = curl_init();
           curl_setopt($ch, CURLOPT_URL, $apiUrl);
           curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
           curl_setopt($ch, CURLOPT_POST, true);
           curl_setopt($ch, CURLOPT_HTTPHEADER, [
               'Accept: application/json',
               'Authorization: Bearer ' . $apiKey,
               'Content-Type: application/json'
           ]);
           curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);

           // Execute the cURL request and get the response
           $response = curl_exec($ch);
           curl_close($ch);

           // Decode the JSON response
           $responseData = json_decode($response, true);

           // Check if the response contains the expected data
           if (isset($responseData['status']) && $responseData['status'] == 200) {
               $adCopy1 = $responseData['projectDetails']['copy1'];
               $adCopy2 = $responseData['projectDetails']['copy2'];
               $adCopy3 = $responseData['projectDetails']['copy3'];

               // Store the ad copies in the session
               $_SESSION['adCopies'] = [
                   'copy1' => formatAdCopy($adCopy1),
                   'copy2' => formatAdCopy($adCopy2),
                   'copy3' => formatAdCopy($adCopy3)
               ];
           } else {
               $error = "Error fetching ad copies. Please try again later.";
           }
       }
   }
}

// Retrieve ad copies from session (if they exist)
if (isset($_SESSION['adCopies'])) {
   $adCopy1 = $_SESSION['adCopies']['copy1'];
   $adCopy2 = $_SESSION['adCopies']['copy2'];
   $adCopy3 = $_SESSION['adCopies']['copy3'];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PropFlo Ad Copier: AI-Powered Real Estate Ad Copy Generator</title>
    <meta name="description"
        content="Create high-converting real estate ad copies effortlessly with PropFlo Ad Copier. Powered by AI, it generates tailored ads for projects, properties, and more in seconds. Boost your marketing now!">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <?php include('head.php'); ?>
    <style>
    /* Styling for form container */
    .form-container {
        max-width: 60%;
        margin: 0px auto;
        background: #fff;
        box-shadow: 0px 2px 5px 2px rgba(0, 0, 0, 0.1);
        border-radius: 10px;
        padding: 15px 20px;
    }

    #text-bt {
        text-align: right;
    }

    @media only screen and (max-width: 600px) {
        .form-container {
            max-width: 100%;
            margin-top: 100px !important;
        }

        #texts {
            text-align: center !important;
        }

        #text-bt {
            text-align: center !important;
        }
    }

    .ad-copy-container {
        display: flex;
        justify-content: space-between;
        gap: 20px;
    }

    .ad-copy-box {
        background-color: #f9f9f9;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 2px 10px rgba(0, 0, 0, 0.1);
        position: relative;
    }

    .ad-copy-box h3 {
        font-size: 18px;
        font-weight: 600;
        color: #2B3857;
        margin-bottom: 15px;
    }

    .ad-copy-box p {
        font-size: 16px;
        color: #333;
        line-height: 1.5;
    }

    .copy-btn {
        position: absolute;
        top: 10px;
        right: 10px;
        color: #000;
        border: 1px solid #08CF65;
        padding: 4px 16px;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease;
    }

    .copy-btn:hover {
        background-color: #08CF65;
        color: white !important;
    }

    .copy-btn-active {
        border: 1px solid #08CF65;
        color: #000;
    }

    #regenerateButton {
        background-color: #08CF65;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        font-size: 16px;
        transition: background-color 0.3s ease;
    }

    #regenerateButton:hover {
        background-color: #08CF65;
    }

    .back-button {
        font-weight: 600;
        font-size: 20px;
        color: #2B3857;
    }

    .back-button:hover {
        color: #2B3857;
        text-decoration: underline;
    }

    .banner-three__content h1 {
        font-size: 35px !important;
    }

    @media (min-width: 1200px) and (max-width: 1440px) {
        .banner-three__content h1 {
            font-size: 33px !important;
        }
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
                        <h1 style="color: #2B3857;" class="wow fadeInUp" data-wow-delay="300ms"
                            data-wow-duration="900ms">
                            Generated AD Copy
                        </h1>
                    </div>
                    <div class="row mt-10 mb-10" style="display: flex;align-items: center;" id="texts">
                        <div class="col-md-8 col-sm-12">
                            <a href="https://www.propflo.ai/ad" class="back-button mt-10 mb-10">
                                <span class="arrow">&#8592;</span> Back to copy generator
                            </a>
                        </div>
                        <div class="col-md-4 col-sm-12" id="text-bt">
                            <button id="regenerateButton" class="btn btn-primary mt-3">
                                <i id="refreshIcon" class="fas fa-sync-alt"></i> Regenerate
                            </button>
                        </div>
                    </div>
                    <!-- Ad Copy Display with Bootstrap grid -->
                    <div class="row mt-30 mb-50">
                        <div class="col-sm-12 col-md-2 mb-3"></div>
                        <div class=" col-sm-12 col-md-8 mb-3">
                            <div class="ad-copy-box" id="adCopyContainer">
                                <h3 id="adCopyTitle">&nbsp;</h3>
                                <button class="copy-btn" onclick="copyText('adCopyText', this)">Copy</button>
                                <p class="mt-30" id="adCopyText"><?php echo nl2br($adCopy1); ?></p>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-2 mb-3"></div>
                    </div>
                </div>
            </div>
        </main>
        <script>
        let currentCopy = 1; // Tracks which copy is being displayed
        const adCopies = [
            <?php echo json_encode($adCopy1); ?>,
            <?php echo json_encode($adCopy2); ?>,
            <?php echo json_encode($adCopy3); ?>
        ];

        // Update the initial ad copy content
        document.getElementById('adCopyText').innerHTML = adCopies[currentCopy -
            1]; // Use innerHTML to render HTML content

        // Event listener for the regenerate button
        document.getElementById('regenerateButton').addEventListener('click', function() {
            // Add loading effect to the button by changing icon and text
            document.getElementById('refreshIcon').classList.add('fa-spin'); // Add spinning animation
            document.getElementById('regenerateButton').disabled = true; // Disable button temporarily

            // Add fade-out animation to the container
            document.getElementById('adCopyContainer').classList.add('fade-out');

            // Simulate a delay (optional) to show the "loading" state
            setTimeout(function() {
                // Cycle through ad copies (1 → 2 → 3 → 1)
                currentCopy = (currentCopy % adCopies.length) + 1;

                // Update the title and the content based on currentCopy
                document.getElementById('adCopyTitle').textContent = '';
                document.getElementById('adCopyText').innerHTML = adCopies[currentCopy -
                    1]; // Use innerHTML to render HTML content

                // Reset the copy button state
                var buttons = document.querySelectorAll('.copy-btn');
                buttons.forEach(function(btn) {
                    btn.classList.remove('copy-btn-active');
                    btn.textContent = 'Copy'; // Reset text to "Copy"
                });

                // Trigger fade-in animation after content has been updated
                document.getElementById('adCopyContainer').classList.remove('fade-out');

                // Reset regenerate button and icon state
                document.getElementById('refreshIcon').classList.remove('fa-spin');
                document.getElementById('regenerateButton').disabled = false;
            }, 1000);
        });

        // Function to copy text
        function copyText(elementId, button) {
            const textElement = document.getElementById(elementId);
            const text = textElement.innerText || textElement.textContent;
            const textArea = document.createElement('textarea');
            textArea.value = text;
            document.body.appendChild(textArea);
            textArea.select();
            document.execCommand('copy');
            document.body.removeChild(textArea);
            button.textContent = 'Copied!';
            button.classList.add('copy-btn-active');
            setTimeout(() => {
                button.textContent = 'Copy';
                button.classList.remove('copy-btn-active');
            }, 2000);


            // Send AJAX request to store the copied ad copy data
            var xhr = new XMLHttpRequest();
            xhr.open("POST", "update_copied_ad.php", true);
            xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
            xhr.onreadystatechange = function() {
                if (xhr.readyState === 4 && xhr.status === 200) {
                    console.log("Database updated successfully: " + xhr.responseText);
                }
            };
            xhr.send("adCopyId=adCopy" + currentCopy); // Send the current ad copy ID
        }
        </script>
        <style>
        /* Animation for fading out the ad copy container */
        .fade-out {
            opacity: 0;
            transition: opacity 0.5s ease-out;
        }

        /* Animation for fading in the ad copy container */
        .fade-in {
            opacity: 1;
            transition: opacity 0.5s ease-in;
        }
        </style>
    </div>
</body>

</html>
</script>
</body>

</html>