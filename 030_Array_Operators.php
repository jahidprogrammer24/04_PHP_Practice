<?php
/*
//Array Operators
01. Union (+)
02. Equality (==) 
03. Identity (===)
04. Inequality (!=)
05. Inequality (<>)
06. Non Identity (!==)
*/

//Union (+)
$arr1 = array("phy" => 100, "che" => 80, "math" => 90);
$arr2 = array("phy" => 70, "Bio" => 80, "CompSci" => 90);

$arr3 = $arr1 + $arr2;
//$arr3 = array_merge($arr1, $arr2);

var_dump($arr3);

//Equality (==) 
$arr1 = array(0 => 70, 2 => 80, 1 => 90);
$arr2 = array(70, 90, 80);

var_dump($arr1 == $arr2);
var_dump($arr1 != $arr2);

//Identity (===)
$arr1 = array(0 => 70, 1 => 80, 2 => 90);
$arr2 = array(70, 90, 80);

var_dump($arr1 === $arr2);

$arr3 = array(70, 80, 90);
var_dump($arr3 === $arr1);

//inequality (!=)
$arr1 = array("a" => 1, "b" => 2, "c" => 3);
$arr2 = array("a" => 1, "b" => 5, "c" => 3);
$arr3 = array("a" => 1, "b" => 2, "c" => 3);

var_dump($arr1 != $arr2);
var_dump($arr1 != $arr3);

// Not identity (!==)
$arr1 = array(0 => 70, 1 => 80, 2 => 90);
$arr2 = array(0 => 70, 1 => "80", 2 => 90);

var_dump($arr1 !== $arr2);

$arr3 = array(0 => 70, 2 => 90, 1 => 80);
var_dump($arr1 !== $arr3);

// Inequality (<>)
$arr1 = array("a" => 10, "b" => 20);
$arr1 = array("a" => 10, "b" => 25);

var_dump($arr1 <> $arr2);
