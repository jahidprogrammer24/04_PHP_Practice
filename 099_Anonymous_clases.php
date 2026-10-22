<?php
/*
PHP ANONYMOUS CLASSES

What is it?

An anonymous class is a class without a name. Available from PHP 7.0.
It is created and used in the same place, mostly for one time use.
It works like a normal class: it can have properties, methods and a constructor.


Why use it?

1. A small one time object does not need its own class file.
2. Quick temporary object for a function that needs an interface.
3. Fake (mock) objects for testing.


How to use it:

1. Basic form:
   $obj = new class() {  };
2. Pass values to the constructor:
   $obj = new class(10) { ... };
3. Extend a parent class:
   $obj = new class("Neena") extends MyClass { ... };
4. Implement an interface:
   $obj = new class implements MyInterface { ... };
5. Call the parent method with parent::methodName();
6. Pass a dependency (like a logger) through the constructor.
7. Get the internal name: get_class($obj)
8. Check if an object is anonymous:
   (new ReflectionClass($obj))->isAnonymous()


Rules:

1. Always put a semicolon after the closing bracket.
   The whole line is an assignment.
2. Order: new class (arguments) extends Parent implements Interface
3. Constructor arguments go right after the word class.
4. It can extend a class, implement an interface and use a trait.
5. PHP gives it an internal name starting with class@anonymous.
   Do not depend on this name in your code.
6. It has no name, so you cannot use it as a type hint.
   Type hint the parent class or the interface instead.
7. It cannot be serialized.
8. It cannot reach private or protected members of the outer class.
   Pass what it needs through the constructor.
9. The same code in the same place always gives the same class.
   Identical code in two different places gives two different classes.
10. Typed properties (private int $x) need PHP 7.4 or above.
11. A readonly anonymous class needs PHP 8.3 or above.
12. In the browser, use <br> instead of PHP_EOL for a new line.


When to use it:

Use it for a one time small job, a quick interface implementation,
or a mock object in a test.
Do not use it when the class is needed in many places, is big,
will grow later, or must be saved with serialize.
Write a normal named class in its own file instead.
*/
//anonymous class
$obj = new class("10") {
   private int $x;
   public function __construct($x)
   {
      echo $this->x = $x;
   }
   public function addition($x)
   {
      return $this->x + $x;
   }
   public function division($x)
   {
      return $this->x / $x;
   }
};

echo "Addition:" . $obj->addition(10);
echo "Division:" . $obj->division(5);

//The anonymous class extends the parent
class myClass
{
   public function hello()
   {
      echo "Hello World";
   }
}
$obj2 = new class("Jahidul Islam") extends myClass {
   private string $name;
   public function __construct($name)
   {
      $this->name = $name;
   }
   public function greeting()
   {
      parent::hello();
      echo "Welcome" . $this->name . "<br>";
   }
};
$obj2->greeting();

//extentds and implements
interface SomeInterface
{
   public function run();
}

class myClass1
{
   public function hello()
   {
      echo "Hello from parent" . "<br>";
   }
}

$obj3 = new class extends myClass1 implements SomeInterface {
   public function run()
   {
      echo "Running..." . "<br>";
   }
};
$obj3->run();
$obj3->hello();

//get_class() with str_replace()
$obj4 = new class{
	public function greeting(){
		echo "Hello Jahidul Islam";
	}
};
//echo "name of class". get_class($obj4);

echo "<br>".str_replace("\0","" ,get_class($obj4));

//
