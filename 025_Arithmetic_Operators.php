<?php
//PHP- Arithmetic Operators

//Addition
$a = 42;
$b = 20;

$c = $a + $b;
echo "Addition Operation Result: " . $c . "<br>";

//Substraction
$c = $a - $b;
echo "Substraction Operation Result: " . $c . "<br>";

//Multiplication
$c = $a * $b;
echo "Multiplication Operation Result: " . $c . "<br>";

//Division
$c = $a / $b;
echo "Division Operation Result: " . $c . "<br>";

//Modulus
$c = $a % $b;
echo "Modulus Operation Result: " . $c . "<br>";

//Increment
$c = $a++;
echo "Increment Operation Result: " . $c . "<br>";

//Decremente
$c = $a--;
echo "Decrement Operation Result: " . $c . "<br>";

//Negative Number
$x = 10;
$y = 5;

echo "Addition:" . ($x + $y) . "<br>";
echo "Subtraction:" . ($x - $y) . "<br>";
echo "Multiplication:" . ($x * $y) . "<br>";
echo "Division:" . ($x / $y) . "<br>";
echo "Modulus:" . ($x % $y) . "<br>";

//Floating-Point Numbers
$x = 5.5;
$y = 2.2;

echo "Addition:" . ($x + $y) . "<br>";
echo "Subtraction:" . ($x - $y) . "<br>";
echo "Multiplication:" . ($x * $y) . "<br>";
echo "Division:" . ($x / $y) . "<br>";
echo "Modulus:" . ($x % $y) . "<br>";

//Incriment & Decriment
$count = 10;

echo "Original value:" . $count . "<br>";

echo "After Increment:" . $count++ . "<br>";
echo "After After Increment:" . $count . "<br>";

echo "Before Increment:" . ++$count . "<br>";


echo "Post-Decrement:" . $count-- . "<br>";
echo "After Post-Decrement:" . $count . "<br>";

echo "Pre-Decrement:" . --$count . "<br>";
