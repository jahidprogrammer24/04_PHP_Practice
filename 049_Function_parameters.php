<?php
//Function Parameters
/*
01.function parameter can be any type such as numbers, strings, booleans, objects or even another function.
02. A function parameter works like a variable, so you must use the dollar sign ($) before it.
03.
*/
//04 function with a default parameter. 
//Use a default value when the user does not provide an argument
function greet($name = "Guest")
{
    echo "Hello, $name";
}
greet();
//greet('Jahidul');
//04 When we don't know how many values a user will pass, we use three dots (...) called variable-length-arguments.
function sumAll(...$numbers)
{
    return array_sum($numbers);
}
echo sumAll(2, 3, 4, 5, 6);


function addition($first, $second)
{
    $result = $first + $second;
    echo "First number: $first" . "<br>";
    echo "Second number: $second" . "<br>";
    echo "Addition: $result" . "<br>";
}
//direct function call
addition(2, 3);
// function call using variable.
$x = 100;
$y = 200;
addition($x, $y);

//Formal and Actual Argument
/*
formal arguments are parameters like $first and $second. 
actual arguments are values passed during function calls, such as (10, 20).
remind that:
the number of parmetes and arguments must be equal. Passing too few required arguments causes an error.
*/
function addition1($first, $second)
{
    echo "Addition:" . ($first + $second);
}
//addition1(10);//Uncaught ArgumentCountError: Too few arguments to function addition1(), 1 passed

//Data type Mismatch & Conversion
//type error example
function addition2($x, $y)
{
    return $x + $y;
}
//$result = addition2("jahid", 2);
//echo $result; //Uncaught TypeError: Unsupported operand types: string + int
//PHP supports weak typing
function addition3($x, $y)
{
    return $x + $y;
}
$result = addition3("2", 3); //5
echo $result;
