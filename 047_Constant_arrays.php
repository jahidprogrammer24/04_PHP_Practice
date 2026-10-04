<?php
//Constant arrays
//01. with const keyword
const FRUITS = array("Wetermelon", "Strawberries", "Pomegranate", "Blackberry");
var_dump(FRUITS);

const FRUITS1 = [
    "Wetermelon",
    "Strwberries",
    "Pomegranate",
    "Blackberry"
];
var_dump(FRUITS1);

//FRUITS1[1] = "Mango";//Fatal error: Cannot use temporary expression in write context

//01. with define() function
define('FRUITS2', [
    "Wetermelon",
    "Straberries",
    "Pomegranate",
    "Blackberry"
]);
print_r(FRUITS2);
var_dump(FRUITS2);

echo "<pre>";
//Associative Constant Array
define('CAPITALS', array(
    "Maharashtra" => "Mumbai",
    "Telangana" => "Hyderabad",
    "Gujrat" => "Gandhinagor",
    "Bihar" => "Patna"
));
print_r(CAPITALS);
echo "<pre>";

//
const STATUS = ["Pending", "Approved", "Rejected"];
echo STATUS[1];


/*
*Differance between const and define()
01.const works at compole time, define() works at runtime
02. const is usually used in class or global scope 
define can be used anywhere

*when to use constan array
01.when there is no need for data to change
02.when security is important

*/