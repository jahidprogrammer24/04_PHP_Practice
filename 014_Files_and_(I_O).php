<?php
//Reading File Example
/*
$filename = "tmp.php";
$file = fopen($filename, "r");

if ($file == false) {
    echo "Error in opening file";
    exit();
}

$filesize = filesize($filename);
$filetext = fread($file, $filesize);
fclose($file);

echo "File size : $filesize bytes";
echo "<pre>$filetext</pre>";
 
//Writing File Example

$filename = 'newfile.txt';
$file = fopen($filename, 'w');

if ($file == false) {
    echo "Error in opening new file";
    exit();
}

fwrite($file, 'This is a simple test<br>');
fwrite($file, 'This is a simple test<br>');
fwrite($file, 'This is a simple test<br>');
fclose($file);

$file = fopen("newfile.txt", "r");
$filesize = filesize("newfile.txt");
$filetext = fread($file, $filesize);
fclose($file);

echo "File size : $filesize bytes <br>";
echo $filetext;
*/
// appendig file example
$file = 'append.txt';
$filename = fopen($file, "a");

$filetext = fwrite($filename, 'this is appending a file <br>');
fclose($file);

echo "$filetext";
