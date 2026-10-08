<?php
/*
Static Properties

What is it?
A static property is a variable that belongs to the class, not to an object.
All objects share one single copy of it.
Good for counters and shared settings.

How to use it:
Declare it with the static keyword: public static int $count = 0;
Read it outside the class: ClassName::$count
Read it inside the class: self::$count
Read it in a child class: parent::$count
Change it: self::$count++; or ClassName::$count = 5;

Rules:
1. static can come before or after the access modifier. Most people write the modifier first: public static.
2. The type comes after static, never before it: public static string $name.
3. Use :: to access it. Do not use ->, because PHP gives a notice.
4. Keep the $ sign in the name: ClassName::$name.
5. $this cannot reach it. Use self:: instead.
6. A static method can use static properties, but not normal properties.
7. The value lives only for one request. A page refresh resets it. Use a database or session to keep data longer.
8. The starting value must be a simple value, not the result of a function.
9. Make it private static and add a public static getter method, so outside code cannot change it by mistake.
*/
class myClass1
{
    static string $var1 = " My Class" . "<br>";
    function cWithself()
    {
        echo "accessing with self inside class:" . self::$var1 . "<br>";
    }
}
class dClass extends myClass1
{
    function cWithparent()
    {
        echo "accessing with parent from derived class" . parent::$var1 . "<br>";
    }
}
$obj1 = new myClass1;
$obj1->cWithself();
echo "accessing with scope resolution operator outside of class:" . myClass1::$var1 . "<br>";
//echo "accessing static property with -> operator:" . $obj1->var1 . "<br>";//Notice: Accessing static property myClass1::$var1 as non static 
//Warning: Undefined property: myClass1::$var1

$obj2 = new dClass;
$obj2->cWithparent();










/*
Constant vs Static Property

Keyword:
const is used for a constant, static is used for a static property.

Change:
A constant can never change. A static property can change at any time.

Access:
Constant: ClassName::NAME (no $ sign)
Static property: ClassName::$name (with $ sign)

Child class:
A constant cannot be overridden. A static property can be.

Use:
A constant holds a fixed value, like PI.
A static property holds a shared value that changes, like a counter.

Object access:
Neither one can be reached with $this or ->.
*/
