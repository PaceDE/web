<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Set and Display Cookies</title>
    <h3> Set And Display Cookies </h3>
</head>
<body>

<?php
// Set cookies for 2 days
$cookieExpirationTime = time() + (2 * 24 * 60 * 60); // 2 days in seconds

// Set student roll number and name cookies
setcookie("student_roll", "8", $cookieExpirationTime, "/");
setcookie("student_name", "Messi", $cookieExpirationTime, "/");

// Check if cookies are set and display them
if (isset($_COOKIE["student_roll"]) && isset($_COOKIE["student_name"])) 
{
    echo "Student Roll Number: " . $_COOKIE["student_roll"] . "<br>";
    echo "Student Name: " . $_COOKIE["student_name"];
} 
else 
{
    echo "Cookies are not set.";
}
?>

<br> <hr> <h4> Dipesh Shrestha </h4> <hr>

</body>
</html>
