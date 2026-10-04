<?php
//Global Variables
/*
A global variable can be accessed from anywhere in script. If a variable is declared outside a function or class that autoamtically becaomes a global variable. but you have important things to remember the:
  the global variable can be used outside a function. however, it cannot be accessed inside a function, 

follow one of these two ways to access it
01. global keyword
02. $GLOBALS array
*/
$name = "Jahidul";
function sayHello()
{
    echo "Hello:" . $name;
};
sayHello(); //Warning: Undefined variable $name in
// using global example 1
$name = "Jahidul";
function sayHello1()
{
    global $name;
    echo "Hello:" . $name;
};
sayHello1(); //Hello:Jahidul

//using global example 2
$name = "Jahidul";
function sayHello2()
{
    global $name;
    echo "Global variable name: $name" . PHP_EOL;
    $name = "Mahmud";
    echo "Global variable name changed to: $name" . PHP_EOL;
}
sayHello2(); //
echo "Global variable name after function call: $name" . PHP_EOL;

//Using $GLOBALS array for addition ia a function
$x = 10;
$y = 30;
function addition()
{
    $z = $GLOBALS['x'] + $GLOBALS['y'];
    echo "Additor: $z" . PHP_EOL;
}
addition(); //40

//using that for converting local to global
$x = 10;
$y = 20;

function addition1()
{
    $z = $GLOBALS['x'] + $GLOBALS['y'];
    $GLOBALS['z'] = $z;
}
addition1();
echo "Now z is the global variable. addition:$z" . PHP_EOL;

//the file that is inclued in another file, his declared variables stores in main file as a global variable
include 'test.php';

function addition3()
{
    $z = $GLOBALS['a'] + $GLOBALS['b'];
    echo "Addition: $z" . PHP_EOL;
}
addition3();

// The global variable when used?
/*
01. in singleton pattern emplimenting: the pattern there only one object of one class is maked. and share it in all application
02. embedded systems: when we need to use one variable in more functions.

global variables are hepfull, but best practice is passing parameter in function in real projects. becouse its value can be changed from any function so that it difficult to finding wiche value is changed from wiche function.

*/
