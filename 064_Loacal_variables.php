<?php
//Local variable
//A local variable is defined inside a function, when the function finishes, the variable is also destroyed. this variable dose not work outside a function
//in function
$x = 4;
function assignx()
{
    $x = 0; //local variable
    echo "\$x inside function is " . $x;
}
assignx(); //
echo "\$x outside of function is " . $x;

//in loop execution
function countToThree()
{
    for ($i = 1; $i <= 3; $i++) {
        echo $i . " ";
    }
};
countToThree();

//in conditional statement
function checkAge()
{
    $age = 12;

    if ($age >= 18) {
        echo "You are adult";
    } else {
        echo "You are a minor";
    }
}
checkAge();
/*Why use local variables:
01. security: no one can access the variable from outside a function. so it cannot be modified from outside.
02. memory management: after the function finishes executing the variable is removed from memory. wich reduce the server memory load.
03. avoid conflict: It avoids naming confilicts in large projects when using the same variable name in different functions. 

remember!
01. A local variable is always defined in function.
02. It exists only while the function is running.
03. It cannot be accessed outside the function.
04. the same variable name can be used in different functions.
*/