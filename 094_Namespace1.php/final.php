<?php
include "first.php";
include "second.php";
/*
withut using namespace in file 'first.php' and 'second.php'
$obj = new cHello;
$obj->hello();//Fatal error: Cannot redeclare class cHello (previously declared in


$total = addition(10,10);
echo "addition result:".$total;//Fatal error: Cannot redeclare function addition() (previously declared in
*/

//with  namespace in files
//with "use" and "as" for shorting tha command
use space2_class_function as space2;

$obj1 = new space2\cHello;
$obj1->hello(); //Hi Jahidul Islam from second.php
$total = space2\addition(10, 12);
echo $total; //space2 22

//function hello2
function hello2()
{
    echo "Hello World from current namespace" . "<br>";
}
hello2(); //Hello World from current namespace
space2\hello2();
