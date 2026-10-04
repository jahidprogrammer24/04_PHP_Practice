<?php
// PHP - Constructor and destructor
/*
In this session we discus about:
01. __construct()
02. parameterized constructor
03. constructor overloading
04. type declaration in constructor
05. __destruct()
*/
//__construct() function: it used for inisializing a function, it called automatically  when a new object is created. remember! it not mendetory the construct function must be create evere class. 
class Book
{
    //member variables
    var $price;
    var $title;

    //constructor function
    function __construct()
    {
        $this->title = "PHP Fundamentals";
        $this->price = 275;
    }

    //member function
    function getPrice()
    {
        echo "Price:$this->price" . "<br>";
    }
    function getTitle()
    {
        echo "Title: $this->title" . "<br>";
    }
}
$b1 = new Book;
$b1->getTitle();
$b1->getPrice();

//parameterized constructor with default argument and tipe declaration
class Book2
{
    var $title;
    var $price;


    function __construct(string $param1 = "PHP", int $param2 = 500)
    {
        $this->title = $param1;
        $this->price = $param2;
    }

    function getTitle1()
    {
        echo "Title: $this->title" . "<br>";
    }
    function getPrice1()
    {
        echo "Price: $this->price";
    }
}

//$b2 = new Book2("PHP", "500");
$b2 = new Book2();
$b2->getTitle1();
$b2->getPrice1();

//__destruct() : it called automatically when object work is finish

function __destruct()
{
    var_dump($this);
    echo "object destroyed";
}
