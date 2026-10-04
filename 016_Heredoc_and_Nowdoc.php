<?php
//Heredoc and nowdoc

//Heredoc
//Heredoc is system for writing string that works like double quotes without using "", variables is expanded and escape sequences work
/*
remember that:
01. The identifier must be the same at the biginning and end
02. Don't have any space or text before the closing identifier (PHP < 7.3) 
03. Don't stert the identifier with a digit
*/
$str1 = <<<Jahid
Hello World
  PHP Tutorial
    by TutorialsPoint  
Jahid;

echo $str1;
//in hearedoc, indentation is allowed in the body, but the closing identifier must not be indented (PHP <7.3)
/*
$str2 = <<<STRING
Hello World
   PHP Tutorial
by TutorialsPoint
 STRING;

echo $str2;//Parse error: Invalid body indentation level 
*/
//In heredoc, quotes and escape sequence work. (Escape Sequence: \n,\t,\x50) variables also expanded.
$lang = "PHP";
echo <<<EOS
Heredoc string in $lang expand variables.
The escape sequence are also interpeted.
Here. the hexadecimal ASCII characters probuce \x50\x48\x50
EOS;

//Nowdoc String
/*Nowdok is like Heredoc but differs in:
01. variables are NOT expanded
02. escape sequence do NOT work
03. gives the raw text exactly a written

Summery: nowdoc is like single quoted string 

remember! the opening identifier must be in single quotes
*/
$str3 = <<<'IDENTIFIER'
This is an example of Nowdoc string.
it can span multiple lines
and include single quote ' and double quotes " 
IT doesn't expand the value of $lang variable
Here. the hexadecimal ASCII characters probuce doesn't work \x50\x48\x50
IDENTIFIER;

echo $str3;
