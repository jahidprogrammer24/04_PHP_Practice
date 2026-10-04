<?php
//PHP Tipe hints
/*
* Type hints specify what type of value must be passed for each parameter.  They can be used function arguments, return values, and class properties. 
*/
//Type conversion works
function addition($x, $y)
{
    echo "First number: $x Second number: $y Addition:" . ($x + $y);
}
$x = "10";
$y = 20;
addition($x, $y); //First number: 10 Second number: 20 Addition:30

//Type conversion fails
function addition1($x, $y)
{
    echo "First number: $x Second number: $y" > ($x + $y);
}
$x = "PHP";
$y = 20;
//addition($x, $y); //Fatal error: Uncaught TypeError: Unsupported operand types: string + int in

// you can use type hints for avoid like this fatal error
function addition2(int $x, int $y)
{
    echo "First number: $x Second number: $y Addition:" . ($x + $y);
}
$x = "PHP";
$y = 20;
//addition2($x, $y);//Fatal error: Uncaught TypeError: addition2(): Argument #1 ($x) must be of type int, string given, called in 31 and defined in 25

//Union Types
function addition3(int | float $x, int | float $y)
{
    return $x + $y;
}
$x = 10.55;
$y = 20;

$result = addition3($x, $y);
echo "First number: $x Second number: $y Addition:" . ($x + $y); //First number: 10.55 Second number: 20 Addition:30.55

//Type hints in class (property, method)
class Student
{
    public string $name;
    public int $age;
    public function __construct(string $name, int $age)
    {
        $this->name = $name;
        $this->age = $age;
    }
    function dispStudent()
    {
        echo "Name: $this->name Age: $this->age";
    }
}
$s1 = new Student("Jahidul", 28);
$s1->dispStudent();

//Nullable type
function greet(?string $name)
{
    if ($name === null) {
        echo "Hello, Guest!";
    } else {
        echo "Hello, $name";
    };
}
//greet("Jahid");
greet(null);

//Mixed type
function display(mixed $value)
{
    var_dump($value);
}

display("Hello");
display(123);
display([1, 2, 3]);
