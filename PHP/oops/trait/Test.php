<?php

namespace App;

require_once __DIR__ . "/Logger.php";
require_once __DIR__ . "/Employee.php";

$employee = new Employee("Vijay");

echo $employee->getName();
echo "<br>";

echo $employee->log("Employee created");