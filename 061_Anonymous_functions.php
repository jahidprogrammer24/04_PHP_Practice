<?php
// PHP Anonymous funcions
/* An anonymous function is a function that has no name. it is also called closure or lambda function.
when we need a function that is called only once as a callback function etc.
you must use the semicolon at the end of anonymous function.
*/
$add = function ($a, $b) {
    return "a: $a b: $b addition:" . "($a+$b)";
};
echo $add(5, 10);

//major use in call back function
$arr = [10, 3, 70, 21, 54];

usort($arr, function ($x, $y) {
    return $x > $y;
});

foreach ($arr as $x) {
    echo $x . "<br>";
}
// use in array_walk()
$arr = array(1, 2, 3, 4, 5);

array_walk($arr, function ($n) {
    $s = 0;
    for ($i = 1; $i <= $n; $i++) {
        $s += $i;
    }
    echo "Number: $n Sum:$s";
});
// can access the outer variable by use 'use'
$maxmarks = 300;
$percent = function ($marks) use ($maxmarks) {
    return $marks * 100 / $maxmarks;
};
$m = 250;
echo "Marks = $m Percentage=" . $percent($m);
// static anonymous function
class myClass
{
    function sayHello()
    {
        $myFunction = static function ($name) {
            echo "Hello " . $name . "!";
        };

        $myFunction("Jahid");
    }
}
$obj = new myClass();
$obj->sayHello();
