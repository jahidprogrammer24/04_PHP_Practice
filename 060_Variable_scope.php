<?php
//PHP - Variable Scope
/*after declaring a variable, in which place can it be used? the variables are mainly four types:
* 01. Local Variable [accessible only within its own scope]
* 02. Global Variable[accssible anywhere except inside a function]
* 03. $GLOBALS Array [in this associative array, php stores all variable name and value as a key and value]
* 04. Static Variables [when called the function the local variable's value lost, the static keyword retains the previous value ]
note that- the variable included via include or require can be used  any other script.
*/

//Using Local Variables
/*
$var = 100;
include "test.php";
1
//Using Global Variables
$var1 = 100; //Global variable
function myFunction()
{
    $var1 = "Hello"; //Local variable
    echo "var = $var var1=$var1"; //Warning: Undefined variable $var
}
myFunction();
echo "var=$var var1=$var1"; //Warning: Undefined variable $var1

//Why we can access the global variable in function
$a = 10;
$b = 20;

echo "Global variables before function call: a = $a b= $b"; //Global variables before function call: a = 10 b= 20

function myFunction1()
{
    global $a, $b; //
    $c = ($a + $b) / 2;
    echo "inside function a = $a b= $b c= $c"; //inside function a = 10 b= 20 c= 15
    $a = $a + 10;
}
myFunction1();
echo "Variables after function call: a = $a b= $b c= $c"; //Variables after function call: a = 20 b= 20 c=
//Warning: Undefined variable $c

//Accessing Global Variables with $GLOBALS Array

$a = 5;
$b = 20;

echo "Global variables before function call: a=$a b=$b"; //Global variables before function call: a=10 b=20

function myFunction2()
{
    $c = $GLOBALS["a"] + $GLOBALS["b"] / 10;
    echo "c=$c"; //c=7
    $GLOBALS['a'] += 10;
}
myFunction2();
echo "Variables after function call: a=$a b:$b" . "<br>"; //Variables after function call: a=15 b:20

//Static variable
function myFunction4()
{
    static $x = 0;
    echo "x=$x";
    $x++;
}

for ($i = 1; $i <= 3; $i++) {
    echo "call to function:$i" . "<br>";
    myFunction4();
}
