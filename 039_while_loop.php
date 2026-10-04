<?php
//while loop
/*
This is a control sturcture that repeatedly executes the same code until a specific condition is true.
*/

//Simple while loop example
$x = 0;

while ($x <= 10) {
    echo "Iteration No. $x" . "<br>";
    $x++;
}

//While loop with increment
$x = 0;

while ($x <= 10) {
    echo "Iteration No. $x" . "<br>";
    $x += 3;
    //echo "Iteration No. $x" . "<br>";
}

//While loop with decrement
$x = 5;

while ($x > 0) {
    echo "Iteration No.$x" . "<br>";
    $x--;
}
// Array Traversal whith While Loop
$numbers = array(10, 20, 30, 40, 50);
$size = count($numbers);
$x = 0;

while ($x < $size) {
    echo "Number at index $x is $numbers[$x]" . "<br>";
    $x++;
}
//Nested while loop
$i = 1;
$j = 1;

while ($i <= 3) {

    while ($j <= 3) {
        echo "i = $i j = $j" . "<br>";
        $j++;
    }

    $j = 1;
    $i++;
}
// String Traversal with while loop
$line = "PHP is a populer general-purpose scripting language that is especially suited to wed development";
$vowels = "aeiou";

$size = strlen($line);
$i = 0;
$count = 0;

while ($i < $size) {
    if (str_contains($vowels, $line[$i])) {
        $count++;
    }
    $i++;
}
echo "Number of vowels= $count";

//Alternative Syntax 
$x = 1;

while ($x <= 10):
    echo "Iteration No.$x" . "<br>";
    $x++;
endwhile;
