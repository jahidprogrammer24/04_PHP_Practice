<?php
//PHP Recursive Functions
/*
* A recursive function is one that calls itself repeatedly until condition is met.
* It is commonly used with complex data structures, such as:
* - Nested data structures 
* - searching and sorting algorithms(e.g., binary tree traversal, heap sort, shortest path. )  
* avoid recursion for problems that can be solved with a foreach or while loop.
*/
//Factorial
function factorial($n)
{
    if ($n == 1) {
        echo $n;
        return 1;
    } else {
        echo "$n*";
        return $n * factorial($n - 1);
    }
}

echo "Factorial of 5=" . factorial(5);
//Binary search
function bsearch($my_list, $low, $high, $elem)
{
    if ($high >= $low) {
        $mid = intval(($high + $low) / 2);
        if ($my_list[$mid] == $elem) {
            return $mid;
        } elseif ($my_list[$mid] > $elem) {
            return bsearch($my_list, $low, $mid - 1, $elem);
        } else {
            return bsearch($my_list, $mid + 1, $high, $elem);
        }
    } else {
        return -1;
    }
}
$list = [5, 12, 23, 45, 49, 67, 71, 77, 82];
$num = 67;
$result = bsearch($list, 0, count($list) - 1, $num);

if ($result != -1) {
    echo "Number $num found at index" . $result;
} else {
    echo "Element not found";
}
