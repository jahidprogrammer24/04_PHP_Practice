<?php
/*
* ABSTRACT CLASS (PHP)
 *
 * What is it?
 * - An abstract class is a special class. You cannot make an object from it directly.
 * - It is like a plan for other classes. Child classes take it and use its common properties and methods.
 * - We write it with the word `abstract`: abstract class MyClass { ... }
 
 * What happens if we try to make an object $obj = new MyClass; PHP shows an error: Cannot instantiate abstract class MyClass(this means: you cannot make an object of an abstract class)
 
 * Rules:
 * 1. An abstract class can have normal properties, constants and methods.
 * 2. They can be public, private or protected.
 * 3. It can have one or more abstract methods (a method with a name but no code inside).
 * 4. If a class has even one abstract method, you must write `abstract` before the class too.
 * 5. A child class must implement all abstract methods of its parent. (If the child is also abstract, it does not have to.)
 
 * Why use it?
 * 1. Use the same code again: write common code in one place, so you
 *    do not write it again and again in every child class.
 * 2. Keep the same pattern: abstract methods make every child class
 *    write certain methods, so all classes look similar and clean.
*/
//Example
abstract class myclass
{
    abstract function myAbsMethod($arg1, $arg2);
}
class newClass extends myclass
{
    function myAbsMethod($arg1, $arg2)
    {
        return $arg1 + $arg2;
    }
    function newMethod()
    {
        echo $this->myAbsMethod(12, 13);
    }
}
$newClass = new newClass();
//$newClass->newMethod();
//Fatal error: Class newClass contains 1 abstract method and must therefore be declared abstract or implement the remaining method (myclass::myAbsMethod)

//Example 2
abstract class marks
{
    protected int $m1, $m2, $m3;
    abstract public function percent(): float;
}

class student extends marks
{
    public function __construct($x, $y, $z)
    {
        $this->m1 = $x;
        $this->m2 = $y;
        $this->m3 = $z;
    }

    public function percent(): float
    {
        return ($this->m1 + $this->m2 + $this->m3) * 100 / 300;
    }
}
$s1 = new student(50, 60, 70);
echo "Percentage of marks:" . $s1->percent() . "<br>";

/*
 * ABSTRACT CLASS vs INTERFACE (PHP)
 *
 * 1. Keyword
 * - Abstract class: we write it with the `abstract` keyword. abstract class MyClass { ... }
 * - Interface: we write it with the `interface` keyword. interface MyInterface { ... }
 
 * 2. Can we make an object?
 * - Abstract class: No, you cannot make an object from it directly.
 * - Interface: No, you cannot make an object from it directly.

 * 3. Methods
 * - Abstract class: It can have normal methods (with code inside) and abstract methods (no code inside).
 * - Interface: Methods cannot have code inside. You only write the method name, parameters and return type.
 
 * 4. How a child class uses it
 * - Abstract class: The child class uses `extends` and must implement all abstract methods.
 * - Interface: The class uses `implements` and must implement all methods of the interface.
 
 * 5. Properties (variables)
 * - Abstract class: It can have public, private or protected properties.
 * - Interface: It cannot have properties.
 */