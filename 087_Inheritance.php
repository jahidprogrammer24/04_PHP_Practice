<?php
// PHP Inheritance
/*
It extends a functionality of exasting class it called base class. after that it can be used in inherited class, it called derived class. and the new functinality can be added in the inherited class. 

Types of inheritence in PHP:
01. single inheritance
02. multilevel inheritence
03. hierarchical inheritance- inheritane from a parant class to the mor chaild classes.

*/
//Example of multilevel inheritance
class Animal
{
    public function sound()
    {
        echo "Animal make sound\n";
    }
}

class Dog extends Animal
{
    public function bark()
    {
        echo "Dog barks\n";
    }
}

class Puppy extends Dog
{
    public function weep()
    {
        echo "Puppy weeps\n";
    }
}

$myPuppy = new Puppy();
$myPuppy->sound();
$myPuppy->bark();
$myPuppy->weep();
