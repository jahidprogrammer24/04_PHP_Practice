<?php
//PHP Data Types- Compound Type
/*
php data type divided int two parts:
01.Scaler Type: Where a variable can hold one value
02.Compound Type: Where a variable can hold multiple valus 

There are two compound data types in PHP:
01. Array
02. Object
*/

//Array
/*
Array is a data structure where-
01. multiple data can be stored in single variable 
02. even if the data is not of the same type
03. Each data has a key

How to declare an Array in PHP
There are two ways to write an array in PHP-
01. using array() function
02. using Square Bracket []
*/
//Indexed Array: Where only value exists
$arr1 = array(10, "Jahidul", 1.55, true);

var_dump($arr1);

//Associatve Array: Wher key-value pairs, key can be string or number
$arr2 = array("one" => 1, "two" => 2, "three" => 3);

var_dump($arr2);

//Multidimensional Array: Array inside an array again
$arr3 = array(
    array(10, 20, 30),
    array("Ten", "Twenty", "Thirty"),
    array("physics" => 70, "chemistry" => 80, "math" => 90)
);

$arr4 = [
    [10, 20, 30],
    ["Ten", "Twenty", "Thirty"],
    ["physics" => 70, "chemistry" => 80, "math" => 90]
];
// Array Element Access:
var_dump($arr1[1]);
var_dump($arr2["three"]);

//Array Traversal:
$arr5 = [10, 20, 30, 40, 50];

foreach ($arr5 as $val) {
    echo "$val\n";
};

//key and value
foreach ($arr1 as $key => $val) {
    echo "arr1[$key]= $val\n";
}

//Associative Array Traversal:
$capitals = array(
    "Maharashtra" => "Mubai",
    "Telangana" => "Haderabad",
    "UP" => "Lucknow",
    "Tamilnadu" => "Chennai"
);
foreach ($capitals as $k => $v) {
    echo "Capital of $k is $v\n";
}
//Object in PHP
// An object is an instance of a class that contains: propertes (variable) and methods (functions)

class SayHello
{
    function hello($a, $b)
    {
        echo $a + $b;
    }
};

$obj = new SayHello;
var_dump(gettype($obj));
$obj->hello(1, 8);

//stdClass: Wher we can add properties dynamically
$obj2 = new stdClass;
$obj2->name = "Jahidul";
$obj2->age = 28;
$obj2->marks = 90;

print_r($obj2);

//Array→ Object Conversion
$arr7 = ["name" => "Jahidul Islam", "age" => 21, "marks" => 90];
$obj3 = (object)$arr7;

print_r($obj3);

//Object→ Array Conversion
$obj4 = new stdClass;
$obj4->name = "Jahidul";
$obj4->age = 28;
$obj4->marks = 90;

$arr8 = (array)$obj4;
print_r($arr8);

//Scalar→ Object Conversion
$name = "Jahidul Islam";
$age = 28;
$percent = 93.50;

$obj5 = (object)$name;
$obj6 = (object)$age;
$obj7 = (object)$percent;

print_r($obj5);
print_r($obj6);
print_r($obj6);
