<?php

echo "FOR LOOP";
echo "<br>";

for($i=1;$i<=5;$i++){
    echo $i;
    echo "<br>";
}


echo "WHILE LOOP";
echo "<br>";
$i=1;
while($i<=5){
    echo $i++;
    echo "<br>";
}

echo "DO WHILE";
echo "<br>";
$i=1;
do{
    echo $i++;
    echo "<br>";
}while($i<=5);

echo "FOR EACH";
echo "<br>";
$skills = ["PHP", "Java", "JavaScript"];
var_dump($skills);
echo "<br>";

foreach($skills as $skill){
    echo $skill;
    echo "<br>"; 
}

?>