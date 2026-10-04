<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php
    //PHP GET & POST
    /*
GET:
In the GET method, the data sent by the user is attached to the URL and goes to the server.

GET Method- Key Characteristics (Very Important)
In the GET method, data is visible in the URL. The submitted data appears in the browser's address bar and can also be stored in server logs.

The GET method has a data size limitation. The maximum lenght of data that can be sent is approximately 1024 to 2048 chacacters, depending on the browser and server configuration.

The GET method not suitable for sending sensitive information. It should never be used to send passwerds, OTPs, or secret heys because the data is exposed in the URL

Binary data cannot be sent using the GET method. Files such as images, PDF files, and Word documents cannot be transmitted through this method.
*/
    /*if (isset($_GET["name"]) && isset($_GET["age"])) {
    echo "Welcome " . htmlspecialchars($_GET['name']) . "<br/>";
    echo "You are" . htmlspecialchars($_GET['age']) . " years old";
exit();
 }
*/

    /*
The POST method is used to send data to the server throught the HTTP request body instead of the URL. The data visible in the browser's address bar. There is no fixed data size limit, as it depends on the post_max_size setting in php.ini. The POST method supports sending binary data such as images and files. It is more secure than the GET method, and using HTTPS makes it even safer. In PHP, POST data is accessed using the $_POST superglobal array.


*/
    /*if (isset($_POST["name"]) && isset($_POST["age"])) {
    echo "Welcome " . htmlspecialchars($_POST['name']) . "<br/>";
    echo "You are" . htmlspecialchars($_POST['age']) . " years old";
exit();
 }
*/
    if (isset($_POST["name"]) && isset($_POST["age"])) {
        if (preg_match("/[^A-Za-z'-]/", $_POST['name'])) {
            die("invalid name and name should be alpha");
        }
        echo "Welcome" . htmlspecialchars($_POST['name']) . "<br/>";
        echo "Welcome" . htmlspecialchars($_POST['age']) . "<br/>";
        exit();
    }

    ?>
    <form action='<?php echo htmlspecialchars($_SERVER['PHP_SELF']) ?>' method='POST'>
        Name:<input type="text" name="name" />
        Age:<input type="text" name="age" />
        <input type="submit">
    </form>

</body>

</html>