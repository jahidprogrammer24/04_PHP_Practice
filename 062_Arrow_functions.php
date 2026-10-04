<?php
//Arrow functions
/*
Arrow functions are a short way to write anonymous functions. we use 'fn' keyword instead of using 'function'. this is the best choice for a one-line code. 
the benefit is, this is return value automatic without using return keyword and the most benefit is, it can accsess the outer variables in the function automaticly. 

The important things to remember are:
01. after '=>' write the exprassion that works as the return value
02. no need to write return separately
03. this is like anonymous function, it can be stored in a variable. 
*/
$add = fn($a, $b) => $a + $b;

$a = 10;
$b = 20;
echo "x: $a y: $b Addition:" . $add($a, $b);

//Using arrow function as a callback
$arr = [10, 3, 70, 21, 54];

usort($arr, fn($x, $y) => $x > $y);
foreach ($arr as $x) {
    echo $x;
};
//Accessing variable from the parent scope
$maxmarks = 600;
$percent = fn($marks) => $marks * 100 / $maxmarks;

$m = 420;
echo "Marks = $m Percentage =" . $percent($m);
//Filtering and transforming Array
$numbers = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$evenNumbers = array_filter($numbers, fn($n) => $n % 2 === 0);

foreach ($evenNumbers as $num) {
    echo $num . "";
}
//array_map
$nums = [1, 2, 3, 4];
$squared = array_map(fn($n) => $n * $n, $nums);

print_r($squared);

/*
Remember that, arrow function is best for on line short code, if your function contains multi-line code, critical logic, than using a normal function is better than arrow function.