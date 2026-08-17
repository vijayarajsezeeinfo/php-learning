<?php
//__construct,__destruct,__toString,__invoke,__clone, __get, __set, __isset,__unset
require "vendor/autoload.php";
use MagicMethods\Model\Employee;

$employee = new Employee("Vicky", 25);

//internally it will call __toString()
echo $employee;
echo "<br>";

$employee2=new Employee("Venky", 25);
//internally it will call __invoke()
echo $employee2();
echo "<br>";

$employee3 = new Employee("Micky", 25);
//internally it will call __clone()
$employee3 = clone $employee;
echo "<br>";
echo $employee3;
echo "<br>";

// internally it will call __sleep()
$data = serialize($employee);
echo "<br>";
echo "Serialized data: " . $data;
echo "<br>";


// internally it will call __wakeup()
$employee5 = unserialize($data);
echo "<br>";
echo $employee5;
echo "<br>";
?>