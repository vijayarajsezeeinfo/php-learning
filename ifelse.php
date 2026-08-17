<?php

$mark = 75;
echo $mark;
echo "<br>";

if($mark>=95){
    echo "A";
}elseif($mark>=75){
    echo "B";
}elseif($mark>=50){
    echo "C";
}elseif($mark<50 && $mark<0){
    echo "Negative";
}else{
    echo "Fail";
}
echo "<br>";

$count = 5;
$count++;
echo $count;

$count = 5;

echo ++$count;
echo "<br>";
echo $count;

?>

//LOGICAL OPERATORS
// &&, ||, !
