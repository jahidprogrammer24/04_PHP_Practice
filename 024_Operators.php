<?php
//PHP Operators
/*
01. Arithmetic Operators
02. Comparison Operators
03. Logical Operators
04. Assignment Operators
05. String Operators
06. Array Operators
07. Conditional or Ternary Operator
*/

//Arithmetic Operators
$a = 42;
$b = 20;

echo $a + $b . "<br>"; //62
echo $a - $b . "<br>"; //22
echo $a * $b . "<br>"; //840
echo $a / $b . "<br>"; //2.1
echo $a % $b . "<br>"; //2
echo $a++ . "<br>"; //42
echo $a-- . "<br>"; //43

//Conditional Operators
$a = 10;
$b = 20;

var_dump($a == $b) . "<br>"; // false
var_dump($a != $b) . "<br>"; // true
var_dump($a > $b) . "<br>"; // false
var_dump($a < $b) . "<br>"; // true
var_dump($a >= $b) . "<br>"; // false
var_dump($a <= $b) . "<br>"; // true

//Logicla Operatios
$a = 10;
$b = 20;

var_dump($a && $b) . "<br>"; // AND true
var_dump($a  || $b) . "<br>"; // OR true
var_dump(!$a) . "<br>"; // NOT false

//Assignment Operators
$c = 10;

//Compound Assignment Operators
echo ($c += 5) . '<br>'; // 15
echo ($c -= 5) . '<br>'; // 10 
echo ($c *= 2) . '<br>'; // 20
echo ($c /= 2) . '<br>'; // 10
echo ($c %= 3) . '<br>'; // 1

// ‍String Operators
//(.)concatenation 
$first = "Hello";
$second = " World";
echo $third = $first . $second . "<br>"; //Hello World
//(.=)
$name = "PHP ";
echo $name .= "Language"; //

//Array Operators
echo $a + $b;
echo $a == $b;
echo $a === $b;
echo $a != $b;
echo $a !== $b;

//Conditional (Ternary) Operator
$age = 18;

echo $result = ($age >= 18) ? "Adult" : "Minor"; // Adult

/*
// Operator Categories
01. Unary Operator
02. Binary Operator
03. Ternary Operator
04. Assignment Operator
*/

// Operator Precedence
$a = 2 + 6 / 3;
echo $a; // 4

$a = (2 + 6) / 3;
echo $a; //2.666 