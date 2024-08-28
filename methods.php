<?php

    
    $string="Hello World!";
    $len=strlen($string);
    echo "i) The length of the string is {$len} <br>";

    $count=str_word_count($string);
    echo "ii) The no of word in the string is {$count} <br>";

    $reverse =strrev($string);
    echo "iii) The reverse of the string is {$reverse} <br>";

    echo "iv) <br>";
    $searchTerms = ["!", "Hello", "World"];

    foreach ($searchTerms as $term) 
    {
        $position = strpos($string,$term);
        if (is_numeric($position)) 
        {
            echo "The substring '{$term}' is found at index: {$position}<br>";
        } 
        else 
        {
            echo"tNot Found <br>";
        }
    }
    $updated=str_replace("World","Dipesh",$string);
    echo "v) The updated string is {$updated} <br>";

    echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";
?>
