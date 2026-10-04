<?php
//foreach
/*
PHP's foreach loop is specifically designed to work with Array. It is basically used to process each element of an array one by one.
The important thing is that foreach is only used for arrays or array-like data structures. if you try to use it on any data type (such as integer, string), then PHP will show an error.

There are two types of syntax for Foreach Loop:
    1. Loop with Indexed Array
    2. Loop wits Associative Array
*/

//01. Loop with Indexed Array
$arr = array(10, 20, 30, 40, 50);

foreach ($arr as $val) {
    echo $val . "<br>";
}
// array_search(): It returns a key of a specific value.
$arr = array(10, 20, 30, 40, 50);

foreach ($arr as $val) {
    $index = array_search($val, $arr);
    echo "Element at index $index is $val" . "<br>";
}
//key and value
$arr = array(10, 20, 30, 40, 50);

foreach ($arr as $k => $v) {
    echo "Key: $k => Val: $v" . "<br>";
}

//Loop with associative array
$capitals = array(
    "Maharashtra" => "Mumbai",
    "Telangana" => "Hyderabad",
    "UP" => "Lucknow",
    "Tamilnadu" => "Chennai"
);

foreach ($capitals as $k => $v) {
    echo "Capital of $k is $v" . "<br>";
}
//array_search()
$capitals = array(
    "Maharashtra" => "Mumbai",
    "Telangana" => "Hyderabad",
    "UP" => "Lucknow",
    "Tamilnadu" => "Chennai"
);

foreach ($capitals as $pair) {
    echo $pair;
    $cap = array_search($pair, $capitals);
    echo "Capital of $cap is $capitals[$cap]" . "<br>";
}

//Multi dimensional array
$twoD = array(
    array(1, 2, 3, 4, 5),
    array("one", "two", "three", "four"),
    array("one" => 1, "two" => 2, "three" => 3, "four" => 4)
);

foreach ($twoD as $idx => $arr) {
    echo "Array no $idx" . "<br>";

    foreach ($arr as $k => $v) {
        echo "$k=> $v" . "<br>";
    }
}
