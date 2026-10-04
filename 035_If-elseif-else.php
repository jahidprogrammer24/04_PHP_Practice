<?php
//If-else Statement
/*
01. if,  for one condition
02. if...else, for two true/false conditions
03. if...elseif....else, for multiple conditions
04. nested if, for multi-level decisions
05. endif, alternative syntax for worrking with HTML
*/

//if-else
$a = 10;
$b = 20;

if ($a > $b) {
    echo "a is bigger then b";
} else {
    echo "a is not bigger then b";
}

$d = date('D');

if ($d === "Fri") {
    echo "Have a nice weekend" . "<br>";
} else {
    echo "Have a nice day" . "<br>";
}

//Alternative Syntax :endif
$d = date('D');

if ($d == "Fri"): ?>

    <h2> Have a nice weeken! </h2>

<?php else: ?>
    <h2> Have a nice day!</h2>
<?php endif; ?>


<?php
//else if
$d = date("D");

if ($d == "Fri") {
    echo "Have a nice weekend" . "<br>";
} elseif ($d == "Sun") {
    echo "Have a nice Sunday" . "<br>";
} elseif ($d == "Mon") {
    echo "Have a nice monday" . "<br>";
} else {
    echo "Have a nice day!" . "<br>";
}

//nested if
$x = 15;

if ($x % 2 == 0) {
    if ($x % 3 == 0) {
        echo "<h3>$x is divisible by 2 and 3</h2>";
    } else {
        echo "<h3>$x is divisible by 2 but not divisible by 3 ";
    }
} elseif ($x % 3 == 0) {
    echo "<h3> $x is divisible by 3 but not divisible by 2";
} else {
    echo "<h3> $x is not divisible by 3 and not divisible by 2";
}
?>