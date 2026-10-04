<?php
//PHP File copy
/*
You can copy an existing file to a new file in different ways:
    01. reading and copying the file line by line to another file usining a loop.
    02. reading the entire content as a string and copying it to anotehr file.
*/
//PHP's copy() function- copy($source, $destination)
//it reads the file from beginning to end, copies all the data as a string, and writes it to a new file or folder all at once.

$sFile = "test3.txt";
$dFile = "test4.txt";

if (copy($sFile, $dFile)) {
    echo "File copied successfully";
} else {
    echo "Failed to copy the file";
}
// copying the file to another folder
$sFile = "test3.txt";
$dFile = "file_download/test7.txt";

if (copy($sFile, $dFile)) {
    echo "File copied to the file_download";
} else {
    echo "Failed to copy the file";
}
//checking whether the file is exists before copying.
$sFile = "test3.txt";
$dFile = "test4.txt";

if (file_exists($sFile)) {
    if (copy($sFile, $dFile)) {
        echo "File copied successfully";
    } else {
        echo "Faile to copy the file";
    }
} else {
    echo "Source file does not exist";
}

//loop-
//it reads data line by line from the file and writes it to a new file or folder line by line liniarly.
$file = fopen('test3.txt', "r");
$newfile = fopen("test8.txt", "w");
while (!feof($file)) {
    $str = fgets($file);
    fputs($newfile, $str);
    //echo "file coping line by line";
}
fclose($file);
fclose($newfile);

// copying all the entire file using PHP's two built-in functions:
//file_get_contents()
//file_put_contents()

$source = "test3.txt";
$target = "test8.txt";
$data = file_get_contents($source);
file_put_contents($target, $data);
// it's like copying line by line, but shorter. Remember that it copies everything at once, which can fill up the memory, and crash it. for copying large amounts of data use the chunk method with fread() and fwrite.