<?php
/*
  PHP OVERLOADING (Magic Methods)

  What is it?
  In PHP, overloading does NOT mean same method name with different arguments.
  It means creating properties and methods dynamically at runtime.
  PHP calls a magic method when you use something that does not exist
  or is not accessible (private / protected).
  Think of it as a receptionist: the room is missing or locked,
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
