<?php
//PHP Default arguments
function greeting($arg1 = "Welcome ", $arg2 = "Back")
{
    echo $arg1 . "" . $arg2;
}
greeting();
echo "<br>";
greeting("Thank you ");
echo "<br>";
greeting("Welcome 2 ", "back");
echo "<br>";
greeting("PHP");
//PHP assigngs argument values serially from left to right.
//Pacing a default parameter before a requird one causes a fatal error.
//Always declare default parameters at the end of the parameter list.  
/*function greeting2($name = "jahid", $msg)
{
    echo $arg1 . "" . $arg2 . "<br>";
}
greeting2("php");//Fatal error: Uncaught ArgumentCountError: Too few arguments to function greeting(), 1 passed in hello.php on line 10 and exactly 2 expected
*/
function greeting2(string $name, string $msg = "Hello")
{
    echo $name . " " . $msg . "<br>";
}
greeting2("Jahid");
//
function percent($p, $c, $m, $ttl = 300)
{
    $per = ($p + $c + $m) * 100 / $ttl;
    echo "Physics= $p Chemistry=$c Maths=$m" . "<br>";
    echo "Percentage=$per" . "<br>";
}
percent(30, 35, 40);
