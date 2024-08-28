<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Greeting Form</title>
</head>
<body>
    <form action="" method="get">
        <label for="first_name">First Name:</label>
        <input type="text" id="first_name" name="first_name" required>
        <br><br>
        <label for="last_name">Last Name:</label>
        <input type="text" id="last_name" name="last_name" required>
        <br><br>
        <input type="submit" value="Submit">
        <br><br>
    </form>
    <?php 
    if (isset($_GET['first_name']) && isset($_GET['last_name'])) {
        $firstName = $_GET['first_name'];
        $lastName =  $_GET['last_name'];
        $fullName = $firstName . " " . $lastName;

        echo "Howdy! " . $fullName;
    } 

    echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";
    
?>  
</body>
</html>