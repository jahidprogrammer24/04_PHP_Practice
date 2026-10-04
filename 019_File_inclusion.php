<?php
//PHP File Inclusion
/*Using code from one PHP file in another PHP file. If you change it one place it changes on all pages.

Functions for File Include in PHP
There are basically 4 functions in PHP-
01. include() 
02. require()
03. include_once()
04. require_once()
*/
//include() function: 
/*Gets all the code from the specified file and places it in the current file. 

if the file is not found a warning is displayed. 

but the script dose not stop running.

Benefits of using includ():
No need to write the same code over and over

Header, footer, menu can be easily used

Changes in one place will update all pages
*/
include("File_Include/menu.php");

echo "<p> This is an example to show how to include PHP file!</p>";

//require () Function
/*Works the same as include(). but if file not found fatal error. The whole script stops.

Adbantages of using require():
Site won't run if important files are missing.

Best for database, config files.

Avoids misconfiguration.

Reduces code duplication.
*/
require("File_Include/menu.php");

echo "<p> This is an example to show how to require PHP file!</p>";

//include_once() and require_once()
/*
Why is once needed
Let's say-
config.php is included multiple times

variable overwrite or error may occur

Solution_once

*/
include_once('File_Include/config.php');
require_once('File_Include/config.php');

echo "Database host is: $database_host";
// When the user decides-which files to include, this is dangerous. so here we will adopt a safe method