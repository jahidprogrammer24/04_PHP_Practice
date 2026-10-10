<?php
/*
PHP OBJECT ITERATION

What is it?

Object iteration means looping over an object and visiting its properties one by one.
foreach can loop directly over an object.
Each round gives you the property name (key) and its value.
It saves you from calling every property by hand.
You can also loop over an array of objects and handle each object the same way.


Why use it?

1. Less repeated code.
2. Easy to show or check all properties of an object.
3. Easy to process many objects together.


How to use it:

1. Simple way: foreach over the object.
   Example form: foreach ($obj as $key => $value)
2. Inside the class: foreach over $this in a method.
   Example form: foreach ($this as $key => $value)
3. Custom way: implement the Iterator interface in your class.
   Example form: class Book implements Iterator
4. Easy way: implement IteratorAggregate and write only getIterator().
   Return an ArrayIterator made from your array.
5. To get properties as an array, use get_object_vars().


Rules:

1. foreach outside the class shows only public properties.
2. Private and protected properties stay hidden outside the class.
3. foreach inside a class method (using $this) shows all properties:
   public, protected and private.
4. Iterator interface needs exactly five methods.
   A class that implements it must write all of them.
   rewind()  go back to the first item
   valid()   is the current position valid? (false stops the loop)
   current() return the current value
   key()     return the current key
   next()    move to the next item
5. Order of calls in a foreach loop:
   rewind() runs once at the start.
   Then each round: valid(), current(), key(), then your loop code, then next().
   When valid() returns false, the loop ends.
6. rewind() runs only at the start, not after the loop.
7. next() returns nothing (void). It only moves the position.
8. valid() must return true or false.
9. Keep your own position counter, or use an array pointer
   (reset, current, key, next).
10. In PHP 8.1 and above, write return types:
    current(): mixed
    key(): mixed
    next(): void
    rewind(): void
    valid(): bool
    Without them you get a deprecation warning.
11. Iterator extends Traversable. Any Traversable object works with foreach.
12. IteratorAggregate is shorter than Iterator.
    Use it when you only need to loop over an inner array.
13. An array property cannot be printed with echo.
    Use print_r() or var_dump() for it.
*/
//Showing public prperty list from outside of class
class myclass
{
   private $var;
   protected $var1;
   public $x, $y, $z;
   public function __construct()
   {
      $this->var = "Hello World";
      $this->var1 = array(1, 2, 3);
      $this->x = 100;
      $this->y = 200;
      $this->z = 300;
   }
}
$obj = new myclass();
foreach ($obj as $key => $value) {
   print "$key => $value" . "<br>";
}

//showing all property from inside the class
class myclass1
{
   private $var;
   protected $var1;
   public $x, $y, $z;
   public function __construct()
   {
      $this->var = "Hello World";
      $this->var1 = array(1, 2, 3);
      $this->x = 100;
      $this->y = 200;
      $this->z = 300;
   }
   public function iterate()
   {
      foreach ($this as $k => $v) {
         if (is_array($v)) {
            var_dump($v);
         } else {
            echo "$k: $v" . "<br>";
         }
      }
   }
}
$obj1 = new myclass1();
$obj1->iterate();
// 
class myClass2
{
   private $privateVar = "Private Data";
   protected $protectedVar = "Protected Data";
   public $x = 100;

   public function iterate1()
   {
      foreach ($this as $key => $value) {
         echo "$key : $value" . "<br>";
      }
   }
}
$obj2 =  new myClass2;
$obj2->iterate1();
//iterator extends 5 traversable methods beild-in

//interface iterator extends Traversable{
/*Methods*/
//public current():mixed
//public key(): mixed
//public next():void
//public rewind(): void
//public valid(): bool
//}
class myClass3 implements Iterator
{
   private $arr = array('a', 'b', 'c');

   public function rewind(): void
   {
      echo "rewinding" . "<br>";
      reset($this->arr);
   }
   public function current()
   {
      $var = current($this->arr);
      echo "current:$var" . "<br>";
      return $var;
   }
   public function key()
   {
      $var = key($this->arr);
      echo "key: $var" . "<br>";
      return $var;
   }
   public function next(): void
   {
      $var = next($this->arr);
      echo "next:$var" . "<br>";
      #return $var;
   }
   public function valid(): bool
   {
      $key = key($this->arr);
      $var = ($key !== NULL && $key !== FALSE);
      echo "valid: $var" . "<br>";
      return $var;
   }
}

$obj3 = new myClass3();

foreach ($obj3 as $k => $v) {
   print "$k: $v" . "<br>";
}
