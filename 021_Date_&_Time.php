<?php
//Datt & time
//timezone
date_default_timezone_set('asia/Dhaka');

//time()
print time(); //1770091641

//getdate()
$date_array = getdate();

foreach ($date_array as $key => $val) {
    print "$key => $val" . "</br>";
}

$formated_date = "Today's date ";
$formated_date .= $date_array["mday"] . "-";
$formated_date .= $date_array["mon"] . "-";
$formated_date .= $date_array["year"] . "</br>";

print $formated_date; //Today's date 3-2-2026

//date()
print date("m/d/y h.i:s\n", time()) . PHP_EOL; //02/03/26 12.36:14
print "Today is ";
print date("F Y, \a\\t g.i a", time());

echo date("d/m/Y"); //03/02/2026
echo "\n";
echo date("l, F j, Y"); // Tuesday, February 3, 2026

//strtotime()
$date = "2025-02-17";
$timestamp = strtotime($date);
echo $timestamp; //1739746800

date_default_timezone_set('asia/Dhaka');
