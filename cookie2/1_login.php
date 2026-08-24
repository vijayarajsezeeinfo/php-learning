<?php

if($_SERVER["REQUEST_METHOD"]==="POST"){
    $username=$_POST["username"];
    setCookie("username",$username,time()+3600);
    echo "Cookie stored successfully";
}

?>

<form method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="submit" value="Login">
</form>