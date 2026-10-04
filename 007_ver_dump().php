<?php
//var_dump()
// Dumping one variable
$balance = 100;
var_dump($balance);
// dumping two variables
$balance = 100;
$message = 'this is the bkahs balance';

var_dump($balance);
var_dump($message);

// For better output put the result inside a '<pre>' HTML tag
$balance = 100;

echo '<pre>';
var_dump($balance);
echo '</pre>';

$message = 'this is the bkahs';

echo '<pre>';
var_dump($message);
echo '</pre>';

// Build a helper function to ‍simplify that  
function d($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
}
$balance = 100;
d($balance);

$message = 'this is bkahs';
d($message);

// you can use die() to stop the script, you can also show a message.
$message = 'Dump and die example';

echo '<pre>';
var_dump($message);
echo '</pre>';
//die();

echo 'After calling the die function';

// Duild a helper function to simplify that
function dd($data)
{
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    //die();
}

$message1 = 'Dump and die example2';
dd($message1);

echo 'After calling the die function';







require 'index.view.php';
