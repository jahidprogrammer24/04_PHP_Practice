<?php

declare(strict_types=1);
//PHP- Strict type
/*PHP is Dynamically weakly type language, meaning that PHP automatically converts a numeric string value to the integer when used in addition with another integer value. if you add the declare(strict_types=1) at the top of the file, PHP cannot convert the string to an integer, so it throws a TypeError instead.
*/
function addition(int $x, int $y)
{
    echo "First number: $x" . "<b>";
    echo "Second number: $y" . "<br>";
    echo "Addition:" . ($x + $y) . "<br>";
}
$x = "10";
$y = 20;

//addition($x, $y); //First number: 10Second number: 20 Addition:30

// you can use the define(strict_types= 1) first of all code. the sting "10" cant be converted to the numerical value. show error
$x = "20";
$y = 60;

//addition($x, $y);//Fatal error: Uncaught TypeError: addition(): Argument #1 ($x) must be of type int, string given, 
