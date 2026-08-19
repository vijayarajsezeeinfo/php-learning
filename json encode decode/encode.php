<?php

$employee = [
    "name"=>"Vicky",
    "age"=>25,
    "salary"=>50000.00
];

print_r($employee);
echo "<br>";

$json = json_encode($employee);
echo $json;
echo "<br>";

print_r (json_decode($json));

?>