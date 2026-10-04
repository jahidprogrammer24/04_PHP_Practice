<?php
//PHP - reading a file
/*PHP's built-in fonctions for reading a file are:

01.file_get_contents() 
02.fgents()
03.fgetc()
04.fread()
05.fscanf() 
*/
//file_get_contents() - it opens a file, reads it's content as a string, and closes it automatically.  It is the easiest way to read a file

$filename = "test3.txt";
$content = file_get_contents($filename);
if ($content === false) {
    echo "Error reading the file";
} else {
    echo "File content:" . $content;
}

//fgets()-it returns one line from the opend file pointer or handle. It stops when it reahes a specific length or encounters a newline, and returns false on failure. 

$file = fopen("test3.txt", "r");
$str = fgets($file, 10);
echo $str;
fclose($file);

//in loop
$file = fopen("test3.txt", "r");
while (!feof($file)) {
    echo fgets($file) . "<br>";
}
fclose($file);

//fgetc()-it read one character from file pinter and return it. when it reaches end of file return false
$file = fopen("test3.txt", "r");
$str = fgetc($file);
echo $str;
fclose($file);
//in a loop
$file = fopen("test3.txt", "r");
while (!feof($file)) {
    $char = fgetc($file);
    if ($char == "\n") {
        echo "<br>";
    }
    echo $char;
}
fclose($file);

//fread()- it is a binary-safe function that is used to read data from a file with a specific length. fgets() function only reads from a text file, but the fread() function can also read a file in binary mode.
$name = "test3.txt";
$file = fopen($name, "r");
$data = fread($file, filesize($name));
echo $data;
fclose($file);

$name = "welcome1.png";
$file = fopen($name, "rb");
if ($file) {
    $data = fread($file, filesize($name));
    //echo $data;
    //var_dump($data);
    fclose($file);
} else {
    echo "Error opening the file";
}

//fscanf()-it reads data from a file pointer, parses it into a spesific format, and converts it to the correct variable type. each function call reads one line from the file.
//fscanf(resource $stream, string $format, mixed &...$vars): array|int|false|null
//format specifier-[a special symbol that indicates which data is expected]
/*
%% = return a % sign
%b = binary
%c = character as ASCII
%f = floating point
%F = floating point
%o = octal
%s = string
%d = signed decimal number
%e = scientific notation
%u = unsigned decimal number
%x = lowercase hexadecimal number
%X = uppercase hexadecimal number

*/
$file = fopen("employees.txt", "r");
while ($employee_info = fscanf($file, "%s\t%s\t%s\n")) {
    list($name, $email, $salary) = $employee_info;
    echo "<b>Name</b>: $name <b>Email</b>: 
	  $email <b>Salary</b>: $salary <br>";
}
fclose($file);
