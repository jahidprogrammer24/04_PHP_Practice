<?php
//PHP Data types
/*
php have a eight data types:
boolean, integer, float, string, array, object, reasource, null.
*/

//1. integer
$count = 0;
$max = 100;
$page_size = 10;

echo $count . '<br>';
echo $max . '<br>';
echo $page_size . '<br>';

//2. double / float
$var1 = 1.55;
$var2 = 123.0;

print($var1);

$many = 2.2888800;
$many_2 = 2.211200;
$few = $many + $many_2;

print("$many + $ = $few" . '<br>');

//3.Boolean
$bool1 = true;
$bool2 = false;
//1 is true, 0 is false
$bool3 = 1;
$bool3 = 0;
//normally used the boolean data type in conditions 
if (true) {
    print('This will always print' . '<br>');
} else {
    print('This will never print');
};
/* the following things are false:
1. 0
2. blank string ' ', and just 0 in quotation '0'
3. NULL
4. blank array [ ]
*/

//4.string
$string_1 = "This is a string in double quotes";
$string_2 = 'This is a string in single quotes';

print("$string_1" . '<br>' . "$string_2" . '<br>');
//difference between double & single quates
/**
 * Single quote ('')- everything written in this will print
 *  Double quate ("")-if a variable in this, the variable value print   
 * **/
$variable = 'name';

$literally = 'My $variable will not print';
print($literally . '<br>'); //output:My $variable will not print 

$literally = "My $variable will print";
print($literally); // output:My name will print
//Heredoc (that suport multy line string and variable)
$name = 'Jahidul Islam';
$age = 27;

$message = <<<TEXT
My name is $name
My age is $age
this a multy line text
TEXT;

echo '<br>' . $message;
//Nowdoc (that dont suport multy line string and variable)
$name = 'Jahidul Islam';
$age = 27;

$message = <<<'TEXT'
My name is $name
My age is $age
This is a raw text.
No variable will be replaced here.
TEXT;

echo '<br>' . $message;

//NULL 
//when wiil a variable  NULL?:
//1.when you assign 'NULL'
$name_3 = NULL;
var_dump($name_3); //NULL

//2.when you declare a variable but don't assign a value
$age_3;
var_dump($age_3); //Warning: Undefined variable $age_3 in C:\xampp\htdocs\PHP_helloworld\008_Data_types.php on line 105 NULL

//3.when you remove the value using 'unset()' function
$city = 'Dhaka';
unset($city);
var_dump($city); //Warning: Undefined variable $city in C:\xampp\htdocs\PHP_helloworld\008_Data_types.php on line 109 NULL

//characteristic of null:
//1. It is always false in a boolean context
$value = NULL;

if ($value) {
    echo 'True';
} else {
    echo 'False'; //False
};

//2.It returns false when checked  by isset() 
$var = NULL;

if (isset($var)) {
    echo 'set';
} else {
    echo 'no set'; //no set (false)
}

//3. It returns true when checked by empty()
$var_1 = NULL;

if (empty($var_1)) {
    echo 'empty'; //empty (true)
};

//4. you can check it using is_null()
$var_3 = NULL;

if (is_null($var_3)) {
    echo 'this is NULL'; //this is NULL
};

//array
//1. Indexed array: An array indexed by numbers starting from 0. 
//you can create it in three ways:
// Using array() function
$fruits = array('mango', 'banana', 'orange');
echo $fruits[0];
// Using short syntaxt (PHP 5.4+)
$fruits_1 = ['mango', 'banana', 'orange'];
echo $fruits_1[1];
//Assigning valus one by one 
$fruits_2[0] = 'mango';
$fruits_2[1] = 'banana';
$fruits_2[3] = 'orange';
echo $fruits_2[3]; //orange

//2. Associative Array: Stores data in key-value pairs. 
//the key can be a string or a number.you can create it in three ways
// Using array()function
$person = array(
    'name' => 'Jahidul Islam',
    'age' => 27,
    'city' => 'dhaka'
);
//Using short syntax 
$person = [
    'name' => 'Jahidul Islam',
];
// assigning valus one by one
$person['name'] = 'Jahidul Islam';
echo $person['name']; //Jahidul Islam

//3.Multidimensional Array: an array containig one or more arrays inside it.
$matrix = [
    [1, 2, 3,],
    [4, 5, 6],
    [7, 8, 9]
];
echo $matrix[0][0]; //1
echo $matrix[1][2]; //2
echo $matrix[2][1]; //8

// Object: A bundle created from a clss and its functions (methods)
//way 1. directly echo the paramiter
class Student
{
    function showName($name)
    {
        echo $name . '<br>'; //directly echo the paramiter
    }
};
//creating an object
$obj = new student;
//calling the method
$obj->showName('Jahidud Islam');
$obj->showName('Mahmudul Hasan');
//way 2. store the value in a property and then echo
class Student_
{
    public $name; //you have to diclare an property

    function showName_($name)
    {
        $this->name = $name; //assign the value to the proparty
        echo $this->name . '<br>'; //then echo it
    }
}
//creating an object
$obj = new Student_;
//calling the method
$obj->showName_('sayeed');
$obj->showName_('sayful');

// way 3. Using a constructor (best practice)
class Student__
{
    public $name;

    function __construct($name)
    {
        echo "Object তৈরি হচ্ছে!<br>";
        $this->name = $name;
    }
    function showName__()
    {
        echo $this->name . '<br>';
    }
}
$student1 = new Student__('sojib');
$student1->showName__();

$student2 = new Student__('rana');
$student2->showName__();

//Resource: A reference to an external entity (e.g., opened file, a databese connection)
$fo = fopen("foo.txt", "w");

//cheking the type using the gettype() function
$x = 10;
echo gettype($x); //integer

$y = 10.55;
echo gettype($y); //double

$z = [1, 2, 4];
echo gettype($z); //array

//you can also change the type (type casting)
$num = '123';
$intNum = (int)$num;

echo gettype($intNum);//integer
