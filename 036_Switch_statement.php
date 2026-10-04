<?php
//Swith Statement
/*
The switch statement is used in PHP when a variable needs to be compared with multiple values and different code need to be executed for eace value
*/
// using if....elseif....else
$x = 1;
if ($x == 0) {
    echo "x equalse 0";
} elseif ($x == 1) {
    echo " x equalse 1";
} elseif ($x == 2) {
    echo "$x eaualse 2";
}

// using switch...case
$x = 2;
switch ($x) {
    case 0:
        echo "x is equalse 0";
        break;

    case 1:
        echo "x is equalse 1";
        break;

    case 2:
        echo "x is equalse 2";
}

/*
How switch works:

    1. The expression inside the switch is evaluated once.

    02. Then it is compared with the value of each case.

    03. The code will start from the point where the case is matched.

    04> If a brea is encountered, the switch will end.
*/

//Using default case
$x = 10;
switch ($x) {
    case 0:
    case 1:
    case 2:
        echo "x between 0 and 2";
        break;

    default:
        echo " x is less then 0 or greater then 2";
}

//switch-endwitch used in conjunction with HTML with alternative syntax:
$x = 2;
?>
<!DOCTYPE html>

<body>

    <?php
    $x = 2;
    switch ($x):
        case 0:
            echo "x is equalse 0";
            break;

        case 1:
            echo "x is equalse 1";
            break;

        case 2:
            echo "x is equalse 2";
    endswitch;
    ?>
</body>

</html>


<?php
//Showinh current date
$d = date("D");

switch ($d) {
    case "Mon":
        echo "Today is Monday";
        break;

    case "Tue":
        echo "Today is Tuesday";
        break;

    case "Wed":
        echo "Today is Wednesday";
        break;

    case "Thu":
        echo "Today is Thursday";
        break;

    case "Fri":
        echo "Today is Friday";
        break;

    case "sat":
        echo "Today is Saturday";
        break;

    case "Sun":
        echo "Today is Sunday";
        break;

    case "Mon":
        echo "Today is Monday";
        break;

    default:
        echo "Wonder which day is this?";
}

//switch with string
$role = "editor";

switch ($role) {
    case "admin":
        echo "Welcome, Admin! You have full access";
        break;

    case "editor":
        echo "Welcome, Editor! You can edit content";
        break;

    case "admin":
        echo "Welcome, Admin! You have full access";
        break;

    case "subscriber":
        echo "Hi, Subscriber! You can read articles";
        break;

    default:
        echo "Unknown role. Please contact support";
}

//Arithmetic Operation
$operation = "-";
$a = 10;
$b = 20;


switch ($operation) {
    case "+":
        echo "Addition: " . ($a + $b);
        break;

    case "-":
        echo "Subtraction: " . ($a - $b);
        break;

    case "*":
        echo "Multiplication: " . ($a * $b);
        break;

    case "/":
        echo "Division: " . ($a / $b);
        break;


    default:
        echo "Invalid operation";
}

//Nested Switch
$continent = "Asia";
$country = "India";

switch ($continent) {
    case "Asia":
        switch ($cuontry) {
            case "India":
                echo "You are in India";
                break;

            case "Japan":
                echo "You are in Japan";
                break;

            default:
                echo "Country not listed in asia.";
        };
    case "Europe":
        switch ($cuontry) {
            case "Germany":
                echo "You are in Germany";
                break;

            case "France":
                echo "You are in France";
                break;

            default:
                echo "Country not listed in Europe.";
        }
}

?>