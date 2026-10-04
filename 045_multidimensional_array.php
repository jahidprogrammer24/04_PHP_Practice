<?php
//Multidimentional Array:
/*
Array into Array
*/

//One dimensional indexed array
$arr = [10, 20, 30, 40, 50];
print_r($arr);

//One dimensional associative array
$arr = ["key1" => "val1", "key2" => "val2", "key3" => "val3"];
echo "<br>";
print_r($arr);

//Two dimensional indexed array
$arr = [
    [1, 2, 3, 4, 5],
    [10, 20, 30, 40, 40],
    [100, 200, 300, 400]
];
echo "<br>";
print_r($arr);

//Two dimensional associative array
$arr = [
    "row1" => ["key11" => "val11", "key12" => "val12", "key13" => "val13"],
    "row2" => ["key21" => "val21", "key22" => "val22", "key23" => "val23"],
    "row3" => ["key31" => "val31", "key32" => "val32", "key33" => "val33"]
];
echo "<br>";
print_r($arr);

//Traversing 2D indexed array
$tbl = [
    [1, 2, 3, 4, 5,],
    [10, 20, 30, 40, 50],
    [100, 200, 300, 400, 500]
];
echo "<pre>";
foreach ($tbl as $row) {
    foreach ($row as $elem) {
        $val = sprintf("%5d", $elem);
        echo $val;
        //echo $elem;
    };
    echo "<pre>";
};
//Traversing 2D associative array
$tbl = [
    "row1" => ["key11" => "val11", "key12" => "val12", "key13" => "val13"],
    "row2" => ["key21" => "val21", "key22" => "val22", "key23" => "val23"],
    "row3" => ["key31" => "val31", "key32" => "val32", "key33" => "val33"]
];
echo "<pre>";
foreach ($tbl as $rk => $rv) {
    echo "$rk";
    foreach ($rv as $k => $v) {
        echo "$k => $v";
    }
    echo "<pre>";
};

//Accessing Elements and changing in 2D indexed Array
$tbl = [
    [1, 2, 3, 4],
    [10, 20, 30, 40],
    [100, 200, 300, 300, 400]
];
print("Value at [2], [2]" . $tbl[2][2]);

$tbl[1][3] = 50;
print($tbl[1][3]);

//Accessing Elements in 2D Associative array
$tbl = [
    "row1" => ["key611" => "val11"],
    "row2" => ["key22" => "val22"]
];
print ("value at row2-key22 is" . $tbl["row2"]["key22"]) . "<br>";
//3D Array and traversing 
$arr3D = [
    [
        [1, 2, 3],
        [4, 5, 6],
        [7, 8, 9]
    ],
    [
        [10, 11, 12],
        [13, 14, 15],
        [16, 17, 18]
    ],
    [
        [19, 20, 21],
        [22, 23, 24]
    ]
];

foreach ($arr3D as $arr) {
    foreach ($arr as $row) {
        foreach ($row as $element) {
            //echo "$element";
        }
        echo "<br>";
    }
    echo "<br>";
}
//print_r($arr3D);

//Recursive Traversal in indexed array
function showarray($arr)
{
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            showarray($v);
        } else {
            echo "$k=>$v";
        }
    }
    echo "<br>";
}
showarray($arr3D);

//Recursive Traversal in 2D associative array
$tbl = [
    "row1" => ["key11" => "val11", "key12" => "val12", "key13" => "val13"],
    "row2" => ["key21" => "val21", "key22" => "val22", "key23" => "val23"],
    "row3" => ["key31" => "val31", "key32" => "val32", "key33" => "val33"]
];
function showarray1($arr)
{
    foreach ($arr as $k => $v) {
        if (is_array($v)) {
            showarray($v);
        } else {
            echo "$k=>$v";
        }
    }
}
showarray1($tbl);
