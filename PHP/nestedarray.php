<?php

$employee = [
    "name"=>"Vijay",
    "age"=>25
];

foreach($employee as $key => $value){
    echo $key." : ".$value;
    echo "<br>";
}

$employee["address"]=[
    "city"=>"chennai",
    "state"=>"Tamil nadu"
];

var_dump($employee);
echo "<br>";

foreach($employee["address"] as $key=> $value){
echo $key." : ".$value;
echo "<br>";
}

?>