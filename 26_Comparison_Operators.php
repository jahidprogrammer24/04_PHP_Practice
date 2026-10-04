<?php
// PHP-Comparison Operators
/*
01. Equality Operator     [==] 
02. Identity Operator    [===]
03. Not Equal             [!=]
04. Greater Than           [>]
05. Less Than              [<]
06. Greater Than or Equal [>=]
07. Spaceship Operator   [<=>]
*/
$a = 42;
$b = 25;

//Equality Operator (==)
if ($a == $b) {
    echo "TEST 1: a is equal to b" . "<br>";
} else {
    echo "TEST 1: a is not equal to b" . "<br>";
};

//Identity Operator (===)
if ($a === $b) {
    echo "TEST 2: a is equal to b" . "<br>";
} else {
    echo "TEST 2: a is not equal to b" . "<br>";
};

//Not Equal (!=)
if ($a != $b) {
    echo "TEST 3: a is not equal to b" . "<br>";
} else {
    echo "TEST 3: a is equal to b" . "<br>";
}

//Greater Than (>)
if ($a > $b) {
    echo "TEST 4: a is greater than b" . "<br>";
} else {
    echo "TEST 4: a is not greater than b" . "<br>";
}

//Less Than (<)
if ($a < $b) {
    echo "TEST 5: a is less than  b" . "<br>";
} else {
    echo "TEST 5: a is not less than b" . "<br>";
}

//Greater Than or Equal (>=)
if ($a >= $b) {
    echo "TEST 6: a is either Greater Than or Equal to b" . "<br>";
} else {
    echo "TEST 6: a is neither Greater Than or Equal to b" . "<br>";
}

//Spaceship Operator (<=>)
$a = 5;
$b = 10;

echo ($a <=> $b); //-1

$a = 20;

echo ($a <=> $b); // 1

$a = 10;
echo ($a <=> $b); // 0

//Equality (==) vs identity (===)
$x = 15;
$y = "15";

if ($x == $y) {
    echo "x is equal to y";
}

if ($x === $y) {
    echo "x is identical to y";
} else {
    echo "x is not identical to y";
}
//Usage of Not Equal (!=) and Not Identical (!==)
$p = 50;
$q = "50";

if ($p != $q) {
    echo "p is not equal to q";
} else {
    echo "p is equal to q";
}


if ($p !== $q) {
    echo "p is not identical to q";
} else {
    echo "p is identical to q" . "<br>";
}

//
$age = 25;
$salary = 5000;

if ($age > 18 && $salary > 3000) {
    echo "Eligible for loan";
} else {
    echo "Not Eligible for loan";
}

if ($age < 30 && $salary < 10000) {
    echo "Special discount applicable";
}
