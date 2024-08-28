<?php
echo "<h3> Session </h3>";
// Start the session
session_start();

// Set the session variable
$_SESSION['program'] = "Web Dev Lab Report";

// Display the session variable
echo "The session variable 'program' is set to: " . $_SESSION['program'];
echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";
?>
