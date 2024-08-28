<?php
function factorial($num)
{
    $fact=1;
    for($i=1;$i<=$num;$i++)
    {
        $fact*=$i;
    }
    return $fact;
} 
$num=7;
$fact=factorial($num);
echo("The factorial of {$num} is {$fact} <br>");

if($num>=1 && $num<=100)
{
    echo("{$num} is between 1 and 100");
}
else
{
     echo("{$num} is not between 1 and 100");
}
echo "<br> <hr> <h4> Dipesh Shrestha </h4> <hr>";

?>