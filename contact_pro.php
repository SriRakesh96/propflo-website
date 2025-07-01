<?php
session_start();

// Default values for UTM parameters
$utm_source = isset($_SESSION['utm_source']) ? $_SESSION['utm_source'] : 'Website';
$utm_campaign = isset($_SESSION['utm_campaign']) ? $_SESSION['utm_campaign'] : 'Website';

include("offline.php"); // Ensure this file establishes the DB connection in $conn


// Process form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize inputs
    $form_name = check_input($_POST["form-name"]);
    $name = check_input($_POST["name"]);
    $email = check_input($_POST["email"]);
    $cc = check_input($_POST['country_code']);
    $phon = check_input($_POST["phone"]);
 $company = check_input($_POST["company"]);
  /*  $message =  check_input($_POST["message"]);*/

    // Validation
    if (!preg_match('/^[a-zA-Z\s]+$/', $name)) {
        echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
        exit; // Stop execution if the name contains invalid characters
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
        exit; // Stop execution if the email is invalid
    }

    if (!ctype_digit($phon)) {
        echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
        exit; // Stop execution if the phone contains non-numeric characters
    }


  

    // Prepare the phone number
    $phone = "$cc$phon";

    // reCAPTCHA validation
    $recaptcha_response = $_POST['g-recaptcha-response'];
  //  $secret_key = "6Lc8-5EqAAAAAKeHyHtKESvEzDvxghi4Bhq-yLRa";  // Replace with your reCAPTCHA secret key
    $secret_key="6Lf9OyArAAAAANEofhhto2UyUdP941vLEeg9LDwU";
    $recaptcha_url = "https://www.google.com/recaptcha/api/siteverify";

    $recaptcha_verify = file_get_contents($recaptcha_url . "?secret=" . $secret_key . "&response=" . $recaptcha_response);
    $recaptcha_result = json_decode($recaptcha_verify);

    if ($recaptcha_result->success) {
        // Prepare data for API request
        $apiUrl = "https://api.propflo.ai/api/leads/open-api";
        $apiKey = "MUJGUmZ3UncwTG5HNm9lMA==";
        $uuid = "a256f6d8-ff2a-462f-9c3d-a7aced2c0990";

        $data = array(
            "firstName" => $name,
            "lastName" => "",
            "email" => $email,
            "phoneNumber" => $phone,
            "sourceTypeId" => "63d0b9d334ab113dbd2c5923",
            "sourceId" => "63db6c5934ab113dbd2c593e",
            "source" => $utm_source,
            "sourceName" => "propflo.ai",
            "campaignName" => $utm_campaign,
            "description" => "$company",
        );

        // Send API request
        $headers = array(
            "Content-Type: application/json",
            "secretkey: $apiKey",
            "uuid: $uuid",
        );

        $jsonData = json_encode($data);
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $jsonData);
        curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

        $apiResponse = curl_exec($ch);
        $apiResponseCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        curl_close($ch);

        // Store in the database
        $sql = "INSERT INTO `propflo_contact` (`id`, `form`, `name`, `email`, `phone`, `company`, `prop_message`, `source`, `msg_on`, `act`)
                VALUES (NULL, '$form_name', '$name', '$email', '$phone', '$company', '', '$utm_campaign', '$ltz', '1')";

        if (mysqli_query($conn, $sql)) {
            if ($apiResponseCode == 200) {
                echo "<meta http-equiv=\"refresh\" content=\"0;url=https://propflo.ai/thank-you\" />";
            } else {
                echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
            }
        } else {
            echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
        }
    } else {
        echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
    }
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
}

// Close database connection
mysqli_close($conn);
?>