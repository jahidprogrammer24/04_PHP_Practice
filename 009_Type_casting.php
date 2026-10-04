<?php
/*
//PHP Type Casting:
converting one data type to another data type

//01.Implicit Type Casting:
automatic type casting using + operator or . operator 
*/

$a = 10;
$b = '20';
$c = $a + $b;
echo "c =" . $c; // c =30

$a = 10;
$b = '20';
$c = $a . $b;
echo "c =" . $c; // c =1020

/*
//02. Explicit Type Casting:
manual type casting using PHP Type Casting Operator.
PHP Type Casting Operators:

a.(int) or (integer) for converting to integer.

b. (bool) or (boolean) for converting to boolean (true/false).

c. (float), (double) or (real) for converting to float (decimal number).

d. (string) for converting to string.

e. (array) for converting to array.

f. (object) for converting to object.
*/
//Castint to Integer
//Casting from float to Integer
$a = 9.99;
$b = (int)$a;
var_dump($b); //int(9)
//Casting from Stringt to Integer
$a = "99";
$b = (int)$a;
var_dump($b); //int(99)
//Special case
//if a number placed in the beginning of string and followed by words etc only the number will be converted. Otherwise, it will result in 0

$a = "10 Rs";
$b = (int)$a;
var_dump($b); //int(10)

$a = "$100";
$b = (int)$a;
var_dump($b); //int(0)

//Csting to Float
$a = 100;
$b = (float)$a;
var_dump($b); //float(100)

$a = "9.99";
$b = (float)$a;
var_dump($b); //float(9.99)

$a = "1.23E01";
$b = (float)$a;
var_dump($b); //float(12.3)

$a = "295.95 only";
$b = (float)$a;
var_dump($b); //float(295.95)

$a = "$2.50";
$b = (float)$a;
var_dump($b); //float(0)

//Casting to String
$a = 100;
$b = (string)$a;
var_dump($b); //string(3) "100"

$a = 55.50;
$b = (string)$a;
var_dump($b); //string(4) "55.5" 

//Casting to Boolean
/*
* if a number is not 0, it will output true; otherwise false
* A string will be true when is it not blank ("")
*/
$a = 100;
$b = (bool)$a;

$x = 0;
$y = (bool)$x;

$m = "Hello";
$n = (bool)$m;

var_dump($b); //bool(true)
var_dump($y); //bool(false)
var_dump($n); //bool(true)

//Type Casting Functions
//1. intval()- for converting to integer
//2. floatval()- for converting to float
//3. strval()- for converting to string

//Example of intval()
// Numbers will counted diffrently (octal, decimal, hexadecimal) when changing the base to 8,10,16
echo intval(42) . PHP_EOL; //42
echo intval(4.2) . PHP_EOL; //4
echo intval('42') . PHP_EOL; //42
echo intval(042) . PHP_EOL; //34
echo intval('042', 0) . PHP_EOL; //0
echo intval('42', 8) . PHP_EOL; //34
echo intval(0x1A) . PHP_EOL; //26
echo intval('0x1A', 16) . PHP_EOL; //26
echo intval(false) . PHP_EOL; //0
echo intval(true) . PHP_EOL; //1

//Example of floatval()
echo floatval(42) . PHP_EOL;
echo floatval(4.2) . PHP_EOL;
echo floatval('99.90 Rs') . PHP_EOL;
echo floatval('$100.50') . PHP_EOL;

//Example of strval()
echo strval(42) . PHP_EOL;
echo strval(4.2) . PHP_EOL;
echo strval(4.2E5) . PHP_EOL;
echo strval(NULL) . PHP_EOL;


class myclass
{
    public function __toString()
    {
        return __CLASS__;
    }
}
echo strval(new myclass);
