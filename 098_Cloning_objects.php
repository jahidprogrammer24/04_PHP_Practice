<?php
/*
PHP CLONING OBJECTS

What is it?

Cloning means making a copy of an object.
$b = $a;          no copy. Two names for the same object.
$b = clone $a;    a new, separate object (shallow copy).
__clone() is a magic method. Use it to make a deep copy.


Why use it?

1. Change a copy and keep the original safe.
2. Make many similar objects from one ready object.


How to use it:

1. Shallow copy:
   $obj2 = clone $obj1;
2. Deep copy: write __clone() and clone each inner object inside it.
   public function __clone() {
      $this->obj = clone $this->obj;
   }
3. Array of objects: loop inside __clone() and clone each item.
4. Block cloning: make __clone() private.
5. Print an object in the browser: wrap print_r() with <pre> tags.


Rules:

1. $obj2 = $obj1 does not copy anything.
   A change through one name shows in the other.
2. clone makes a new object.
   Simple values (numbers, text) are copied and become independent.
3. clone is shallow.
   If a property holds another object, only its address is copied.
   The inner object stays shared by both.
4. __clone() runs automatically on the new copy.
   Inside it, $this is the new copy, not the original.
5. __clone() does not make a deep copy by itself.
   You must write the cloning code inside it.
6. If an inner object has its own inner objects,
   its class needs a __clone() too.
7. The constructor does not run on clone. Only __clone() runs.
8. An array cannot be cloned directly.
   Loop through it and clone each object.
9. A function receives the same object, not a copy.
   Clone it inside the function to protect the original.
10. === means the same object.
    == means equal property values.
11. A private __clone() blocks cloning with a Fatal error.
    Used for singleton and database connection classes.
12. unserialize(serialize($obj)) is a quick deep copy.
    It is slow and fails for some objects (like database connections).


When to use it:

Shallow copy: the object has no inner objects, or you want them shared on purpose.
Deep copy: the object has inner objects and the copy must be fully independent.
Clone first and change after, when the original must stay as it is.
```
*/
//shallow copy
class student01{
	public $name;
}
$student1 = new student01();
$student2 = clone $student1;

$student1->name= "Jahidul Islam";
$student2->name= "Mahmudul Hasan";

echo $student1->name;
echo $student2->name; 
