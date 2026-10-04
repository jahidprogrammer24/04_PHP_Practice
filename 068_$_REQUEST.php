<?php
//PHP $_REQUEST
/*
$_REQUEST is a supurglobal variable that can catch data sent through three ways:
01. GET, 02. POST, 03. COOKIE. so we don't need to think about which place the data came from.
*/
//using $_REQUEST with get method
?>
<html>
    <body>
        <?php
        if(isset($_REQUEST['first_name'])){
            echo "<h3> First Name:".$_REQUEST['first_name']."<br>".
        "Last Name:".$_REQUEST['last_name']."<br>"."</h3>";
        }
        
        
        ?>
    </body>
</html>
<?php
//using $_REQUEST with post method
?>

<html>
    <body>
        <form action="hello.php" method="post">
            First Name:<input type="text" name="first_name"/><br/>

            Last Name: <input type="text" name="last_name"/>
            <input type="submit" value="Submit"/>
        </form>
    </body>
</html>

<?php
//form and php sending only one file
?>
<html>
    <body>
        <form action="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <p>First name:<input type="text" name="first_name"/></p>

            <p>Last name:<input type="text" name="last_name"/></p>

            <input type="submit" value="Submit"/>

        </form> 

    <?php
    if($_SERVER['REQUEST_METHOD']=="POST")
       echo "<h3> First name:".$_REQUEST['first_name']."<br>"."Last name:".$_REQUEST['last_name']."</h3>";
    ?>
    </body>
</html>