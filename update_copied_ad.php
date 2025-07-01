<?php
session_start();
include('offline.php'); // Database connection

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $adCopyId = $_POST['adCopyId']; // 'adCopy1', 'adCopy2', etc.

    // Map the copied ID to the actual ad copy text or identifier in your database
    $copyMap = [
        'adCopy1' => 'Copy 1',
        'adCopy2' => 'Copy 2',
        'adCopy3' => 'Copy 3'
    ];
    $copiedAdCopy = isset($copyMap[$adCopyId]) ? $copyMap[$adCopyId] : null;

    if ($copiedAdCopy) {
        // Update the database for the current user/session
        $query = "UPDATE ad_pro SET copied_ad_copy = '$copiedAdCopy'  ORDER BY created_at DESC LIMIT 1";
        
        if (mysqli_query($conn, $query)) {
            echo "Database updated successfully.";
        } else {
            echo "Error updating database: " . mysqli_error($conn);
        }
    } else {
        echo "Invalid Ad Copy ID.";
    }
}
?>
