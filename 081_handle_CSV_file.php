<?php
//PHP Handle CSV File
/*
a PHP Handle CSV File is used to convert a CSV file formated data to  plain test.

PHP has two function for that:
    01. fgetcsv() - it read data from csv file and place in a array
    02. fputcsv() - it place elements of an array in a CSV file line by line.

*/
//fgetcsv()
$filename = 'test3.txt';
$data = [];

$f = fopen($filename, 'r');

if ($f === false) {
    die('Cannot open the file: ' . $filename);
} else {
    while (($row = fgetcsv($f)) !== false) {
        $data[] = $row;
    }
}
fclose($f);
echo "<table border=1>";
foreach ($data as $row) {
    echo "<tr>";
    foreach ($row as $val) {
        echo "<td>$val</td>";
    }
    echo "</tr>";
}
echo "</table>";

//fputcsv()
$data = [
    ["name", "email", "post", "salary"],
    ["jahid", "jahid@gmail.com", "manager", "15000"],
    ["mahmud", "mahmud@gmail.com", "assistant", "10000"],
    ["sayeed", "sayeed@gmail.com", "programmer", "70000"],
];
$filename = 'employee.csv';

$f = fopen($filename, 'w');

if ($f === false) {
    die('Error opening the file: ' . $filename);
} else {
    foreach ($data as $row) {
        fputcsv($f, $row);
    }
}
fclose($f);

//appendig data in CSV File
$newData = ["Sayful", "saifule@gmail.com", "worker", "50000"];

$file =  fopen("employee.csv", "a");
fputcsv($file, $newData);
fclose($file);
echo "New data added successfully";

//deleting a CSV file
/*
$file = "employee.csv";

if (file_exists($file)) {
    unlink($file);
    echo "File deleded successfully";
} else {
    echo "File not found";
}
*/
