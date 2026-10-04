<?php
//PHP Named arguments
//01. positional arguments example
function myFunction($x, $y)
{
    echo "x=$x y=$y";
}
myFunction(10, 20);



//02. named arguments example
function myFunction2($x, $y)
{
    echo "x=$x y=$y" . "<br>";
}
myFunction2(x: 10, y: 20);

//Named argument can be passed in any order without causing a fatal error
myFunction2(y: 30, x: 20);

//Positional and named argumets can be used together 
//but positonal argument must be declared before named arguments.
function myFunction3($x, $y, $z)
{
    echo "x=$x y=$y z=$z";
}
myFunction3(20, z: 20, y: 20);
//myFunction3(y: 30, z: 30, 30);//Fatal error: Cannot use positional argument after named argument

//named argument can also be used after array unpaking
function myFunction4($x, $y, $z = 30)
{
    echo "x = $x y = $y z= $z" . "<br>";
}
myFunction4(...[20, 30], z: 40);

//Passing multiple valuse to the same parameter thrws an exception .
function myFunction5($x, $y, $z)
{
    echo "x = $x y=$y z=$z";
}
//myFunction4(x: 50, z: 50, x: 20);//Fatal error: Uncaught Error: Named parameter $x overwrites previous argument


//
function myFunction6($name, $age)
{
    echo "My name is $name and i am $age years old";
}
myFunction6("Jahid", 29); //positionan argument
myFunction6(name: "Jahid", age: 29); //named argument
myFunction6(age: 29, name: "Jahid");//named argument