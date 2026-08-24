<?php

session_start();

if(!isset($_SESSION["logged_in"])){
    header("Location: 1_login.php");
    exit;
}

echo "Welcome ".$_SESSION["username"];
echo "<br>";
echo "Role: ".$_SESSION["role"];
echo "<br><br>";
echo "<a href=3_logout.php>Logout</a>";

?>