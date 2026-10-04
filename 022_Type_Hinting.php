<?php
//declare(strict_types=1)

// PHP Type Hinting
/*
Type Hinting allows to specify the data type of paramiter when defining a function 
*/

// By default, php in automatically converts types. in this example, php converts string to integer 
function addition($x,  $y)
{
    echo "First number:" . $x . "</br>";
    echo "Second number:" . $y . "</br>";
    echo "Addition:" . ($x + $y) . "</br>";
}
$x = "10";
$y = 20;

addition($x, $y); // First number:10, Second number:20, Addition:30
// if PHP cannot convert the type automatically, it returns an error which can be difficult to debug.
$x = "hello";
$y = 20;
//addition($x, $y); //Fatal error: Uncaught TypeError: Unsupported operand types: string + int...

//if you use type hinting,debugging errors becomes easiar
function addition1(int $x3,  int $y3)
{
    echo "First number:" . $x3 . "</br>";
    echo "Second number:" . $y3 . "</br>";
    echo "Addition:" . ($x3 + $y3) . "</br>";
}
$x3 = "hello";
$y3 = 20;

//addition1($x3, $y3); //Fatal error: Uncaught TypeError: addition1(): Argument #1 ($x3) must be of type int, string given, called in


////type hinting works in two modes:
//01. Coercive Mode: php try to cust the type automatically, as seen in the previous examples:
function addition2(int $x4,  int $y4)
{
    echo "First number:" . $x4 . "</br>";
    echo "Second number:" . $y4 . "</br>";
    echo "Addition:" . ($x4 + $y4) . "</br>";
}
$x4 = "10";
$y4 = 20;

addition2($x4, $y4); // First number:10, Second number:20, Addition:30
/* Here, even though $x4 is a string, PHP converts it to an integer as 10. This is why it is said that PHP is weekly tyed by default. 

02. Strict Mode is here to eliminate this weakness.
Strict Mode is enabled with 
declare(strict_type=1)
*/

//declare(strict_types=1);

function addition3(int $x5, int $y5)
{
    echo "First number:" . $x5;
    echo "Second number:" . $y5;
    echo "Addition:" . ($x5 + $y5);
};


$x5 = "10";
$y5 = 20;
addition3($x5, $y5);

function sum(int ...$ints)
{
    return array_sum($ints);
}

print(sum(2, '3', 4.1));//Parse error: syntax error, unexpected identifier "sum", expecting 
