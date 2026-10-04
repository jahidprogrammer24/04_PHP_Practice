<?php
//Assignment Operators (=)
/*
PHP has a Compound Assignment Operators These work mathematical work and assignment together:
01. Simple Assignment operator (=)
02. Add AND Assignment operator (+=)
03. Subtract AND Assignment operator (-=)
04. Multiply AND Assignment operator (*=)
05. Divide AND Assignment operator (/=)
06. Modulus AND Assignment operator (%=)

*/

//Basic Example of Assignment Operator:
$a = 42;
$b = 20;

$c = $a + $b;
echo "Addition Operation Result: $c" . "<br>"; // 62

$c += $a;
echo "Add AND Assignment Operator :$c" . "<br>"; // 104

$c -= $a;
echo "Subtract AND Assignment Operator :$c" . "<br>"; //62

$c *= $a;
echo "Multiply AND Assignment Operator :$c" . "<br>"; //2604

$c /= $a;
echo "Divide AND Assignment Operator :$c" . "<br>"; //62

$c %= $a;
echo "Modulus AND Assignment Operator :$c" . "<br>"; //20

/*
// Bitwise Assignment Operators
01. Simple Assignment (=)
02. Bitwise AND assignment (&=)
03. Bitwise OR assignment (|=)
04. Bitwise XOR assignment (^=)
05. Left shift AND assignment (<<=)
06. Right shift AND assignment(>>=)
*/
$a = $a & $b;
$a &= $b;

$a = $a | $b;
$a |= $b;

$a = $a ^ $b;
$a ^= $b;

$a = $a << 2;
$a <<= 2;

$a = $a >> 2;
$a >>= 2;

// Use of Assignment Operator in Loops
$num = 1;

while ($num <= 10) {
    echo $num; // 1 3 5 7 9
    $num += 2;
}
