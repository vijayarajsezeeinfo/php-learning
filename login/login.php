<?php

session_start();

$username = $_POST["username"];
$password = $_POST["password"];

if(trim($username)==="Vijay" && trim($password)==="123"){
    $_SESSION["username"]=trim($username);
    echo "LOGIN successful";
}else{
    echo "Invalid username or password";

}

?>