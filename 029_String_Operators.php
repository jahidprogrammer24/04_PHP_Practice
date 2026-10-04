<?php
/*
String Operators
01. Concatenation Operator (".")
02. Concatenation Assignment Operator (".=")
*/

//Concatenation Operator (".")
$x = 'Hello';
$y = ' ';
$z = 'Jahidul Islam';

echo $x . $y . $z;

//Concatenation Assignment Operator (".=")
$x = 'Hello ';
$y = 'PHP';
$x .= $y;

echo $x;

//Working with Variable and String
$name = 'Jahidul Islam';
$age = 27;
$sentence = "My name is " . $name . "and i am " . $age . "years old";

echo $sentence;

//Using Concatenation in Loops
$result = "";
for ($i = 1; $i <= 5; $i++) {
    $result .= "Number" . $i;
}
echo $result;

//Combining String with Diffrent Data
$price = 100;
$message = "The price is" . $price . " rupees";

echo $message;
