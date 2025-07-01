<?php
// your_image_upload_handler.php

include('offline.php');

$uploadDir = '../uploads/blog-images/';

if (!empty($_FILES['image']) && $_FILES['image']['error'] === UPLOAD_ERR_OK) {
    $tempName = $_FILES['image']['tmp_name'];
    $fileName = $_FILES['image']['name'];

    // Move the uploaded file to the desired directory
    $destination = $uploadDir . $fileName;
    move_uploaded_file($tempName, $destination);

    $url="https://propflo.ai/uploads/blog-images/$fileName";

    // Return the URL of the uploaded image
    $response = ['url' => "$url"];
    
    // Set Content-Type header to application/json
    header('Content-Type: application/json');

    echo json_encode($response);
} else {
    // Return the error message in JSON format
    echo json_encode(['error' => 'Image upload failed']);
}
?>
