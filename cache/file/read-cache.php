<?php

$data =file_get_contents("employee.json");
echo $data;
echo "<br>";
print_r (json_decode($data, true));
?>