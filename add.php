<?php
include('offline.php');


// Step 2: Fetch All Records from the ad_pro Table (After Deletion)
$fetchQuery = "SELECT * FROM ad_pro";
$result = mysqli_query($conn, $fetchQuery);

// Check if there are any results
if (mysqli_num_rows($result) > 0) {
    // Start the table and add the table headers
    echo "<table border='1' cellpadding='10' cellspacing='0'>";
    echo "<tr>";

    // Fetch the column names for the header row
    $columns = mysqli_fetch_fields($result);
    foreach ($columns as $column) {
        echo "<th>" . $column->name . "</th>";
    }
    echo "</tr>";

    // Output data of each row
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>";
        foreach ($row as $value) {
            echo "<td>" . htmlspecialchars($value) . "</td>";
        }
        echo "</tr>";
    }

    echo "</table>";
} else {
    echo "No records found.<br>";
}

// Step 3: Close the connection
mysqli_close($conn);
?>
