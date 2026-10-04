<?php
//05.PHP Constants

/*
remember that:
the constant name  writen 
1.with uppercase
2.withewot $ sign dont like variable
and
3.it is case sensitive.
and you can assign
4. a number, string, boolean and array
*/
/*you can assign a variable constantly by two way:
1. difine('CONSTANT_NAME', 'constant value')
3. const CONSTANT_NAME = value;
*/
//define
define('WIDTH', '1140');
echo WIDTH . '<br>';

//const
const SALES_TAX = 0.085;

$gross_price = 100;
$net_price = $gross_price * (1 + SALES_TAX);

echo $net_price . '<br>';


const RGB = ['red', 'green', 'blue'];

var_dump(RGB, '<br>');
// if you use define() constantly, 
//01. you can use define() conditionally
//defining constan conditonaly
$condition = true;

if ($condition) {
    define('WIDTH1', '1140px');
    echo 'WIDTH constant is maked' . '\n';
} else {
    echo 'the condition is false, so WIDTH is dosent maked' . '\n';
};

//checking the constant defined or not
if (defined('WIDTH')) {
    echo 'WIDTH value is:' . WIDTH . '<br>';
} else {
    echo 'WIDTH constant dosent exist' . '<br>';
};

//02.you can make the constant name from expression
define('PRIFIX', 'OPTION');

define(PRIFIX . '_1', 1);
define(PRIFIX . '_2', 2);
define(PRIFIX . '_3', 3);

echo 'PRIFIX constant value:' . PRIFIX . '<br>';

echo 'OPTION_1 value:' . OPTION_1 . '<br>';
echo 'OPTION_2 value:' . OPTION_2 . '<br>';
echo 'OPTION_3 value:' . OPTION_3 . '<br>';

//you can make constant by 'const' only in class too
class Settings
{
    const VERSION = '1.0';
}
echo Settings::VERSION;
