<?php
/*
  PHP OVERLOADING (Magic Methods)

  What is it?
  In PHP, overloading means creating properties and methods dynamically at runtime.
  PHP calls a magic method when you use something that does not exist
  or is not accessible (private / protected).
  so the magic method handles the request instead of a fatal error.

  Property overloading methods:
  __set($name, $value)   runs when writing to an inaccessible or missing property
  __get($name)           runs when reading an inaccessible or missing property
  __isset($name)         runs when isset() or empty() is used on it
  __unset($name)         runs when unset() is used on it

  Method overloading methods:
  __call($name, $args)              runs when calling an inaccessible or missing object method
  static __callStatic($name, $args) runs when calling an inaccessible or missing static method

  How to use it:
  1. Write the magic method inside the class.
  2. $name is the name that was used. $value or $args is what was passed.
  3. Use $this->$name to access a property by variable name.
  4. Prefer a private array ($data) to store values.
  5. Use a whitelist (allowed names) and check it with in_array().
  6. Throw an Exception for unknown names, then catch it with try / catch.
  7. Always return the value in __get(), or you get null.
  8. Use -> to call __call(). Use :: to call __callStatic().
  9. In __call(), check the method name pattern, like str_starts_with($method, 'get').
  10. In a child class, call parent::__call($name, $args) to keep the parent behavior.

  Rules:
  1. Magic method names start with double underscore (__).
  2. They work only in object context. Do not declare property magic methods static.
  3. __callStatic() must be declared static.
  4. They run only if the property or method is missing, private or protected.
     A public property that exists is accessed directly.
  5. Inside __set(), writing to the same property does not call __set() again.
     PHP prevents infinite loops, so it creates a real public property.
  6. Without __isset(), isset() on a private property from outside is always false.
  7. The name in __call() is case sensitive (MyMethod is not mymethod).
  8. A child class method overrides the parent magic method completely.
  9. Without conditions, __set and __get break encapsulation.
     A private property then behaves like a public one.
  10. Do not overuse them. Code editors lose auto-complete,
      and code becomes harder to read and debug.

  Real world use:
  Laravel Eloquent: $user->name works through __get().
  User::where() works through __callStatic() (method forwarding).
 */
//Property overloading
class UserProfile
{
   private array $data = [];
   private array $allowed = ['name', 'email', 'phone'];

   public function __set($name, $value)
   {
      if (!in_array($name, $this->allowed)) {
         echo "Not allowed: $name" . "<br>";
         return;
      }
      if ($name === 'email' && !filter_var($value, FILTER_VALIDATE_EMAIL)) {
         echo "Invalid email: $value" . "<br>";
         return;
      }
      echo "Setting '$name' property with value" . "<br>";
      $this->data[$name] = $value;
   }
   public function __get($name)
   {
      echo "Getting '$name' property with value";
      return $this->data[$name] ?? null;
   }
   public function __isset($name)
   {
      echo "Checking $name property" . "<br>";
      return isset($this->data[$name]);
   }
   public function __unset($name)
   {
      echo "Removing $name property" . PHP_EOL;
      unset($this->data[$name]);
   }
}
$user = new UserProfile();

//__set
$user->name = " 'Jahidul Islam'"; //Setting 'name' property with value
$user->email = 'jahidulislam@gmail.com';
$user->email = "abc";
$user->phone = "01312146423";
$user->age = 28; //Not allowed: age

//__get
echo $user->name . "<br>"; //Getting 'name' property with value 'Jahidul Islam'
echo $user->email . "<br>";
echo $user->phone . "<br>";

//__isset
var_dump(isset($user->name)); //Checking name property bool(true)
var_dump(isset($user->age)); //Checking age property bool(false) 

//__empty()
var_dump(empty($user->phone)); //Checking phone property Getting 'phone' property with valuebool(false) 
var_dump(empty($user->name));

//__unset
unset($user->name); //Removing name property
var_dump(isset($user->name)); //Checking name property bool(false) 

//
var_dump($user->data); //Getting 'data' property with valueNULL


//Method overloading
/*
class student
{
   private $firstName;
   private $lastName;

   private function setName($fname, $lname)
   {
      $this->firstName = $fname;
      $this->lastName = $lname;
   }
   public function __call($name1, $args)
   {
      echo "This is private or non existing method: $name1";
      print_r($args);
   }
}
$obj = new student();
$obj->setName('Jahidul', 'Islam'); //This is private or non existing method: setNameArray ( [0] => Jahidul [1] => Islam ) 
$obj->setName2('Mahmudul', 'Hasan');//This is private or non existing method: setName2Array ( [0] => Mahmudul [1] => Hasan )
*/
class student
{
   private static function setName()
   {
      echo "This is a static method";
   }
   //public static function __callStatic($name2, $args2)
   //{
   //   echo "This is a private method:" . $name2;
   //   print_r($args2);
   //}
   public static function __callSatic($name2, $args2)
   {
      if (method_exists(__class__, $name2)) {
         call_user_func_array([__class__, $name2], $args2);
      } else {
         echo "this method does not exist:" . $name2;
      }
   }
}
student::setName('Sayful', 'Islam');
