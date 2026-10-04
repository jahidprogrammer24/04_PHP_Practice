//
<?php
//01.You have to define variable by $ 
//02.and You have to start variable name from a to z or ()
//03.and you can use number, string, and underScore after the variables'name
//4. you have to use underScore if the variable name are two word such as my_name
//5.variables are case sensitive
//6. reserved keywords avoid for variable  assign 
//7.you can assign variable in string (a-z), number(0-9) and array

//assigning an object
$introduction = new stdClass();
$introduction->first_name = 'Jahidul';
$introduction->last_name = 'Islam';
$introduction->school = 'Jamiyatus Sunnah';
$introduction->roll = 01;
//Object printing
var_dump($introduction);
print_r($introduction);
//Properties accessing
echo 'First Name:' . $introduction->first_name . '<br>' . 'Last Name:' . $introduction->last_name . '<br>';
//variables are case sensitive
//echo 'First Name:' . $Introduction->first_name . '<br>' . 'Last Name:' . $Introduction->last_name;

//assigning an array
$all_numbers = [10, 20, 30, 40];

var_dump($all_numbers);
echo $all_numbers[3] . '<br>';

//assigning a string
$my_father_name = 'Abbas Ali';
var_dump($my_father_name);
echo $my_father_name;

//separation of concerns
$title = 'PHP is awesome!';
require 'index.view.php';

?>