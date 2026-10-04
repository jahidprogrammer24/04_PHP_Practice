<?php
//PHP Spread Operator
/*
The Spread Operator (...) is a powerful and easy-to-use feature of modern PHP.
It is used to:
Spread arrays
Concatenate multiple arrays
Functions can take a variable number of arguments
Directly unpack the return array of a function
/*
//Expanding an array wint Spread Operator
$arr1 = [4, 5];
$arr2 = [1, 2, 3, ...$arr1];

print_r($arr2) . "<br>";

//Using Spread Operator Multiple Times
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = [...$arr1, ...$arr2];

print_r($arr3) . "<br>";

//Spread Operator vs array merge()
$arr1 = [1, 2, 3];
$arr2 = [4, 5, 6];
$arr3 = array_merge($arr1, $arr2);

print_r($arr3) . "<br>";

//Named Arguments with Spread Operator
function myfunction($x, $y, $z = 30)
{
    echo "x = $x, y = $y z =$z";
}

myfunction(...[10, 20],  z: 30);

//Using Spread Operator with Function Return Value
function get_squares()
{
    $arr = [];
    for ($i = 0; $i < 5; $i++) {
        $arr[] = $i ** 2;
    }
    return $arr;
}

$squares = [...get_squares()];
print_r($squares);
