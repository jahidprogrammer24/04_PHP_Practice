<?php
/*
 * PHP Class Constants
 * -------------------
 * - A constant is a fixed value; once set, it can NOT be changed.
 * - Defined with the `const` keyword (no `$` sign).
 * - define() creates global constants; inside a class, use `const`.
 *
 * Key Points:
 * 1. Immutable : value cannot change anywhere in the code.
 * 2. Scope     : belongs to the class where it is defined.
 * 3. Static    : no object needed, access directly via class name.
 *
 * Rules:
 * - Public by default (private / protected also allowed).
 * - Value must be a fixed expression (no variables, properties, or function calls).
 * - Case-sensitive; written in UPPERCASE by convention.
 *
 * Accessing:
 * - Outside class : ClassName::CONSTANT
 * - Inside class  : self::CONSTANT
 * - `::` is the Scope Resolution Operator.
 *
 * Why use it?
 * - Readability       : clear meaning for each value.
 * - Maintainability   : change the value in one place only.
 * - Avoid magic numbers: no unexplained numbers/strings in code.
*/

//Defining and.accssing.constant
//Example 1
class square
{
    const PI = M_PI;
    var $side = 5;

    function area()
    {
        $area = $this->side ** 2 * self::PI;
        return $area;
    }
}
$s1 = new  square();
echo "PI=" . square::PI . "\n";
echo "area=" . $s1->area();

//Example 2
class shop
{
    const VAT = 15;
    function totalPrice($price)
    {
        return $price + ($price * self::VAT / 100);
    }
}
echo "VAT:" . shop::VAT . "\n";
$s = new shop();
echo "Total price:" . $s->totalPrice(100);

//
class example
{
    const X = 10;
    private const Y = 20;
}

$s1 = new example();
//echo "public =" . $s1->X; //Warning: Undefined property: example::$X
echo "public =" . example::X;//10
//echo "private =" . example::Y; //Fatal error: Uncaught Error: Cannot access private constant example::Y 
