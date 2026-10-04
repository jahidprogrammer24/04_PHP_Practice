<?php
//PHP Boolean Data Type
//You can write Boolean values as true/TRUE false/FALSE 
$bool1 = true;
$bool2 = TRUE;

$bool3 = false;
$bool4 = FALSE;

//Logical operator(==, != <,> etc) return boolean results: true or false
$gender = "Male";
var_dump($gender == "Male");

// Using Boolean in condition
$is_sunny = true;
if ($is_sunny) {
    echo "It is a sunny day"; //It is a sunny day!,, here the '$is sunny' using as a boolean'
} else {
    echo "It is not sunny today";
};

//Boolean type is used in control statement (if, while, for, foreach).
//if a condition is true, the if block excutes; otherwise else block runs
$mark = 60;
if ($mark > 50) {
    echo "psss";
} else {
    echo "fail";
}
// yue can convert other data type to boolean using casting 
// Empty string "", empty array [],NULL, "0", "0.0","-0.0" return  false.
$a = 10;
echo "$a:";
var_dump((bool)$a); //bool(false)

$a = 0;
echo "$a:";
var_dump((bool)$a); //bool(false)

$a = "Hello";
echo "$a:";
var_dump((bool)$a); //bool(true)

$a = "";
echo "$a:";
var_dump((bool)$a); //bool(false)

$a = array();
echo "Array:";
var_dump((bool)$a); //bool(false)

//in PHP, logical operators: &&(AND), || (OR), !(NOT) work.
//&& returns true when bothe conditions are true. 
//|| returns true when at least one condition is true.

$a = true;
$b = false;

// AND operator
var_dump($a && $b); //bool(false)

//OR operator
var_dump($a || $b); //bool(true)

//NOT operator
var_dump(!$a); //bool(false)
//using && is better, then using 'and'

//Strict Comparison with Boolean
// ==(loose equality): compares only value
// ===(strict equality): compares both value and type

$val1 = true;
$val2 = 1;

var_dump($val1 == $val2); //bool(true)
var_dump($val1 === $val2); //bool(false)
//true==1 is true because true is considered 1 in loose comparison.
// but true===1 is false because their types are diffrent (bool and int).
// using ==== helps reduce bugd.

//Boolean in PHP Functions
/*important functions:
1. is_bool($x) : checks whether the value is boolean.
2. isset($x): checks whether a variable is defined and not null
3. empty($x) : checks whether a variable is empty
*/
$x = true;
var_dump(is_bool($x)); //bool(true)

$name;
var_dump(isset($name)); //bool(false)

var_dump(empty($name)); // bool(true)
var_dump($name === ""); // bool(false)

//Boolean Arrays in PHP: Storing boolean value in an array and accessing them in a loop
$boolArray = [true, false, true];
foreach ($boolArray as $value);

var_dump($value); //bool(true)
// Boolean is often used as flags or toggles

//Boolean Constants in PHP
const STATUS = true;
if (STATUS) {
    echo "Status is active"; //Status is active
}
//Practical Applications of Boolean
/*
1. User authentication
2. Form validation
3.Feature toggles
4. Flags
*/
$usser_logged_in = true;
if ($usser_logged_in) {
    echo "Welcome, User"; //Welcome, User
};
