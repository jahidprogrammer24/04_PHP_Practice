<?php
/*
  TRAIT (PHP)
  
  What is it?
  - A trait is a group of methods that can be reused in many classes.Think of it as a toolbox that any class can borrow.
  - PHP does not support multiple inheritance (a class can extend only one parent). A trait solves this problem, because we can reuse the same code in unrelated classes without writing it again.
  - We write it with the `trait` keyword:
        trait MyTrait {
            public function hello() { echo "Hello"; }
        }

  How to use it:
  - A class uses a trait with the `use` keyword inside the class body:
        class MyClass {
            use MyTrait;
        }
  - After that, all trait methods work as if they were written in the class itself:
        $obj = new MyClass();
        $obj->hello();
  - A class can use more than one trait. Separate them with a comma: use TraitA, TraitB;
  - This `use` is different from the `use` at the top of a file, which imports a namespace.

  Rules:
  1. A trait is not a class. You cannot make an object from a trait directly. Writing new MyTrait() gives an error.
  2. Priority order (highest to lowest): the method written in the class, then the method from the trait, then the method from the parent class. So a class method overrides a trait method with the same name.
  3. If two traits have a method with the same name, PHP shows a Fatal error. We must solve the conflict ourselves.
  4. Conflict solution A: `insteadof` means "use this one, not that one":
        use TraitA, TraitB {
            TraitB::sayHello insteadof TraitA;
        }
  5. Conflict solution B: `as` gives a method another name (alias), so we can keep both methods:
        use TraitA, TraitB {
            TraitB::sayHello insteadof TraitA;
            TraitA::sayHello as hello;
        }
  6. A trait can have properties too. If the class defines the same property, it must have the same type, visibility and default value.Otherwise PHP shows an error.
  7. A trait can have an abstract method (name only, no body). Any class that uses the trait must write that method. It works like a rule between the trait and the class.
  8. A trait can have static methods and static properties. Each class that uses the trait gets its own copy of the static property.
  9. Inside a trait, __TRAIT__ returns the name of the trait.
*/
//creating a trait and using it
trait myTrait
{
    //function body1
    public function method1()
    {
        echo "method1 is called" . "<br>";
    }
    //function body2
    public function method2()
    {
        echo "method2 is called" . "<br>";
    }
}
class myClass3
{
    // Using the trait 
    use myTrait;
    public function additionalMethod()
    {
        echo "This is additional method in my class" . "<br>";
    }
}
$myClassInstance = new myClass3();
$myClassInstance->method1();
$myClassInstance->method2();
$myClassInstance->additionalMethod();

//Cannot instantiate trait
trait myTrait2
{
    public function hello1()
    {
        echo "Hi Jahidul Islam" . __TRAIT__ . "<br>";
    }
}
class myClass2
{
    use myTrait2;
}
//$obj = new myTrait2();
//$obj->hello();//Fatal error: Uncaught Error: Cannot instantiate trait myTrait2
$obj = new myClass2();
$obj->hello1();

//example 2334


/*
  Trait vs Inheritance vs Interface:
  - Inheritance (extends) shows a relationship, like "Dog is an Animal".
  - Interface (implements) is a contract. It says what a class must do, but gives no code.
  - Trait (use) shares ready-made code. It shows no relationship.

  When to use it:
  - Use a trait when unrelated classes need the same code.Good examples: Logger, Timestamps, SoftDeletes.
  - Do not overuse traits. Too many traits make code hard to follow, because it is hard to see where a method comes from.
  - In big projects, keep each trait in its own file.
*/
