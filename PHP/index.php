<?php
echo "Hello PHP";
echo "<br>";

$name = "vijay";
$age=25;
$city="Bangalore";
$salary=50000.00;
$isWorking=true;
$skills=["PHP","JavaScript","HTML","CSS"];


echo $name;
echo "<br>";
echo $age;
echo "<br>";
echo $city;
echo "<br>";
echo $salary;
echo "<br>";
echo $isWorking;
echo "<br>";
var_dump($isWorking);
echo "<br>";


echo "Name : ".$name."<br>";
echo "Age : ".$age."<br>";
echo "City : ".$city."<br>";
echo "Salary : ".$salary."<br>";
echo "Is Working : ".$isWorking."<br>";

echo "My name is ".$name." and my age is ".$age."<br>";
echo "<br>";
echo "My skills are ".implode(", ",$skills)."<br>";
echo "<br>";
echo "Skill 1 :".$skills[0];
echo "<br>";
echo "Skill 2 :".$skills[1];
echo "<br>";
echo "Skill 3 :".$skills[2];
echo "<br>";
echo "Skill 4 :".$skills[3];
echo "<br>";
