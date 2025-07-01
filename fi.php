<?php

include('offline.php');
// SQL query to fetch data from the ad_pro table
$query = "SELECT * FROM ad_pro";

// Execute the query
$result = mysqli_query($conn, $query);

// Check if query was successful
if ($result) {
    // Loop through the result set and fetch each row
    while ($row = mysqli_fetch_assoc($result)) {
        // Access individual fields like $row['project_name'], $row['project_file'], etc.
        echo "Project Name: " . $row['project_name'] . "<br>";
        echo "Brochure Link: " . $row['project_file'] . "<br>";
        echo "IP Address: " . $row['ip'] . "<br>";
        echo "Created At: " . $row['created_at'] . "<br><br>";
    }
} else {
    // If query failed, show an error
    echo "Error fetching data: " . mysqli_error($conn);
}

// Close the database connection
mysqli_close($conn);
?>
