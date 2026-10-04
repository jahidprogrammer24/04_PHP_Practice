<?php
//you can write string 
// 01. In single quotetion
// 20. In double quotetion

//single quote:
//when you can show the single quotetion in same that, you have to use backslash (\)
$str = 'This is a \'simple\' string';

echo $str; //This is a 'simple' string

//If you wont to show backslash hiself. you have to use double backslash (\\).
$str = '<br>' . 'The command C:\\*.* will delete all files';

echo $str; //The command C:\*.* will delete all files

//In single quotetion the following escape sequences don't work:
// \n (newline), \r (carriage return), variables etc. thes print as a text.
$str = '<br>' . 'That will not expand: \n a newline';

echo $str . PHP_EOL; //That will not expand: \n a newline

$x = 100;
$str = '<br>' . 'Value of x =$x';
echo $str; //Value of x =$x

//double quate:
//PHP can know some escape sequence an variable expand when string wrote in double quote. this is a difference between them.

//Escape Sequence and theirs meaning
// \n (Linefeed-ASCII 10)
// \r (Carriage Return-ASCII 13)
// \t (Horizontal Tab-ASCII 9)
// \v (Vertical Tab-ASCII 11)
// \e Escape(ASCII 12)
// \\ (Showing backslash hisself in single quote string)
// \$ (Dollar)

// Escaping Characters: you can show  ASCII Characters by using Octal or Hexadecimal number. examle the value of 'p' character in ASCII is 80 in decimal, 120 in ocimal and 50I is hexadecimal. 
$str = "\120\110\120";
echo "<br>" . "PHP with Octal:" . $str;
echo PHP_EOL;

$str = "\x50\x48\x50";
echo "<br>" . "PHP with Hexadecimal:" . $str;

//Variable Expansion: inportant speciality of double quote is showint the variable's value prosesint the variable name.
$price = 200;
echo "<br>" . "Price =\$ $price"; //Price =$ 200

//String Concatenation Operator; the (.) operator used for concate one of more then values
$strint1 = "Hello World";
$string2 = "1234";

echo  "<br>" . $strint1 . " " . $string2; // Hello World 1234

//strlen() Function: used for counting the lengh of a string. its inportant in programming when you do loop.
echo "<br>" . strlen("Hello world!");

//strpos() Function: enquire a string in anuther string.
Syntax:
strpos($str, $find, $start);
// $str= Where to find.
// $find= What he wiil find.
// $start= Form which position you start finding .(optional) 
echo strpos("Hello World!", "World");
//here the 'world' word in sixeth positon of 'Hello world!'