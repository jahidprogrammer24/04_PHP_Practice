<?php
//Null Coalesing Operator
/*
"Coalesing" means combining or bringing multiple things together in one plece.

This operator is essentially a shoter and simpler alternative to the isset() function and ternary operator
*/
//isset() function and ternary operator
//Ternary operator
$x = 1;
$var = $x ? $x : "not set";
echo "The value of x is $var" . "<br>";
//Isset() function
$x = 2;
$var = isset($x) ? $x : "not set";
echo "The value of x is $var" . "<br>";

//Null coalesing operator

$x = 8;
$var = $x ?? "not set";
echo "The value of x is $var" . "<br>";

$username = $_GET['name'] ?? 'Guest';
echo "Welcome $username" . "<br>";

//Chaining Null Coalescing Operator
$username = $_GET['name'] ?? $_POST['name'] ?? 'Guest';
echo "Welcome $username";
