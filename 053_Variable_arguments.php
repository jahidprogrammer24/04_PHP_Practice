<?php
//Variable arguments
//the....$numbers parmeter collects all passed values into an array.
function myFunction(...$numbers)
{
    $avg = array_sum($numbers) / count($numbers);
    return $avg;
}

$avg = myFunction(5, 12, 9, 23, 8);

//Positional and variadic arguments can be used together.
//The variadic parameter must alwes be declared last.
function myFunction1($x, ...$numbers)
{
    echo "First number:$x";
    echo "Remaining numbers:";

    foreach ($numbers as $n) {
        echo "$n";
    }
}
myFunction1(5, 12, 9, 23, 41);

//variadic function using built-in helper functions:
//01. func_num_args()-return the total number of arguments passed.
//02. func_get_arg()-return the value at a specific index.
//03. func_get_args()-return all arguments as an array.
function myFunction2()
{
    $sum = 0;

    foreach (func_get_args() as $n) {
        $sum += $n;
    }
    return $sum;
}
echo myFunction2(5, 12, 9, 23, 8, 41);
//
function myFunction4()
{
    $len = func_num_args();
    echo "Numbers:";

    for ($i = 0; $i < $len; $i++) {
        echo func_get_arg($i);
    }
}
myFunction4(22, 33, 44, 55, 55);
