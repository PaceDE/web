<?php
$host = 'localhost';
$user = 'root';
$pass = ''; // Define password if needed, here it's left empty
$db = 'db_php_student';

$con = mysqli_connect($host, $user, $pass, $db);

if ($con) {
    echo "Database Connection Created Successfully";
} else {
    echo "Database Not Connected";
}
?>
