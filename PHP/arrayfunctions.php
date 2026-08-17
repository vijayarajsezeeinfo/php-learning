<?php

$numbers = [1,2,3,4,5];
echo "numbers are ".implode(", ",$numbers);
echo "<br>";

echo "===========================";
echo "<br>";

echo "array_map";
echo "<br>";
$result = array_map(function($number){
    return $number*2;
}, $numbers);
print_r($result);
echo "<br>";

echo "===========================";
echo "<br>";

echo "array_filter";
echo "<br>";
$result2 = array_filter($numbers, function($number){
    return $number >=3;
});
print_r($result2);
echo "<br>";

echo "===========================";
echo "<br>";

echo "array_reduce";
echo "<br>";
$result3 = array_reduce($numbers, function($carry, $number){
    return $carry*$number;
},1);
print_r($result3);
echo "<br>";

echo "===========================";
echo "<br>";

echo "usort";
echo "<br>";
$numbers2=  [40, 10, 30, 20, 50];
echo "numbers2 are ".implode(", ",$numbers2);
echo "<br>";
usort($numbers2, function($a,$b){
  return $a<=>$b;
});
echo "after sorting (ASCENDING) numbers2 are ".implode(", ",$numbers2);
echo "<br>";

usort($numbers2, function($a,$b){
  return $b<=>$a;
});
echo "after sorting (DESCENDING) numbers2 are ".implode(", ",$numbers2);
echo "<br>";

echo "===========================";
echo "<br>";

?>