<?php
//PHP-Passing Functions [Callback function]
/*
* A function can accept another function as a parameter.
* The passed function can be:
* 01. A built-in function, such as: *     - array_map()
*     - call_user_func()
*     - usort()
* 02. Or a user-defined function.
*/

//array_map()
function square($number)
{
    return $number * $number;
}

$numbers = [1, 2, 3, 4, 5];
$result = array_map("square", $numbers);

var_dump($result);

//call_user_func()
function square1($number)
{
    return $number * $number;
};

$arr = [1, 2, 3, 4, 5];
foreach ($arr as $a) {
    echo "square of $a:" . call_user_func("square1", $a) . "<br>";
};

//usort()
function mysort($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1;
}
$a = array(3, 2, 5, 6, 1);

usort($a, "mysort");

foreach ($a as $key => $value) {
    echo "$key: $value";
};
//user define function
function myfunction($function, $number)
{
    $result = $function($number);
    return $result;
}

function square3($number)
{
    return $number ** 2;
}

function cube($number)
{
    return $number ** 3;
}

$x = 5;
$square = myfunction('square3', $x);
$cube = myfunction('cube', $x);

echo "Square of $x: $square";
echo "Cube of $x: $cube";
