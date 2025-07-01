<?php
include("offline.php");

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Posting data from form

    // Extract form data
    $job_role = check_input($_POST['job_title']);
    $job_id = check_input($_POST['job_id']);
    $job_title = check_input($_POST['job_title']);
    $name = check_input($_POST['name']);
    $email = check_input(strtolower($_POST['email']));
    $countryCode = check_input($_POST['countryCode']);
    $phone = check_input($_POST['phone']);
    $contact = "$countryCode$phone";
    $how_bento = check_input($_POST['how_bento']);

    // Verify reCAPTCHA response
    $recaptchaSecretKey = '6LfTQooqAAAAAL7O5IbRJEkbu5xB_Qr3UfHoCgdj'; // Replace with your reCAPTCHA Secret Key
    $recaptchaToken = $_POST['g-recaptcha-response']; // reCAPTCHA response

    if (empty($recaptchaToken)) {
        echo "reCAPTCHA token missing. Please try again.";
        exit;
    }

    $url = 'https://www.google.com/recaptcha/api/siteverify';
    $data = [
        'secret' => $recaptchaSecretKey,
        'response' => $recaptchaToken
    ];

    $options = [
        'http' => [
            'header' => "Content-type: application/x-www-form-urlencoded\r\n",
            'method' => 'POST',
            'content' => http_build_query($data)
        ]
    ];

    $context = stream_context_create($options);
    $result = file_get_contents($url, false, $context);

    if ($result === false) {
        echo "Failed to connect to reCAPTCHA server. Please try again.";
     
    }

    $response = json_decode($result);


    $response = json_decode($result);

    if ($response->success) {
        // Handle file upload
        if (isset($_FILES['file']) && $_FILES['file']['error'] === UPLOAD_ERR_OK) {
            $filename = $_FILES['file']['name'];
            $fileTmpPath = $_FILES['file']['tmp_name'];
            $fileSize = $_FILES['file']['size'];

            // Validate file type and size
            $allowedExtensions = ['doc', 'docx', 'pdf'];
            $fileExtension = strtolower(pathinfo($filename, PATHINFO_EXTENSION));
            $maxFileSize = 5 * 1024 * 1024; // 5MB

            if (!in_array($fileExtension, $allowedExtensions)) {
                echo "Invalid file format. Allowed formats: DOC, DOCX, PDF.";
                exit;
            }

            if ($fileSize > $maxFileSize) {
                echo "File size exceeds the 5MB limit.";
                exit;
            }

            $t = time();
            $tag = "_Resume";
            $rand = $t;
            $tr = "{$name}{$tag}{$rand}";
            $newFileName = "{$tr}.{$fileExtension}";
            $targetDir = 'assets/resumes';
            $targetFilePath = $targetDir . $newFileName;

            if (!move_uploaded_file($fileTmpPath, $targetFilePath)) {
                echo "Failed to upload the file. Please try again.";
                exit;
            }
        } else {
            echo "File upload error. Please select a valid file.";
            exit;
        }

        // Prepare date variables
        $ltz = date("Y-m-d H:i:s"); // Local timestamp
        $app_date = date("Y-m-d", strtotime($ltz));

        // Insert data into the database
        $ins_apply = "INSERT INTO `propflo_applicants` (`id`, `job_id`, `job_name`, `app_id`, `fullname`, `email`, `phone`, `how_abt_propflo`, `resume`, `applied_on`, `applied_date`, `act`) 
                      VALUES (NULL, '$job_id', '$job_title', '$tr', '$name', '$email', '$contact', '$how_bento', '$targetFilePath', '$ltz', '$app_date', '1')";

        if (mysqli_query($conn, $ins_apply)) {
            echo "<meta http-equiv=\"refresh\" content=\"0;url=thank-you?jb=32\" />";
        } else {
            echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
        }
    } else {
        echo "reCAPTCHA verification failed. Please try again.";
    }
} else {
    echo "<meta http-equiv=\"refresh\" content=\"0;url=oops\" />";
}

mysqli_close($conn);
?>