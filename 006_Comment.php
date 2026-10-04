<?php
//php comments
//php allows two types of comments
//01.single-line comments
//02.multi-line comments

//You can use single-line comments in two ways:
//01. Using // double slash [This is used more because is modern and more readable]
$rates = 100;
$hours = 173;
$payout = $rates * $hours; //payout calculation
//02. Using # (hash) symbol
$title = 'PHP comment';

//You can use multi-line comment when you need to write comment in multiple lines, They start with /* and end with */
/*This is an example of a multi-line comment, which can span multiple lines
*/
$my_name = 'Jahidu Islam';

//You should write meaningful comments by following the guidelines below
//01.The variable name should be descriptive
$is_completed = true; //এর পরিবর্তে সরাসরি
$ic = true; //is completed ব্যবহার করা ভালো
//02.Don't write what the code does; explain why it is needed
//Website name is important for my...
$website_name = 'sobnom';
//03. Keep comments short and clear;




require 'index.view.php';
