<?php

//Mathematical Functions in PHP
//abs()- Absolute value (Returns positve value, remove sign)

$num = -9.99;
echo abs($num); //9.99

// ceil(), Round UP to nearest integer
$num = 5.78;
echo ceil($num) . '<br>'; //6
echo ceil(15.05) . '<br>'; //16

echo ceil(-3.95) . '<br>'; //-3

//exp()- Exponential function (e^x)
echo exp(M_LN2) . '<br>'; //2

//floor()- Round DOWN to nearest integer
echo floor(15.05) . '<br>'; //15
echo floor(5.78) . '<br>'; //5
echo floor(-3.95) . '<br>'; //-4

//intdiv()- Integer Division (without remainder)
echo intdiv(10, 3) . '<br>'; //3
echo intdiv(3, 10) . '<br>'; //0

echo intdiv(-10, -3) . '<br>'; //3
echo intdiv(-10, -3) . '<br>'; //3

//log10()- Logerithm base 10
echo log10(100) . '<br>'; //2

echo log10(0) . '<br>'; //-INF
echo log10(NAN) . '<br>'; //NAN

//max()- Returns the highest value
echo max([23, 50, 20]) . '<br>'; //50
echo max([23, 5.55, 142, 56]) . '<br>'; //142
echo max("Java", "PHP", "C") . '<br>'; //PHP

//min()- Returns the lowest value
echo min([23, 50, 20]) . '<br>'; //50
echo min([23, 5.55, 142, 56]) . '<br>'; //142
echo min("Java", "PHP", "C") . '<br>'; //PHP

//pow()- Power/Exponentiation (base^exponent)
echo pow(10, 2) . '<br>'; //100
echo pow(10, 0) . '<br>'; //1
echo pow(100, 0.5) . '<br>'; //10

//round()- Round to nearest integer or specified precision
echo round(10.6) . '<br>'; //11
echo round(10.2) . '<br>'; //10
echo round(1234.567, 2) . '<br>'; //1234.57

echo round(1234.567, -2) . '<br>'; //1200
//sqrt()- Square Root
echo sqrt(100) . '<br>'; //10
echo sqrt(-1) . '<br>';//NAN