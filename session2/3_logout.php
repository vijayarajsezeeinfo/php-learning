<?php

session_start();
session_destroy();
//session_unset();
header("Location: 1_login.php");
exit;

?>