<?php
//break and continue statement
/*
The break statement terminates the loop completely.
On the other hand, the continue statement does not terminate the loop. It only skips the current iteration and moves the loop to the next iteration
*/
//Using break in a while loop

$i = 1;

while ($i <= 10) {
    echo "Iteration No. $i" . "<br>";

    if ($i >= 3) {
        break;
    }
    $i++;
}

//Using break statement in for loop
for ($i = 1; $i <= 10; $i++) {
    echo "Iteration No. $i" . "<br>";

    if ($i == 5) {
        break;
    }
}

//Using brek statemen in do while loop
$num = 1;

do {
    echo "Value: $num" . "<br>";

    if ($num == 3) {
        break;
    }

    $num++;
} while ($num <= 5);

// continue statement
// for loop
for ($x = 1; $x <= 10; $x++) {
    if ($x % 2 == 0) {
        continue;
    }

    echo "x= $x" . "<br>";
}

for ($x = 1; $x <= 10; $x++) {
    if ($x == 5) {
        continue;
    }

    echo "x= $x" . "<br>";
}
//while loop
$num = 1;

while ($num <= 10) {

    if ($num % 2 != 0) {
        $num++;

        continue;
    }
    echo "Even Number: $num" . "<br>";
    $num++;
}

//forecach

$fruits = ["Apple", "Banana", "Mango", "Orange", "Grapes"];

foreach ($fruits as $fruit) {
    if ($fruit == "Mango") {
        continue;
    }
    echo "Fruit: $fruit" . "<br>";
}
