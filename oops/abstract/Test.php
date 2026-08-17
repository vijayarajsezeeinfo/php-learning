<?php

require_once "Employee.php";
require_once "Manager.php";

use App\Models\abstract\Employee;
use App\Models\abstract\Manager;

$manager = new Manager("Vijay", 25, 100000.00, "Management");

echo $manager->calculateSalary();


?>
