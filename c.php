<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // reCAPTCHA secret key
    $secretKey = "6LfTQooqAAAAAL7O5IbRJEkbu5xB_Qr3UfHoCgdj"; // Replace with your secret key

    // Get the reCAPTCHA response from the form
    $captchaResponse = $_POST['g-recaptcha-response'];

    // Check if the response is empty
    if (empty($captchaResponse)) {
        die("reCAPTCHA verification failed: No response provided.");
    }

    // Verify the reCAPTCHA response with Google's API
    $verifyUrl = "https://www.google.com/recaptcha/api/siteverify";
    $data = [
        'secret' => $secretKey,
        'response' => $captchaResponse,
    ];

    // Use CURL for verification
    $ch = curl_init($verifyUrl);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($data));
    $response = curl_exec($ch);
    curl_close($ch);

    if ($response === FALSE) {
        die("Failed to verify reCAPTCHA. Please try again later.");
    }

    $result = json_decode($response, true);

    // Check the verification result
    if (!$result || !$result['success']) {
        $errorCodes = $result['error-codes'] ?? [];
        die("reCAPTCHA verification failed: " . implode(", ", $errorCodes));
    }

    // Optional: Check the score for invisible reCAPTCHA (requires v3)
    if (isset($result['score']) && $result['score'] < 0.5) {
        die("reCAPTCHA verification failed: Low score (" . $result['score'] . ").");
    }

    // If reCAPTCHA is successful, process the form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $phone = htmlspecialchars($_POST['phone']);
    $company = htmlspecialchars($_POST['company']);
    $message = htmlspecialchars($_POST['message']);

    // For demo purposes, echo the data (you can replace this with email sending or database logic)
    echo "Form submitted successfully!<br>";
    echo "Name: $name<br>Email: $email<br>Phone: $phone<br>Company: $company<br>Message: $message";
}
?>
