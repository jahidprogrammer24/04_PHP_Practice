<?php
//declare(strict_types=1);
//namespace space2_class_function\myspace;
namespace space1_class_function\myspace;



//PHP- Namespace
//class
class cHello
{
	function hello()
	{
		echo "Hi Jahidul Islam from second.php";
	}
}
//$obj = new  cHello;
//$obj->hello();

//function
function addition($x, $y)
{
	return "space2" . $x + $y;
}
//$total= addition(12,12);
//echo "addition: 12  and 12 is:".$total."from second.php"."<br>";

// function hello2
function hello2()
{
	echo "Hello world in myspace";
}
// function hello3
function hello3()
{
	echo "Hello world from current namesace" . __NAMESPACE__ . "<br>";
}
