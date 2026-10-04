<?php
//PHP Loop Types
/*

/*
A loop in progarmming language is a mechanism through which the same code can be executed repeatedly. There are also different types of loops in PHP, using which we can perform the same task repeatedly, but we do not have to write the same code repeatedly.

The main purpose of using loops is:
1. Reducing code repetition
2. Optimizing the program
3. Saving time and effort
4. Loops are vary important in wed applications. 

There are four main types of loops in PHP:
1. for
2. foreach
3. while
4. do-while

There are also loop control statements:
1. break
2. continue
*/
// For loop
$a = 0;
$b = 0;

for ($i = 0; $i < 5; $i++) {
    $a += 10;
    $b += 5;
}

echo "At the end of the loop a= $a and b= $b" . "<br>";

//Foreach

$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {
    echo "Value is $value" . "<br>";
}

//While
$i = 0;
$num = 50;

while ($i < 10) {
    $num--;
    $i++;
}

echo "Loop stopped at i =$i and num = $num" . "<br>";

//do-while
$i = 0;

do {
    $i++;
} while ($i < 10);

echo "Loop stopped at i = $i" . "<br>";

//break
$i = 0;

while ($i < 10) {
    $i++;
    if ($i == 3) {
        break;
    }
}

echo "Loop stopped at i =$i " . "<br>";

//continue

$array = array(1, 2, 3, 4, 5);

foreach ($array as $value) {

    if ($value == 3) {
        continue;
    }
    echo "Value is $value" . "<br>";
}
