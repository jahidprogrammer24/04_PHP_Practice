<?php
//PHP writing to a file
/*
In PHP File writing means creating a new file or updating a a existing file. the file can be a text, log, or CSV file.

why shuold we write a file in PHP? 
01. for data storage- storing user's data, settings, and other important information.
02. for logging- reviewing your aplications's errors or events.
03. for backup- exporting important data to a file for.

the main functions for file writing are:
01.fwrite()
02.fputs()

a file has to be opened in write mode (w,a,r+,rb+,wb+, wa) to write data to it.
*/
//fputs() function:
//01. returns the number of bytes written to the file
$file = fopen("test4.txt", "w");
$bytes = fputs($file, "Hello World\n");
echo "bytes written: $bytes"; //
fclose($file); //(in the file: "Hello World", browser output: "bytes written: 12")
//02.appending new text to the file
$file = fopen("test4.txt", "a");
$bytes = fputs($file, "Hello PHP");
echo "bytes written: $bytes";
fclose($file); //(in file: "Hello World Hello PHP", browser output: "bytes written: 9" )
//03. copying the file's text to a new file
$file = fopen("test4.txt", "r");
$newfile = fopen("test5", "w");
while (!feof($file)) {
    $str = fgets($file);
    fputs($newfile, $str);
}
fclose($file);
fclose($newfile);

//fwrite
//01- returns the number of bytes written.
$file = fopen("test4.txt", "w");
echo fwrite($file, "Hi! Jahidul how are you?");
fclose($file);
//02. opening a file in binary read mode
$name = "image2.png";
$file = fopen($name, "rb");
$newfile = fopen("image3.png", "wb");
$filesize = filesize($name);
$data = fread($file, $filesize);
echo fwrite($newfile, $data, $filesize);
fclose($file);
fclose($newfile);
