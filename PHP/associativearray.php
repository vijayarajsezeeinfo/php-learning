<?php

echo "Associative array";
echo "<br>";
$employee =[
   "name"=>"Vijay",
   "age"=>25,
   "salary"=>100000.00,
   "city"=>"Chennai",
];

var_dump($employee);
echo "<br>";

foreach($employee as $value){
    echo $value;
    echo "<br>";
}

foreach($employee as $key => $value){
    echo $key." : ".$value;
    echo "<br>";
}

echo $employee["name"];
echo "<br>";

//SET
$employee["skills"] = ["PHP","Java", "JavaScript"];
var_dump($employee);
echo "<br>";

//UNSET
echo "Un setting skills";
echo "<br>";
unset($employee["skills"]);
var_dump($employee);

?>