<?php
//Logical Operator
/*
01. and
02. or
03. &&
04. ||
05. !
*/

//Usage of logical operator
$a = 42;
$b = 0;

if ($a and $b) {
    echo "TEST 1: Both a and b are true " . "<br>";
} else {
    echo "TEST 1: Either a or b is false" . "<br>";
}

if ($a or $b) {
    echo "TEST 2: Either a or b is true " . "<br>";
} else {
    echo "TEST 2: Either a or b is false" . "<br>";
}

if ($a && $b) {
    echo "TEST 3: Both a and b are true";
} else {
    echo "TEST 3: Either a or b is false" . "<br>";
}

if ($a || $b) {
    echo "TEST 4: Either a or b is true" . "<br>";
} else {
    echo "TEST 4: Both a and b are false" . "<br>";
}

if (!$a) {
    echo "TEST 5: a is true";
} else {
    echo "TEST 5: a is false";
}

//Using AND (&&) and OR (||) with User Input

$age = 25;
$isMember = true;

if ($age > 18 && $isMember) {
    echo "You are eligible for a discount";
} else {
    echo "Sorry you are not eligible for a discount";
}

if ($age < 18 || !$isMember) {
    echo "You need to be at least 18 years old or a member to get discount";
}

//Check Multiple Conditions with and and or

$x = 10;
$y = 5;

if ($x == 10 && $y == 5) {
    echo "Both conditions are true";
}

if ($x == 10 || $y == 5) {
    echo "At least one condition is true";
}

//Using Logical Operators in a Loop
$count = 1;

while ($count <= 5 && $count != 3) {
    echo "Current count: $count";
    $count++;
}
