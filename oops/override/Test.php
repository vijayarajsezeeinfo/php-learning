<?php

require_once "Employee.php";
require_once "Manager.php";
use App\Models\Override\Employee;
use App\Models\Override\Manager;

$employee = new Employee("Prakash", 25, 50000.00);
$manager = new Manager("Vijay", 25, 100000.00, "Management");

$greet = $employee->greet();
$greet2 = $manager->greet();

echo $greet;
echo "<br>";
echo $greet2;

?>