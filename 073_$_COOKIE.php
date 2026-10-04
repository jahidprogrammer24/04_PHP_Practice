<?php
//PHP - $_COOKIE
/*
$_COOCIE is a superglobal variable that stores the values sent with an HTTP request.

A cookie is a small text file that is stored on the client (browser) for traking user activities, user authentication, remembering a  user's interest in themes and so on others, checking a user's interest in a product on a shopping site. and for showing personalized greetings. 

important:  the setcookie() function must be called before any HTML Output. because cookies are send via HTTP headers, and the headers must always be sent first.

*/
//the setcookie is used to sending cookie to the client. setcookie(name, value, expire, path, domain, security)

if(isset($_COOKIE['username'])){
    echo "<h2>Cookie username alredy set:".$_COOKIE['username']."<h2>";
}else{
    setcookie("username","Jahidul Islam");
    echo "<h2>Cookie username is now set.</h2>";
}
// the  code below reads cookie the next time the client logs in
$arr = $_COOKIE;
foreach($arr as $key => $val){
    echo "<h2>$key => $val</h2>";
}
//The way of remove a cookie
setcookie("username","",time()-3600);
echo "<h2>Cookie usernames has been removed</h2>";
// setting cookies using array notation to store multiple realated cookies under different indexes of a single named cookie.
setcookie("user[three]","Gust");
setcookie("user[two]","user");
setcookie("user[one]", "admin");

echo $_COOKIE['user']['one'];
// path"/"- the cookie can be read from all folders of site
setcookie('username', "Jahidul", time()+3600, "/");
// path "/admin"- the cookie can be read only from /admin and from subfolders.
setcookie("admin_token", "xyz123", time()+3600, "/admin");

//domain-decides which domain and subdomain the cookie will be shared with.
setcookie("username", "Jahidul", time()+3600, "/","example.com");
setcookie("username", "Jahidul", time()+3600, "/",".example.com");// for sub domin also

//secure = true- the cookie will only be sent over an HTTPS connection. it won't be sent over an HTTP connection
setcookie("session_id", "abc123", time()+ 3600, "/","",true);







?>