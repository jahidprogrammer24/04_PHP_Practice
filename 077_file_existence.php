<?php
//PHP file existence
/*
Before opening a file,You should check whether it exists. so that you can avoid errors.

PHP has utility founctins for checking that:

01. file_exists- used to chech whether the file or directory exists or not.
02. is_file()- used to check whether the given path refers to a file or directory.
03. is_readable()- used to check whether there is permission to read the file?, 
04. is_writable()- used to check whether there is permission to write data to the file?
*/
//file_exists()- file_exists(string $filename): bool
$filename = 'test5.txt';
if (file_exists($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message; //The file test5.txt exists
// realative (corrent path ) or absolute (spesific pathe)
$filename = 'directory/test6.txt';
if (file_exists($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message; //The file directory/test6.txt exists

$filename = 'C:\xampp\htdocs\phpproject\test5.txt';
if (file_exists($filename)) {
    $message = "The file $filename exists";
} else {
    $message = "The file $filename does not exist";
}
echo $message; //The file C:\xampp\htdocs\phpproject\test5.txt exists

//is_file()- is_file(string $filename):bool
$filename =  'test5.txt';
if (is_file($filename)) {
    $message = "$filename is a file";
} else {
    $message = "$filename is not a file";
}
echo $message; //test5.txt is a file

$filename = 'directory/test6.txt';
if (is_file($filename)) {
    $message = "$filename is a file";
} else {
    $message = "$filename is a not a file";
}
echo $message; //directory is a file

//is_readable()
$filename = 'test5.txt';
if (is_readable($filename)) {
    $message = "$filename is readable";
} else {
    $message = "$filename is not readable";
}
echo $message; //filetest5.txt is readable

//is_writable()
$filename = 'test5.txt';
if (is_writable($filename)) {
    $message = "$filename is writable";
} else {
    $message = "$filename is not writable";
}
echo $message;//test5.txt is writable
