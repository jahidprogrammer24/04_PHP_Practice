<?php
//do while loop
/*
while and do-while Bote are the same but the slihgt diffrence is is, 

in while loop condition is checked then loop is executed
and in do whlie loop the first loop is executed then condition is checked. this is why do-while loop will always execute at least 1 time.
*/
//Basic example of do-while loop
$var = 1;

do {
    echo "Iteration No: $var" . "<br>";
    $var++;
} while ($var <= 5);
//Using While Loop (Same task with while loop)
$var = 1;

while ($var <= 5) {
    echo "Iteration No: $var" . "<br>";
    $var++;
}

//Differane Between While and Do-While loop
/*
01. While loop condition is tested first. if condition is false then loop will not run.
event once, do-while loop condition is tested later so loop will run at least once

02. another small difference do-while has a semicolon at the end of while

*/

echo "While Loop" . "<br>";

$var = 10;

while ($var <= 5) {
    echo "Iteration No: $var" . "<br>";
    $var++;
}

echo "do-while loop" . "<br>";
$var = 10;

do {
    echo "Iteration No: $var" . "<br>";
    $var++;
} while ($var <= 5);

//Decrementing a do-while loop
$j = 5;

do {
    echo "Iteration No:$j" . "<br>";
    $j--;
} while ($j >= 1);

//Trverse a string in reverse order
$string = "TutorialsPoint";

$j = strlen($string);

do {
    $j--;

    echo "Character at index $j: $string[$j]" . "<br>";
} while ($j >= 1);

//Nested do-while loops

$var = 1;
$j = 1;

do {
    print "<br>";

    do {
        $k = sprintf("%4u", $var * $j);
        print "$k";

        $j++;
    } while ($j <= 10);

    $j = 1;

    $var++;
} while ($var <= 10);

//break statement

$var = 3;

do {
    if ($var == 6) break;

    echo $var;

    $var++;
} while ($var < 9);

//continue
$var = 3;

do {
    if ($var == 6) continue;

    echo $var . "<br>";

    $var++;
} while ($var < 9);
