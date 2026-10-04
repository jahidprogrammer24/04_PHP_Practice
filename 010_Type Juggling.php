<?php
// Type Juggling
// 1. PHP automatically changes the variable's type at runtime
$var = "Hello";
echo "The variable \$var is of " . gettype($var) . " type" . PHP_EOL;

$var = 100;
echo "The variable \$var is of " . gettype($var) . " type" . PHP_EOL;

$var = true;
echo "The variable \$var is of " . gettype($var) . " type" . PHP_EOL;

$var = [1, 2, 3, 4];
echo "The variable \$var is of " . gettype($var) . " type" . PHP_EOL;
// output
// The variable $var is of string type 
// The variable $var is of integer type 
// The variable $var is of boolean type 
// The variable $var is of array type

// Type juggling works more in arithmetic operations
$var1 = 100;
$var2 = "100";
$var3 = $var1 + $var2;
var_dump($var3); // int(200)


$var1 = 100;
$var2 = "100 days";
$var3 = $var1 + $var2;
var_dump($var3); // Warning: A non-numeric value encountered in C:\xampp\htdocs\PHP_helloworld\010_Type Juggling.php on line 30 int(200)
// PHP kept '100' which is at the beginning of "100 days" and removed 'days' which is at the end of "100 days". Warning appears because there is a non-numeric value between the quotation marks. 

/*
 Type Casting vs Type Juggling 
 Type Casting = PHP automatically changes one type to another type
 Type Juggling = Programmer manually changes one type to another type  
*/
// You can do string casting in two ways
$var1 = 100.50;
$var2 = (string)$var1; // string(6) "100.5"
$var3 = "$var1"; // string(6) "100.5"

var_dump($var2, $var3);

// PHP Type Juggling Vulnerability
// PHP's Type Juggling can sometimes create security risks when it compares (==), as the type changes automatically in order to compare. The risk lies here. To fix this, always use strict comparison (===)
if ($_POST["123abc"] == "123") {
    // authorized user
}
// In this example, someone can send "0e123456" and PHP can understand that as a number in order to match between them and wrongly grant access
if ($_POST["123abc"] === "123") {
    // authorized user
}
// Now the type is different between them