<?php

require "vendor/autoload.php";

use static\Model\Employee;

echo Employee::$company;
echo "<br>";
echo Employee::greet();
?>