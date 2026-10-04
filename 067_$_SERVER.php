<?php
//PHP $_SERVER
/*
The super global variable $_SERVER is an associative array that stores information about execution environment, web server and HTTP headers.

before PHP 5.8.O was released  $HTTP_SERVER_VARS was used for that. now it has been removed.

importent server variables and their function:
01. PHP_SELF
02. SERVER_ADDR
03. SERVER_NAME
04. QUERY_STRING
05. REQUEST_METHOD
06. DOCUMENT_ROOT
07. REMOTE_ADDR
08. SERVER_PORT
09. SCRIPT_FILENAME
10. REQUEST_URI
11. HTTPS
12. SERVER_PROTOCOL
13. GETWAY_INTERFACE
*/
foreach ($_SERVER as $k => $v) {
    echo $k . "=>" . $v . "<br>";
};

echo $_SERVER['PHP_SELF']; //PHP_helloworld/066_$_SERVER.php
echo $_SERVER['REQUEST_METHOD']; //phpGET
echo $_SERVER['HTTP_HOST']; //localhost
echo $_SERVER['DOCUMENT_ROOT'];
//xampp/htdocs
echo $_SERVER['REMOTE_ADDR']; //::1
echo $_SERVER['HTTP_USER_AGENT'];//Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/151.0.0.0 Safari/537.36
