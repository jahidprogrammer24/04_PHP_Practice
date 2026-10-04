<?php
//Returning values
//The return statement sends control back to the calling environment.
// and passes the function's value along with it.
//A return value can be:
//01. stored in a variable.
//02. used directly in a numerical exprassion 
//03. printed using echo or print.


// Returnning the addintion result
function addition($first, $second)
{
    $result = $first + $second;
    return $result;
};

$x = 10;
$y = 20;

$z = addition($x, $y);
echo "First number: $x Second number:$y Addition:$z" . "<br>";

//Note: A function can only return one value at a time. 
//When PHP encounters return statement, it exits the function immediately and ignores any remaining code inside it.


//Attempting to return multiple values directly causes a parse error.
/*function raiseto($x){
    $sqr = $x**2;
    $cub = $x**3;
    return $sqr, $cub;
}
$a = 5;
$val = raiseto($a);Parse error: syntax error, unexpected token ",",
*/
//Using return conditionally to calculate square or cube .
function raiseto($x, $i)
{
    if ($i == 2) {
        return $x ** 2;
    } elseif ($i == 3) {
        return $x ** 3;
    }
}

$a = 5;
$b = 3;
$val = raiseto($a, $b);
echo "$a raised to $b = $val";

//Multiple values can be return using an associative array.
function raiseto1($x)
{
    $sqr = $x ** 2;
    $cub = $x ** 3;
    $ret = ["sqr" => $sqr, "cub" => $cub];
    return $ret;
}
$a = 5;
$val = raiseto1($a);
echo "Square of $a:" . $val["sqr"] . "<br>";
echo "Cube of $a:" . $val["cub"] . "<br>";
