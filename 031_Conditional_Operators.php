<?php
//Conditional Operator (Ternary Operator)
$a = 10;
$b = 20;

//Basic Usage of Conditional Operator
//If condition is true then asign a to result otherwise b
$result = ($a > $b) ? $a : $b;

echo " TEST1: Value of result is $result" . "<br>";

//If condition is false then asign b to result
$result = ($a < $b) ? $a : $b;
echo "TEST2: Value of result is $result" . "<br>";


//Check Even of Odd Number
$num = 14;
$result = ($num % 2 == 0) ? "Even" : "Odd";
echo "Number $num is $result" . "<br>";

//Check Positve, Negative or Zero
$num = -3;
$result = ($num > 0) ? "Positive" : (($num < 0) ? "Negative" : "Zero");
echo "Number $num is $result" . "<br>";

//Find the Maximum of Three Number
$x = 90;
$y = 100;
$z = 80;

$max = ($x > $y) ? (($x > $z) ? $x : $z) : (($y > $z) ? $y : $z);

echo "The maximum number is $max" . "<br>";

// Ternary Operator is shorthand for if-else

if ($a > $b) {
    $result = $a;
} else {
    $result = $b;
};

$result = ($a > $b) ? $a : $b;
