<?php

if(isset($_COOKIE["username"])){
$username = $_COOKIE["username"];
echo "Welcome $username";
}else{
echo "Please LOGIN";
}


?>