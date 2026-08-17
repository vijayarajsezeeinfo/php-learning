<?php

echo "ARRAY";
echo "<br>";

$skills = ["PHP", "Java", "JavaScript"];
var_dump($skills);
echo "<br>";

echo "Skills are ".implode(", ",$skills);
echo "<br>";

// 1. COUNT 
echo "Count of elements : ".count($skills);
echo "<br>";

// 2. IN ARRAY
echo in_array("Java",$skills)? "exists":"notexists";
echo "<br>";

// 3. PUSH -> last la add pannum
array_push($skills,"Python");
echo "After pushing, Skills are ".implode(", ",$skills);
echo "<br>";

// 4. POP -> last la remove pannum
array_pop($skills);
echo "After popping, skills are ".implode(", ",$skills);
echo "<br>";

// 5. SHIFT -> first la remove pannum
array_shift($skills);
echo "After shiting, skills are ".implode(", ",$skills);
echo "<br>";

// 6. UNSHIFTING -> first la add pannum
array_unshift($skills,"PHP");
echo "After unshifting, skills are ".implode(", ", $skills);
echo "<br>";    

// 7. UNSET
$numbers = [1,2,3,4,5];
echo "numbers are ".implode(", ",$numbers);
echo "<br>";
unset($numbers[4]);
echo "numbers are ".implode(", ",$numbers);
?>