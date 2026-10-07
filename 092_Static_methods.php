<?php
/*
==================================================
PHP STATIC METHODS
==================================================

What is it?
- A static method belongs to the class itself, not to any object.
- You make it by writing the word "static" before the function.
- It has one shared home: the class.

How to make it:
- public static function myMethod() { ... }
- "static" can come before or after "public".
  Common style: public static function

How to call it:
- Use the class name, then ::, then the method name.
- Example: ClassName::myMethod();
- No "new" needed. No object needed.
- The :: sign is called the "scope resolution operator".

Rules:
- No $this inside a static method.
  Why? $this means "this object", and there is no object here.
- So a static method cannot use instance properties.
- It can use only static properties and other static methods.
- You CAN call a static method with an object ($obj->method()).
  PHP allows it, but it is not a good habit.
  Always call it with the class name. It reads clearer.
- You CANNOT call a normal (instance) method with the class name.
  Example: ClassName::instanceMethod() gives a Fatal error.
  Error: "Non-static method cannot be called statically".
- PHP runs code top to bottom. Lines before the error still run.
  Then the script stops at the error.

self, parent and class name:
- self::      = inside the same class.
- parent::    = inside a child class, to reach the parent class.
- ClassName:: = from an unrelated class, or from outside.
- A child class can call the parent's static method
  with its own name: Child::parentStaticMethod();
- Unrelated classes have no link, so self and parent do not work.
  Use the full class name.
- Why self:: is better than the class name inside the class:
  if the class name changes later, you need not edit inside

Static method vs Instance method:
- Static method:
  Belongs to the class. Called with ClassName::method().
  No $this. Works with static data only.
- Instance method:
  Belongs to an object. Called with $obj->method().
  Has $this. Can use the object's own data.
- A simple picture:
  Static   = the school office rules. Anyone can take them.
  Instance = one student's own notebook. Needs that student.
- Rule of thumb:
  Needs the object's own data? Use an instance method.
  Same work for everyone? Use a static method.
*/
//static method vs instance method
class siMethod
{
  public static function myStatic()
  {
    echo "this is a static method";
  }
  public function myInstance()
  {
    echo "this is a instance method";
  }
}
siMethod::myStatic();
//$sMethod = new siMethod()
//$sMethod->myStatic();//Parse error: syntax error, unexpected variable "$sMethod"

//siMethod::myInstance();;//Fatal error: Uncaught Error: Non-static method siMethod::myInstance() cannot be called statically
$iMethod = new siMethod();
$iMethod->myInstance();

//calling static method from own class instance method by self and from drived class instance method by parent key, and by derived class name from the outside.
class cWithsel
{
  public static function myStatic1()
  {
    echo "this is static method1" . "<br>";
  }
  public function myInstance1()
  {
    echo "inside own class in instance method the static method is called with self keyword" . "<br>";
    self::myStatic1();
    cWithsel::myStatic1(); // work, but not recomended
  }
}
$cWithsel = new  cWithsel();
$cWithsel->myInstance1();

class cWithself
{
  public static function myStatic2()
  {
    echo "This is a static method 2 from parent" . "<br>";
  }
  public function myInstance2()
  {
    echo "This is a instance method2" . "<br>";
    echo "calling static method from instance method" . "<br>";
    self::myStatic2();
  }
}
$cWself = new cWithself();
$cWself->myInstance2();

class cWithparent extends cWithself
{
  public function myDfunc()
  {
    echo "This an instance method of the derived class" . "<br>";
    echo "Calling static method of the parent class" . "<br>";
    parent::myStatic2();
  }
}
$myDclass = new cWithparent();
cWithparent::myStatic2();
$myDclass->myDfunc();

//calling static method from an new class that is not a derived class. self and parent key not work here.
class mySclass
{
  public static function myStatic3()
  {
    echo "This is a static method 3" . "<br>";
  }
}
//this is not a derived class
class myNewc
{
  public function myFunc2()
  {
    echo "This is an instance method" . "<br>";
    echo "Calling static method of the another class" . "<br>";
    //parent::myStatic3(); //atal error: Cannot use "parent" when current class scope has no parent
    //self::myStatic3();//Fatal error: Uncaught Error: Call to undefined method myNewc::myStatic3()
    mySclass::myStatic3();
  }
}
$myNewclass = new myNewc();
$myNewclass->myFunc2();

//static method work with static property. it not works with the instance variable
class myLoop
{
  static int $var1 = 0;
  //var $var1 = 0; //Fatal error: Uncaught Error: Access to undeclared static property myLoop::$var1
  function __construct()
  {
    //$var1++;Warning: Undefined variable $var1Number of objects available:
    //$this->var1; Fatal error: Uncaught Error: Using $this when not in object context

    self::$var1++;
    echo "object number:" . self::$var1 . "<br>";
  }
  public static function myStatic4()
  {
    echo "Number of objects available:" . self::$var1 . "<br>";
  }
}
for ($i = 1; $i <= 3; $i++) {
  $obj = new myLoop;
}
myLoop::myStatic4();
/*
When to use it:
- Helper or utility work that needs no object data.
  Example: MathHelper::square(5)
- Small jobs like formatting a date, formatting money,
  shortening text, or cleaning a string.
- Counters or shared values across all objects.

Warning (do not overuse):
- If everything is static, the code is no longer object-oriented.
  It becomes like old-style plain functions.
- Static code is harder to test.
- It causes trouble in big projects.
- Use static only when it really fits.

Common beginner mistakes:
- Writing $this inside a static method.
  Fix: use self:: instead.
- Calling an instance method with ClassName::
  Fix: create an object first with new.
- Forgetting the $ in self::$count.
- Writing self::$method() or self::count (wrong forms).

Extra (late static binding, just a small idea):
- self:: always means the class where the code is written.
- static:: means the class that was actually called.
- This is called "late static binding".
- You can skip it for now.
  When you see static:: in Laravel or other frameworks,
  remember this is why it is used.

Quick summary:
- Add "static" before the method to make it static.
- Call it with ClassName::method(). No object needed.
- No $this inside. Only static properties and static methods.
- An object can call a static method, but ClassName:: is better.
- ClassName:: on an instance method gives a Fatal error.
- Use self:: (same class), parent:: (parent class),
  ClassName:: (unrelated class).
- A static property is shared by all objects.
==================================================
*/
