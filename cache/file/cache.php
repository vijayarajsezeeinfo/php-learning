<?php

$data = [
    "name"=>"Vijay",
    "role"=>"Developer"
];

file_put_contents("employee.json", json_encode($data));
echo "Data stored in File cache";

?>