<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $username=trim($_POST["username"]);
    $password=trim($_POST["password"]);
    if($username=="Vijay" && $password=="123"){
        $_SESSION["username"]=$username;
        $_SESSION["role"]="Developer";
        $_SESSION["logged_in"]=true;

        header("Location: 2_home.php");
        exit;
    }else{
        echo "Invalid Username and Password";
    }
}


?>

<form method="POST">
    <input type="text" name="username" placeholder="Enter Username">
    <input type="text" name="password" placeholder="Enter Password">
    <input type="submit" value="Login">
</form>