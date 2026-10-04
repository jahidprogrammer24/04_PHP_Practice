<?php
session_start();
echo "<h2>Following session variables read:";

foreach($_SESSION as $key => $val){
    echo "<h3>".$key."=>".$val."</h3>";
};
 echo "<h3> First Name:".$_REQUEST['first_name']."<br>".
        "Last Name:".$_REQUEST['last_name']."<br>"."</h3>";

?>