<?php
require_once "Employee.php";
require_once "Manager.php";

use App\Models\Employee;
use App\Models\Manager;

$employee = new Employee();
var_dump($employee->getName());
echo "<br>";

$employee2 = new Employee("Prakash", 25, 50000.0, "Trichy");
print_r($employee2->getName());
echo "<br>";

$employee2->setName("Prakash Raj") ;
echo "After changing name";
echo "<br>";
print_r($employee2->getName());
echo "<br>";

$manager = new Manager("Vijay", 25, 75000.0, "chennai","IT");
print_r("Manager department is ".$manager->getDepartment());
echo "<br>";

?>