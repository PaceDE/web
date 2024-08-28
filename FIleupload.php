<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Check File Size</title>
</head>
<body>
    <h1>Check File Size</h1>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="image">Select image to upload:</label>
        <input type="file" name="image" id="image">
        <br><br>
        <input type="submit" value="Check File Size" name="submit">
    </form>
    <?php
    $maxFileSize = 2 * 1024 * 1024; // 2 MB

    if ( $_SERVER["REQUEST_METHOD"] == "POST" )
    {
        if ( isset($_FILES["image"]) && $_FILES["image"]["error"] == UPLOAD_ERR_OK )
        {
            $fileSize = $_FILES["image"]["size"];
            
            if ( $fileSize <= $maxFileSize )
            {
                echo "The file size is within the allowed limit of 2 MB.";
            }
            else
            {
                echo "Error: File size exceeds 2 MB.";
            }
        }
        else
        {
            echo "Error: No file was uploaded or there was an upload error.";
        }
    }

    echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";
    ?>
</body>
</html>
