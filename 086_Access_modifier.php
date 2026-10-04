<?php
//Access modifier
/*
PHP Uses three keywords to control the visibility and access of class members:
01. public
02. private
03. protected
*/
// public : It is used to access a class's members from any scope- including outside the class or in an inherited class. If the var keyword is used, the property takes public visibility by default.

class Book
{

    var $title;
    var $price;

    function __construct(string $param1 = "PHP Basics", int $param2 = 380)
    {
        $this->title = $param1;
        $this->price = $param2;
    }

    function getTitle()
    {
        echo "Title: $this->title";
    }
    function getPrice()
    {
        echo "Price: $this->price";
    }
}
$b1 = new Book();
echo "Title: $b1->title Price:$b1->price";

//private : It is used to access a class's members only within the class's own scope.
class Book1
{

    private $title;
    private $price;

    function __construct(string $param1 = "PHP Basics", int $param2 = 380)
    {
        $this->title = $param1;
        $this->price = $param2;
    }

    function getTitle()
    {
        echo "Title: $this->title";
    }
    function getPrice()
    {
        echo "Price: $this->price";
    }
}
$b1 = new Book1();
$b1->getTitle();
$b1->getPrice();

//echo "Title: $b1->title Price:$b1->price"; //Fatal error: Uncaught Error: Cannot access private property Book1::$title 

//protected : It is used to access a class's members only within its own scope. as well as in inherited (child) classes.
class Book3
{
    protected $price;
    private $title;

    function __construct(string $param1, int $param2)
    {
        $this->title = $param1;
        $this->price = $param2;
    }

    function getTitle()
    {
        echo "Title:$this->title";
    }

    function getPrice()
    {
        echo "Price:$this->price";
    }
}
$book1 = new Book3("Jahid's book", 200);
//$book1->getTitle();
//$book1->getPrice();

class newBook1
{
    public function getTitle($b)
    {
        echo "Title: $b->title";
    }
}

$book5 = new newBook1();
$b = new Book3("Jahidul", 22);
$book5->getTitle($b);//Fatal error: Uncaught Error: Cannot access private property Book3

/*
class newBook2 extends book3 {}
$book4 = new newBook2("Mahmud", 300);
$book4->getTitle();
$book4->getPrice();

*/
