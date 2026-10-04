<?php
//Spaceship Operator (three-way comparison operator)

$a = 5;
$b = 10;

echo ($a <=> $b) . "<br>"; //=== -1

$a = 20;
echo ($a <=> $b) . "<br>"; //=== 1

$a = 10;
echo ($a <=> $b) . "<br>"; //=== 0

//Spaceship  operator string
$x = "ball";
$y = "bat";
echo ($x <=> $y) . "<br>"; //-1

$x = "baz";
echo ($x <=> $y) . "<br>"; // 1

$x = "bat";
echo ($x <=> $y) . "<br>"; // 0

//Spaceship Operator boolean
echo (true <=> false) . "<br>"; // 1
echo (true <=> true) . "<br>"; // 0
echo (false <=> false) . "<br>"; // 0
echo (false <=> true) . "<br>";// -1
