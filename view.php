<?php include 'dbConnection.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Display Records</title>
</head>
<body>
    <center>
        <a href="insertData.php">Insert New Data</a>
    </center>
    <table cellspacing="0px" align="center" border="1">
        <tr>
            <th>First Name</th>
            <th>Last Name</th>
            <th>Address</th>
            <th>Age</th>
            <th>Nationality</th>
            <th>Update</th>
            <th>Delete</th>
        </tr>

        <?php
        // SQL Query to Select All Data
        $query = "SELECT * FROM tb_insertdata";
        $dat = mysqli_query($con, $query);
        $result=mysqli_num_rows($data);
        
        // Check if query execution was successful
        if ($result) {
            // Check if any records are returned
                // Fetch each row of data
                while ($row = mysqli_fetch_array($data)) {
                    ?>
                    echo "<tr>";
                    echo "<td>" . (add here php echo) htmlspecialchars($row['firstname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['lastname']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['address']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['age']) . "</td>";
                    echo "<td>" . htmlspecialchars($row['nationality']) . "</td>";
                  <td><a href="update.php?id=<?php echo $row['id']; ?>">Update</a></td>
<td><a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Are you sure you want to delete?')">Delete</a></td>

                    echo "</tr>";
                }
            } else {
                // No records found
                echo "<tr><td colspan='7'>No Records Found!</td></tr>";
            }
        } else {
            echo "<tr><td colspan='7'>Error executing query: " . mysqli_error($con) . "</td></tr>";
        }
        ?>
    </table>
</body>
</html>
