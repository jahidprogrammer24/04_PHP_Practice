
/*PHP SESSION
Session is a super global variable that stores the usable data of the corrent session.
A sessin startS when a user loges in a server and ends when he logs out.
the session is stored in a temporary file on the server. the registered variables and values are stored here. the data can be obtained on all pages when a user visits them.
the session is sterted with session_start() which is written before all the scrip.
*/
/*the session function list:
01. session_destroy
02. session_unset
03. session_id
04. session_name
05. session_regenerate_id
06. session_status
07. session_commit
08. session_abort
09. session_create_id
10. session_decode
11. session_encode
12. session_gc
13. session_reset
14. session_save_path
15. session_write_close
16. session_cache_expire
17. session_cache_limiter
*/

//managing user data using session
<html>
    <head>
        <title>PHP Sessions: How to use $_SESSION to manage user data</title>
        <meta name="keywords" content="PHP Sessions, PHP $_SESSION Manage user data in PHP,
        PHP session_alart, session variables, PHP session tutorial">
    </head>
    <body>
        <form action ="<?php echo $_SERVER['PHP_SELF'];?>" method="post">
            <h3>User's ID:<input type="text" name="ID"/></h3>
            <h3>Your name:<input type="text" name="name"/></h3>
            <h3>Enter Age:<input type="text" name="age"/></h3>
            <input type="submit" value="Submit"/>
        </form>
        <?php session_start();

        if($_SERVER['REQUEST_METHOD']=="POST"){
            $_SESSION['UserID']= $_POST['ID'];
            $_SESSION['Name']= $_POST['name'];
            $_SESSION['age']= $_POST['age'];
        }
        echo "Following Session Variables created:"."<br>";

        foreach($_SESSION as $key => $val){
            echo "<h3>".$key."=>".$val."</h3>";
        }
        
        echo "<br/>".'<a href="hello.php">Click Here</a>';
        ?>
    </body>
</html>


