<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Validation</title>
</head>
<body>
    <?php
    // Initialize error messages
    $errors = false;
    
    // Check if form was submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Validate Name
        if (!isset($_POST['name']) || !preg_match("/^[a-zA-Z\s]+$/", $_POST['name'])) {
            $errors = true;
            echo '<script>alert("Name field is required and must contain alphabets only");</script>';
        }
        
        // Validate Email
        if (!isset($_POST['email']) || empty($_POST['email']) || !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
            $errors = true;
            echo '<script>alert("Email field is required and must be valid");</script>';
        }
        
        // Validate Mobile (Optional)
        if (isset($_POST['mobile']) && !preg_match("/^\d*$/", $_POST['mobile'])) {
            $errors = true;
            echo '<script>alert("Mobile number, if provided, must contain only numeric characters.");</script>';
        }
        
        // Validate Gender
        if (!isset($_POST['gender']) || empty($_POST['gender'])) {
            $errors = true;
            echo '<script>alert("Please specify the Gender");</script>';
        }
        
        // Display success message if no errors
        if (!$errors) {
            echo '<script>alert("Form validation successful");</script>';
        }
    }
    
    ?>

    <form action="" method="post">
        <label for="name">Name:</label>
        <input type="text" id="name" name="name">
        <br><br>
        
        <label for="email">Email:</label>
        <input type="email" id="email" name="email">
        <br><br>
        
        <label for="mobile">Mobile (Optional):</label>
        <input type="text" id="mobile" name="mobile">
        <br><br>
        
        <label>Gender:</label>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
        <br><br>
        
        <input type="submit" value="Submit">
    </form>

     <br> <hr> <h4> Dipesh Shrestha </h4> <hr>
    
</body>
</html>
