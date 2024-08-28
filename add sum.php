<?php
// Define two 3x3 matrices
$matrix1 = [
    [1, 2, 3],
    [4, 5, 6],
    [7, 8, 9]
];

$matrix2 = [
    [9, 8, 7],
    [6, 5, 4],
    [3, 2, 1]
];

// Initialize an empty matrix to store the result
$result = [];

// Function to add two matrices
function addMatrix($matrix1, $matrix2) {
    global $result; // Declare $result as global
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
        }
    }
}

// Add the matrices
addMatrix($matrix1, $matrix2);

// Function to display a matrix
function displayMatrix($matrix, $name) {
    echo "{$name}:<br>";
    for ($i = 0; $i < 3; $i++) {
        for ($j = 0; $j < 3; $j++) {
            echo $matrix[$i][$j] . " ";
        }
        echo "<br>";
    }
    echo "<br>";
}

// Display the matrices
displayMatrix($matrix1, "Matrix 1");
displayMatrix($matrix2, "Matrix 2");
displayMatrix($result, "Resultant Matrix");
echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";
?>
