<?php
// PHP Functions
// We can create functions to perform the same task repeatedly
// the benefit of using functions is:
/*
01. we can reuse the same code multiple times.
02. we can divide the code into small block that simplifyes understanding code
03. we can maintain the code simply. that helps us to fix bugs widhout seeing the entire code
04. It increase readability. so others can understantd our code easily
*/
// PHP has a two types of functions
/*
01. Built-in Function
02. User defined Function
*/
// User defined Function example
function welcome()
{
    echo "Welcome User <br>";
}
welcome();
welcome();
welcome();


function writeMessage()
{
    echo "You are nice person, Have a nice time <br>";
};
writeMessage();


function sayhello($name)
{
    echo $name . " How are you <br>";
}
sayhello("Mahmud");
sayhello("Sayeed");
sayhello("Sayful");

//Return Value example
function vat($price)
{
    echo $price * 0.15 . "<br>";
    return $price * 0.15 . "<br>";
}
$myVat = vat(1000);
echo $myVat;

function add($a, $b)
{
    return $a + $b;
}
$result = add(10, 20);
echo $result + 10;

//Variable Scope
function test()
{
    $x = 10;
}
//echo $x; //Warning: Undefined variable $x

// using global variable
$x = 100;
function show()
{
    global $x;
    echo $x;
}
show(); //100

//Built-in Function Example
echo "<br>";
echo strlen('Bangladesh');
//Anonymous Function
echo "<br>";
$test = function () {
    echo "Hello";
};
$test();
//Recursive Function
function countdown($n)
{
    if ($n > 0) {
        echo $n . "<br>";
        countdown($n - 1);
    };
};
countdown(10);
//Passing by Reference
function addFive(&$num)
{
    $num += 5;
    echo $num;
}
$x = 10;
addFive($x);
echo $x;
//Type Declaration
function add1(int $a, int $b)
{
    return $a + $b;
}
echo add(5, 3);
//Error Handling