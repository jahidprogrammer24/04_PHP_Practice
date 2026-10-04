<?php
//PHP- Create directory
/*
php has a directory management functions, it helps to creat a directory, change a current dirictory, and remove a spesific dirctory:

fllowing funtions are used to maintain that:
01. midir()
02. chdir()
03. getcwd()
04.rmdir()

*/
//rmdir() - it create a new directory, it's path given a function's paramiter.
/*mkdir(
   string $directory,
   int $permissions = 0777,
   bool $recursive = false,
   ?resource $context = null
): bool
*/
//with relative path
$dir = './mydir/';
mkdir($dir);
//wit absolute path
$dir = 'C:/xampp/htdocs/phpproject/mydir1/';
mkdir($dir);
//with $recursive paramiter that is true
$dirs = "./dir3/dir4/dir5";
mkdir($dirs, 0777, true);

//chdir()- it change the current directory wite your need. like linux cd command
//chdir("mydir1");

//getcwd()- it return current working directory path like linux pwd command
echo "current directory: " . getcwd() . PHP_EOL;
$dir = "./mydir1";
chdir($dir);
echo "current directory changed to: " . getcwd() . PHP_EOL;

$fp = fopen("a.txt", "w");
fwrite($fp, "Hello World");
fclose($fp);

copy("a.txt", "b.txt");
$dir = getcwd();
foreach (scandir($dir) as $file);
echo $file . PHP_EOL;

//rmdir() - it remove a spesific directory, the removing directory must be empty
rmdir($dir) or die("The directory is not present or not empty");
