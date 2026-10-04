<?php
// PHP File Handling
/*
In PHP, a file is called a resource object. data is read or written to this resource linearly, line by line.

Any resource where data is read from and written this way is called stream. 
some things behave like a stream are: TCP sockets. the standard input stream, the standard output stream, and the error stream.
STDIN, STDOUT, STDERR are constants that represent these three streams.

File handling means managing files stored on the server.
In file handling, four steps are fOllowed.
01. opening a file
02. reading data from file
03. writing data in the file
04. clousing the file

File handliNg is important, because it helps with:
storing user's data,managing logs,creating configuration files, and generating reports.

*/
// fopen()- opening a file
$file = fopen("file_handling.txt", "r");
if ($file) {
    echo "File opened successfully!";
} else {
    echo "Error opening the file";
}

//fgets()-reading just one line
//fread()- reading multi line with specific length setup
$file = fopen("file_handling.txt", "r"); //opening file in read mode

while (($line = fgets($file)) !== false) {
    echo nl2br($line);
} //Jahidul islam mahmudul hasan sayeedur rahman sayful islam

echo fread($file, 13); //Jahidul Islam

fclose($file);

//fwrite()-writing data
$file = fopen("file_handling.txt", "a"); //opening the file in append mode.

if ($file) {
    fwrite($file, "Adiba");

    fclose($file);
    echo "Data written to the file scuccessfully";
} else {
    echo "Error opening the file";
}

//fclose()= closing the file
// opening multiple files without closing them afterword can exhaust the server's resourcs.
$file = fopen("file_handling.txt", "r");

fclose($file);

echo "The file has been closed";

//error handling in file handling is important- check conditionally whether the file was opened.
$file = fopen("file_handling.txt", "r");

if (!$file) {
    echo "Error: File dose not exist";
} else {
    fclose($file);
}

// List of registered stream wrapper- PHP supports several stream protocols, used in stream functions like fopen(), file_exists(), etc.; 
print_r(stream_get_wrappers()); //Array ( [0] => https [1] => ftps [2] => compress.zlib [3] => php [4] => file [5] => glob [6] => data [7] => http [8] => ftp [9] => phar )

// cosole input data is stored in the computer's main memory. this data is removed once the program is closed. sometimes this date is needed later, so it must be saved permanently in disk storage. we use disk file instead of a standard stream.
$handle = fopen('file://' . __DIR__ . '/data.txt', 'r');

fclose($handle);
