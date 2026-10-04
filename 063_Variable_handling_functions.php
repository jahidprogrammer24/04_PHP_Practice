<?php
// Variable Handling functions
//some important variable handling list are below:
//01. boolval()
$money = 500.00;
$debt = 1;
echo "Has money:" . var_export(boolval($money), true) . "<br>"; //true
echo "Has debt:" . var_export(boolval($debt), true) . "<br>";

//02. debug_zval-dump()
$var1 = "Hello TutorialsPoint";
$var2 = $var1;
debug_zval_dump($var1); //string(20) "Hello TutorialsPoint" interned

//03. floatval() or doubleval()
$priceString = "49.99USD";
$floatPrice = floatval($priceString);

echo $floatPrice; //49.99
var_dump($floatPrice); //float(49.99)

$var1 = "123.50abc";
$var2 = true;
$var3 = "Hello";
echo floatval($var1); //123.5
echo floatval($var2); //1
echo floatval($var3); //0


//04. empty()
$username = "";
$count = 0;
$isActive = false;
$email = "test@example.com";

if (empty($username)) {
    echo "User Name fild is empty";
}

if (empty($count)) {
    echo "count is 0";
};

if (empty($isActive)) {
    echo " Active status is empty";
};

if (!empty($email)) {
    echo "email is keepd";
};

//05. get_defined_vars()
function test()
{
    $a = 1;
    $b = 'hello';
    print_r(get_defined_vars());
}
test(); //Array ( [a] => 1 [b] => hello )
$name = "Jahidul islam";
$age = 28;
$city = "faridpur";
$vars = get_defined_vars();
echo "Defined variables: <br>";
foreach ($vars as $key => $value) {
    if (!is_array($value)) {
        echo "$key= $value <br>";
    }
}
//06. get_resource_id() and get_resource_type()
$file = fopen("test.txt", "w");
echo "Resource ID:" . get_resource_id($file) . "<br>"; //3
echo "Resource Type:" . get_resource_type($file) . "<br>"; //stream
fclose($file);

//07. gettype()
$price = 22.23;
$name = "Jahidul";
$isLoggedIn = true;
$subjects = ["Math", "English"];
class Student {}
$s1 = new Student();
$data = null;

echo gettype($price) . "<br>"; //double
echo gettype($name) . "<br>"; //string
echo gettype($isLoggedIn) . "<br>"; //boolean
echo gettype($subjects) . "<br>"; //array
echo gettype($data) . "<br>"; //NULL

//08. intval()
$input = "28 years old";
echo "Age:" . intval($input); //28
$hex = "Ox1A"; //hexadecimal
echo "Hex to int:" . intval($hex, 16); //0
//09. is_array()
$students = ["Jahid", "Rahim", "karim"];
$teacher = "Mr. Mahimud";

if (is_array($students)) {
    echo "Students list:" . implode(",", $students); //Students list:Jahid,Rahim,karim
}

if (!is_array($teacher)) {
    echo "Teacher is not in list"; //Teacher is not in list
}
//10. is_bool()
$isLoggedIn = true;
$userInput = "true";

if (is_bool($isLoggedIn)) {
    echo "Login status is boolean"; //Login status is boolean
}
if (!is_bool($userInput)) {
    echo "User input is not boolean it's a string"; //User input is not boolean it's a string
}
//11. is_callable()
$greet = function ($name) {
    return "Hello, $name!";
};
if (is_callable($greet)) {
    echo $greet("Jahidul") . "<br>"; //Hello, Jahidul!
}
//12. is_float(), is_double(), is_real()
$tempareture = 36.6;
$age = 28;
if (is_float($tempareture)) {
    echo "Tempareture: $tempareture (float)" . "<br>";
}
if (!is_float($age)) {
    echo "Age: $age is not float" . "<br>";
}
//13. is_int(), is_integer(), is_long() 
$marks = 85;
$grade = "A+";
if (is_int($marks)) {
    echo "Marks: $marks is an integer" . "<br>";
}
if (!is_int($grade)) {
    echo "Grade: $grade is not an integer" . "<br>";
}
//14. is_iterable()
$subjects = ["Math", "English", "Science"];
$single = "Math";
if (is_iterable($subjects)) {
    foreach ($subjects as $subject) {
        echo "Subject: $subject" . "<br>";
    }
}
if (!is_iterable($single)) {
    echo "Subject: $single" . "<br>";
}
//15. is_null()
$loggedInUser = null;
if (is_null($loggedInUser)) {
    echo " any user don't loggin" . "<br>";
}
//16. is_numeric()
$input1 = "123";
$input2 = "12.0";
$input3 = "12abc";
echo is_numeric($input1) ? "$input1 is numeric" . "<br>" : "$input1 is not numeric" . "<br>";
echo is_numeric($input2) ? "$input2 is numeric" . "<br>" : "$input2 is not numeric" . "<br>";
echo is_numeric($input3) ? "$input3 is numeric" . "<br>" : "$input3 is not numeric" . "<br>";

//17. is_object()
class Car
{
    public string $brand;
    public function __construct(string $brand)
    {
        $this->brand = $brand;
    }
}
$myCar = new Car("Toyota");
$myText = "Toyota";

if (is_object($myCar)) {
    echo "myCar is an object, brand:" . $myCar->brand . "<br>";
}
if (!is_object($myText)) {
    echo "myText is not an object" . "<br>";
}

//18. is_ resource()
$file = fopen("test.txt", "w");
if (is_resource($file)) {
    echo "File successfully opened as resource" . "<br>";
    fclose($file);
}
//19. is_scalar()
$id = 5;
$price = 9.99;
$title = "PHP";
$inStock = true;
$tags = ["php", "progrmming"];
echo is_scalar($id) ? "id is scalar<br>" : "id is not scalar"; //id is scalar
echo is_scalar($price) ? "price is scalar" : "price is not scalar<br>";
echo is_scalar($title) ? "title is scalar" : "title is not scalar";
echo is_scalar($inStock) ? "inStock is scalar" : "inStock is not scalar<br>";
echo is_scalar($tags) ? "tags is scalar" : "tags is not scalar<br>";

//20. is_string()
$firstname = "Jahidul Islam";
$phone = 01312146423;
if (is_string($firstname)) {
    echo "Name is a string: $firstname <br>";
}
if (!is_string($phone)) {
    echo "Phone number is not a string <br>";
}
//21. isset()
$_POST['username'] = "Jahidul";
if (isset($_POST['username'])) {
    echo "Username:" . $_POST['username'] . "<br>";
} else {
    echo "give username ";
}
//22. print_r()
$student = [
    "name" => "Jahidul",
    "age" => 28,
    "city" => "faridpur"
];
echo "<pre>";
print_r($student);
echo "</pre>";

//23. serialize()
$setting = ["theme" => "dark", "language" => "bn", "font" => 14];
$serialized = serialize($setting);
echo "Serialized:" . $serialized . "<br>";

$restored = unserialize($serialized);
echo "Thime:" . $restored['theme'] . "<br>";

//24. settype()
$input = "32";
echo "Before:" . gettype($input) . "= $input<br>";
settype($input, "integer");
echo "After:" . gettype($input) . "= $input";

//25. strval()
$totalMarks = 450;
$message = "Your full mars is:" . strval($totalMarks);
echo $message;
//26. unset()
$password = "p123";
echo "Password set: $password";
unset($password);
echo isset($password) ? "Password is set" : "password is removed";
//27. var_dump()
$product = [
    "name" => "Laptop",
    "price" => 55000.00,
    "inStoc" => true,
    "quality" => 10

];
echo "<pre>";
var_dump($product);
//28.var_export()
$config = [
    "host" => "localhost",
    "database" => "mydb",
    "port" => 3306
];
echo "<pre>";
var_export($config);
echo "<pre>";
