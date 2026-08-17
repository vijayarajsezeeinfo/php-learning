<?php
echo "INTEGER";
echo "<br>";

$a=20;
$b=6;

echo $a;
echo "<br>";
echo $b;
echo "<br>";

echo $a+$b;
echo "<br>";

echo $a-$b;
echo "<br>";

echo $a*$b;
echo "<br>";

echo $a/$b;
echo "<br>";

echo $a%$b;
echo "<br>";

echo "FLOAT";
echo "<br>";

$price = 99.50;
$quantity = 3;
echo "price: ". $price;
echo "<br>";
echo "quantity: ". $quantity;
echo "<br>";

$totalamount = $price*$quantity;
echo "Total amount to Pay :".$totalamount;
echo "<br>";

// 1. round
echo "Rounded Price : ".round($price);
echo "<br>";

$moredecimal = 99.999999;
echo $moredecimal;
echo "<br>";
echo "Rouding only 2 degits after point : ".round($moredecimal,2);
echo "<br>";

$moredecimal2 = 99.11111;
echo $moredecimal2;
echo "<br>";
echo "Rouding only 2 degits after point : ".round($moredecimal2,2);
echo "<br>";


// 2. ceil
$value = 10.001;
echo $value;
echo "<br>";
echo "Ceil: ".ceil($value);
echo "<br>";

// 3. floor
echo "Floor: ".floor($value);
echo "<br>";

// 4. abs
//entha number ah irunthaalum positive number ah maathum
echo abs(-100);
echo "<br>";
echo abs(100);
echo "<br>";

// 5. min/max

$a = 10;
$b = 20;
$c = 5;

echo "a: ".$a.", b: ".$b.", c: ".$c;
echo "<br>";
echo "MAX : ".max($a,$b,$c);
echo "<br>";
echo "MIN : ".min($a,$b,$c);
echo "<br>";



// ==
//!=
//===
//!==
//>, < , >=, <=
