<?php

namespace space1_class_function;

include 'second.php';
//PHP- Namespace
//class
class cHello
{
	function hello()
	{
		echo "Hi Jahidul Islam from first.php";
	}
}
//$obj = new  cHello;
//$obj->hello();

//function
function addition($x, $y)
{
	return "from space1:" . $x + $y;
}
//$total= addition(12,12);
//echo "addition: 12  and 12  is:".$total."from first.php"."<br>";

// function hello3
function hello3()
{
	echo "Hello world from current namesace" . __NAMESPACE__ . "<br>";
}
hello3(); //Hello world from current namesacespace1_class_function
myspace\hello3();//Hello world from current namesacespace1_class_function\myspace
