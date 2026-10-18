<?php
//PHP Final Keyword
/*
What is it?

final means "this cannot be changed any more".
It stops a class from being extended.
It stops a method from being overridden in a child class.
It stops a class constant from being overridden (PHP 8.1 and above).
It protects important code from being changed by mistake.


Why use it?

1. Protect important logic (tax, discount, price, login check).
2. Keep the behavior of a class fixed and predictable.
3. Stop other developers from breaking the main code by accident.


How to use it:

1. Final class:
   Write final before the class keyword.
   Example form: final class MyClass { }
2. Final method:
   Write final before the method.
   Example form: final public function hello() { }
3. Final constant (PHP 8.1 and above):
   Example form: final public const NAME = "My Class";
4. Order of keywords: final goes first, then public, then function.
   Example form: final public function area(): float


Rules:

1. A final class cannot be extended (no child class can be made from it).
2. You can still create an object from a final class with new.
3. A final method can be inherited and called by a child class.
   The child class only cannot override (rewrite) it.
4. A class with a final method can be extended.
   Only that one method is locked.
5. A final constant cannot be given a new value in a child class.
6. Properties (variables) cannot be final.
   Writing final private $a; gives an error.
7. Breaking any final rule gives a Fatal error.
   The error appears when the file is loaded, before the code runs.
8. final and abstract cannot be used together.
   abstract waits for a child class, final blocks the child class.
9. final on a private method is meaningless.
   A child class cannot see a private method anyway.
   PHP 8 gives a warning.
10. Use final for code that must not change: calculations, constants, security checks.
11. Do not use final if you expect others to extend the class later.
12. Typical error messages:
    Class newclass may not inherit from final class (myclass)
    Cannot override final method myclass::hello()
    newclass::NAME cannot override final constant myclass::NAME

*/

//using with class
/*
final class honda
{
    function companyName()
    {
        echo "using final keyword with class";
    }
}
class cars extends honda {}
$car = new cars();
//$car->companyName();//Fatal error: Class cars cannot extend final class honda in

//using final keyword with method
class honda1
{
    final function companyName1()
    {
        echo "using final keyword with method";
    }
}
class cars1 extends honda1
{
    final function companyName1()
    {
        echo "using";
    }
}
$car1 = new cars1();
$car1->companyName1();//Fatal error: Cannot override final method honda1::companyName1()
*/
//using final keyword with constance
class name
{
    final const NAME = "Jahidul Islam";
}
class newName extends name
{
    const NAME = "Mahmudul Hasan";
}
$name = new newName();
echo $name::NAME;//Fatal error: newName::NAME cannot override final constant name::NAME
