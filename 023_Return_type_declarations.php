<?php

//declare(strict_types=1);

//PHP Return type declarations:
/*
You tell PHP advance what data type the value that will be returned when the function completes.

Using return taype declaration-
Code becomes much cleaner
Bugs are reduced
It is easiir to catch errors in large projects
*/
//: int (example of integer)
function division(int $x, int $y): int
{
    $z = $x / $y;
    return $z;
}

$x = '20';
$y = 10;

echo division($x, $y); //Fatal error: Uncaught TypeError: division(): Argument #1 ($x) must be of type int, string given

//
function division1(int $x, int $y): int
{
    $z = (float)$x / $y;
    return $z;
}

$x = 20;
$y = 10;

echo division1($x, $y);//Fatal error: Uncaught TypeError: division1(): Return value must be of type int, float returned in
