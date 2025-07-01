<?php
$galleryDir = '../uploads/';

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_FILES['image'])) {
    $uploadFile = $galleryDir . basename($_FILES['image']['name']);

    // Move the uploaded file to the destination directory
    if (move_uploaded_file($_FILES['image']['tmp_name'], $uploadFile)) {
        // Save image details to a text file
        $imageDataFile = 'image_data.txt';

        $imageData = unserialize(file_get_contents($imageDataFile));

        if (!$imageData) {
            $imageData = [];
        }

        $imageData[] = ['filename' => basename($_FILES['image']['name'])];

        file_put_contents($imageDataFile, serialize($imageData));

        echo 'success';
    } else {
        echo 'error';
    }
} else {
    echo 'Invalid Request';
}
?>
