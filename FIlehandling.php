<?php
// File where the view count is stored
$filename = "view_count.txt";

// Check if the file exists
if (file_exists($filename)) {
    // Open the file in read mode
    $file = fopen($filename, "r");
    
    // Read the current view count
    $viewCount = intval(fread($file, filesize($filename)));
    
    // Close the file
    fclose($file);
} else {
    // If the file does not exist, initialize the view count to 0
    $viewCount = 0;
}

// Increment the view count
$viewCount++;

// Open the file in write mode
$file = fopen($filename, "w");

// Write the new view count to the file
fwrite($file, $viewCount);

// Close the file
fclose($file);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page View Count</title>
</head>
<body>
    <h1>Welcome to the Page</h1>
    <p>This page has been viewed <?php echo $viewCount; ?> times.</p>
    <br> <hr> <h4> Dipesh Shrestha </h4> <hr>
</body>
</html>
