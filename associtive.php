<?php
// Assign the data to an associative multidimensional array
$sqlCommands = [
    "CREATE" => [
        "Syntax" => "Create table table_name",
        "Example" => "Create table article;"
    ],
    "DROP" => [
        "Syntax" => "Drop table table_name",
        "Example" => "Drop table article;"
    ],
    "ALTER" => [
        "Syntax" => "Alter object_type object_name parameters;",
        "Example" => "Alter table article add subject varchar;"
    ]
];

// Example task: Display the syntax and example of each SQL command
foreach ($sqlCommands as $command => $details) {
    echo "<h3>{$command} Command</h3>";
    echo "Syntax:  {$details["Syntax"]}  <br>";
    echo "Example: {$details["Example"]}<br><br>";
}

 echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";
?>
