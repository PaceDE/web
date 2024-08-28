<?php include 'dbConnection.php'; ?>
<html>
<head>
    <title>Insert Page</title>
</head>
<body>
    <form action="" method="post">
        <table>
            <tr>
                <td>First Name</td>
                <td><input type="text" name="fname"></td>
            </tr>
            <tr>
                <td>Last Name</td>
                <td><input type="text" name="lname" required></td>
            </tr>
            <tr>
                <td>Address</td>
                <td><input type="text" name="address"></td>
            </tr>
            <tr>
                <td>Age</td>
                <td><input type="text" name="age" required></td>
            </tr>
            <tr>
                <td>Nationality</td>
                <td>
                    <select name="nationality">
                        <option selected value="">Select nationality</option>
                        <option value="Nepal">Nepal</option>
                        <option value="Indian">India</option>
                        <option value="US">US</option>
                        <option value="UK">UK</option>
                        <option value="Others">Others</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td colspan="2">
                    <input type="submit" name="btnSubmit" value="Submit">
                    <a href="view.php">View</a>
                </td>
            </tr>
        </table>
    </form>
    <?php


if (isset($_POST['btnSubmit'])) {
    // Get data from form inputs
    $fname = $_POST['fname'];
    $lname = $_POST['lname'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $nationality = $_POST['nationality'];

    // SQL Insert Query
    $query = "INSERT INTO students (fname, lname, address, age, nationality) VALUES ('$fname', '$lname', '$address', '$age', '$nationality')";

    // Execute the query
    $result = mysqli_query($con, $query);

    if ($result) {
        echo "<script>
                alert('Data has been saved successfully');
                window.location.href='view.php'; // Redirect to view.php
              </script>";
    } else {
        echo "<script>
                alert('Please try again!!!');
              </script>";
    }
}
?>
</body>
</html>
