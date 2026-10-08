<?php
/*
PHP NAMESPACES

What is it?

A namespace is a named container for classes, functions and constants.
It works like a folder: two files can have the same name if they are in different folders.
In the same way, two classes, functions or constants can have the same name if they are in different namespaces.
It prevents name conflicts, especially with third party code.
It groups related code together and keeps big projects organized.
Namespace names are case insensitive (MySpace and myspace are the same).


Why use it?

1. Avoid name collision with your own code and with third party libraries.
2. Give long names a short alias.
3. Group related classes, interfaces, functions and constants.


How to use it:

1. Declare a namespace with the namespace keyword.
   Example form: namespace myspace;
2. The namespace line must be the first statement in the file.
   Only declare(strict_types=1); may come before it.
   Any other code before it (even echo or HTML) gives a fatal error.
3. Load a file that has a namespace with include or require.
4. Use the full name to call something from a namespace.
   Example form: myspace\hello();
5. Import with the use keyword to avoid writing the long name again.
   use for a class:     use App\Models\User;
   use for a function:  use function myspace\hello;
   use for a constant:  use const myspace\TEMP;
6. Give an alias with the as keyword.
   Example form: use App\Admin\User as AdminUser;
7. Import many names from one namespace together.
   Example form: use App\Models\{User, Product, Order};
8. Backslash is the namespace separator.
9. Constants inside a namespace are made with the const keyword.
10. __NAMESPACE__ is a magic constant. It gives the current namespace name.
11. Bracketed style is also possible: namespace myspace { ... }
12. In real projects the folder structure matches the namespace (PSR-4),
    so the autoloader can find the class file by itself.


Name types:

Unqualified name: no backslash. Example: hello()
It means the current namespace.

Qualified name: has a backslash but does not start with one. Example: myspace\hello()
It is relative to the current namespace, like a sub folder path.

Fully qualified name: starts with a backslash. Example: \space1\myspace\hello()
It is an absolute path, always counted from the root (global) namespace.

Namespace keyword as prefix: namespace\space1
Inside the global space it simply means space1.
Inside the myspace namespace it means myspace\space1.


Rules:

1. A name without a backslash refers to the current namespace.
2. A name with a backslash (myspace\space1) means a sub namespace under the current one.
3. A name that starts with a backslash is fully qualified.
4. A fully qualified name always resolves to the absolute namespace.
5. The namespace keyword as prefix means the current namespace.
6. The first part of a qualified name is checked in the import table (names brought in by use).
7. If no import rule matches, the current namespace is added in front of the name.
8. Classes, functions and constants have separate import tables.
   So use, use function and use const are different things.
9. For an unqualified function or constant, PHP first looks inside the current namespace.
   If it is not found, PHP falls back to the global one (example: strlen works inside any namespace).
10. Classes do not fall back to global.
    Inside a namespace, write \DateTime, \Exception, \PDO with a leading backslash,
    or import them once with use DateTime;
11. If the same function name exists in the current namespace and in another namespace,
    use the namespace name in front to choose the right one.
12. Never put output or other code before the namespace line.
*/
//
