<?php
//PHP Classes and Objects
/*
Clas: a class is like template for some objects. the clss has properties, in this properties include some functions/methods.

Object: a object is instanse of that class, it is maintained by calss's property and methods.

syntax of creat a class:
class phpClass {
      public/private/protected $var1;
      public/private/protected $var2 = "constant string";

      function myfunc ($arg1, $arg2) {
         *functios
      }
      *some codes
   }
*/
class book
{
    //Member variables or property
    var $price;
    var $title;

    //Member functions or methods
    function setPrice($par)
    {
        $this->price = $par;
    }
    function getPrice()
    {
        echo $this->price . "<br>";
    }

    function setTitle($par)
    {
        $this->title = $par;
    }
    function getTitle()
    {
        echo $this->title . "<br/>";
    }
}
//two objects
$b1 = new Book;
$b2 = new Book;

//setting data for first object
$b1->setTitle("PHP Programming");
$b1->setPrice(450);

//setting data for last object
$b2->setTitle("PHP Fundamentals");
$b2->setPrice(460);

//printing data
$b1->getTitle();
$b1->getPrice();
$b2->getTitle();
$b2->getPrice();

/*
the OOP has many belifits:
*Organize code
*Reuse code
*Encampsulation
*/
