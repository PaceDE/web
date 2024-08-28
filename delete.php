<?php include 'dbConnection.php'; ?>

<?php
// Get the ID from the query string (assuming it's being passed as a GET parameter)
$id = $_GET['id'];

// SQL query to delete a record from the table
$query = "DELETE FROM tb_insertdata WHERE id = '$id'";

// Execute the query
$data = mysqli_query($con, $query);

// Check if the query was successful
if ($data) {
    // If successful, show an alert and redirect to the view page
    echo "<script>
            alert('Data Deleted Successfully');
            window.open('http://localhost:8080/phpCrudOperation/view.php', '_self');
          </script>";
} else {
    // If the query fails, show an error message
    echo "<script>
            alert('Try Again!');
          </script>";
}
?>
