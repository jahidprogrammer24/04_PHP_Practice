<?php
//PHP integer supports all bases- decimal, octal, hexadecimal, binary
$a = 1234;
echo "1234 is an integer in decimal notation:$a<br>";

$b = 0123;
echo "0123 is an integer in Octal notation:$b<br>";

$c = 0x1A;
echo "0x1A is an integer in Hexadicimal: $c<br>";

$d = 0b111;
echo  "0b111 is an integer in binary notation: $d<br>";

//You can use underscore fo readability
$e = 1_234_467;
echo $e . "<br>";

//Using constants to know the size/range: bytes, maximum value and minimum value
echo PHP_INT_SIZE . "<br>";
echo PHP_INT_MAX . "<br>";
echo PHP_INT_MIN . "<br>";

// No unsigned integer in php (alwys uses signed integer)

//If an integer crosses the range of PHP_INT_MAX, then PHP converts it to  float automaticlly
$f = 1000000;
$g = 50000000000000 * $f;
var_dump($g);

// If you divide an integer by float number,the result is float, if you want integer result, use 'intdiv()'
$h = 10;
$i = 3.5;

//$j = $h / $i;
//var_dump($j);

$j = intdiv($h, $i);
var_dump($j);

// ‍Arithmetic Operations(addition, subtraction, multiplication, division)
$k = 10;
$l = 5;

//Addition
echo "Addition =" . ($k + $l) . "<br>";

//Subtraction
echo "Subtraction =" . ($k - $l) . "<br>";

//Multiplication
echo "Multiplication =" . ($k * $l) . "<br>";

//Division
echo "division =" . ($k / $l) . "<br>";

// checking if a value is integer or not (three ways):
is_int($a);      //Preferred
is_integer($b);  //Alias of is_int()
is_long($c);     //Alias of is_int() (deprecated, not recommended)
