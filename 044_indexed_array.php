<?php
//Indexed array
/*In PHP, the array elements may be a collection of key-value pairs or it may contain values only. If the array consists of value only, it is said to be an indexed array, as each element is identified by an incrementing index, starting with "0".
*/
//Creating an Indexed array
$arr1 = array("a", 10, 9.99, true);
$arr2 = ["a", 10, 9.99, true];

var_dump($arr1, $arr2);

//Traversing an Indexed Array
$numbers = array(10, 20, 30, 40, 50);
//01. with for loop
for ($i = 0; $i < count($numbers); $i++) {
    echo "numbers[$i]= $numbers[$i]" . "<br>";
}
//with while loop
$i = count($numbers) - 1;

while ($i >= 0) {
    echo "numbers[$i]= $numbers[$i]" . "<br>";
    $i--;
}

//Accessing Elements
$arr = [10, 20, 30, 40, 50];
echo $arr[1]; //20
echo $arr[1] = 100; //100

//Reverse Array
$arr1 = array(10, 20, 30, 40, 50);
$size = count($arr1);

for ($i = 0; $i < $size; $i++) {
    $arr2[$size - $i - 1] = $arr1[$i];
}

for ($i = 0; $i < $size; $i++) {
    echo "arr1[$i] = $arr1[$i] arr2[$i] = $arr2[$i]" . "<br>";
}
//Traversing with foreach
$arr1 = [10, 20, 30, 40, 50];

foreach ($arr1 as $val) {
    echo "$val" . "<br>";
}

foreach ($arr1 as $key => $val) {
    echo "arr1[$key]= $val" . "<br>";
}
//Mixed Array
$arr1 = [
    10,
    20,
    "vals" => ["ten", "twenty"],
    30,
    40,
    50
];

var_dump($arr1);
