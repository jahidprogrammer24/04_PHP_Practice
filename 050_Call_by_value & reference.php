<?php
//Call by value & Call by reference
/*
By default used call by value in PHP, that meens when we call a function the value of actual argument copied into the function's parametar. If we change the value of parameter in function don't change the value of original variable.
*/
//How call by value works, see the following example
//Call by value into numbers
//Example 01
function change_name($name)
{
    echo "Initially the name is $name" . "<br>";

    $name = $name . "_new";
    echo "This function changes the name to $name" . "<br>";
}
$name = "Jahid";
change_name($name);

echo "My name is still $name" . "<br>";

//Example 01
function addFunction($num1, $num2)
{
    $sum = $num1 + $num2;
    return $sum;
}
$x = 10;
$y = 20;
$num = addFunction($x, $y);
echo "Sum of the two numbers is: $num" . "<br>";
//Example 03
function increment($num)
{
    echo "The initial value: $num";

    $num++;

    echo "This function increments the number by 1 to $num";
}
$x = 10;
increment($x);

echo "Number has not changed: $x";
//Call by value into string
function appendString($str)
{
    $str .= "World";
    echo "Inside function: $str";
}
$text = "Hello";
appendString($text);

echo "Outside function: $text";

// if you want to change the original value, in PHP used call by reference for that. It meens functions works by taking the reference of original value that is its memory location.
//for that we use the and sign (&) before the parameters or variable that will work.
$var = "Hello";
$var1 = &$var;

echo $var; //Hello
echo $var1; // Hello

$var1 = "Hello World" . "<br>";
echo $var; //Hello World (Value "Hello" change to "Hello World")
//Example: Name Change
function change_name1(&$nm)
{
    echo "Initially the name is $nm" . "<br>";

    $nm = $nm . " new";

    echo "This function changes the name to $nm";
}
$name = "Jahid";
echo "My name is $name";

change_name1($name);
echo "My name now is $name";
//Swapping Two Variables
function swap_value($a, $b)
{
    echo "Initial values a= $a b= $b" . "<br>";

    $c = $a;
    $a = $b;
    $b = $c;

    echo "Swapped values a= $a b=$b" . "<br>";
}
$x = 10;
$y = 20;

echo "Actual arguments x= $x y=$y" . "<br>";

swap_value($x, $y);

echo "Actual arguments do not change ifter the function:" . "<br>";
echo "x= $x y= $y" . "<br>";

function swap_value1(&$a, &$b)
{
    echo "Initial values a= $a b= $b" . "<br>";

    $c = $a;
    $a = $b;
    $b = $c;

    echo "Swapped values a= $a b=$b" . "<br>";
}
$x = 10;
$y = 20;

echo "Actual arguments x= $x y=$y" . "<br>";

swap_value1($x, $y);

echo "Actual arguments change ifter the function:" . "<br>";
echo "x= $x y= $y" . "<br>";

//Return by reference
function &myfunction()
{
    static $x = 10;

    echo "X Inside function: $x" . "<br>";

    return $x;
}
$a = &myfunction();

echo "Returned by referene: $a" . "<br>";

$a = $a + 10;

$a = &myfunction();
