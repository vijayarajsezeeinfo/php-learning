<?php

$text1="Vijay";
$text2="raj";

// 1. Concatination
echo $text1."a".$text2;
echo "<br>";
echo  $text1.$text2;
echo "<br>";

// 2. Variable Interpolation
echo "I am $text1 $text2";
echo "<br>";

// 3. strlen
echo strlen($text1);
echo "<br>";

// 4. strtoupper
echo strtoupper($text1);
echo "<br>";

// 5. strtolower
echo strtolower($text1);
echo "<br>";

// 6. ucfirst
$ucfirst= ucfirst($text1);
echo $ucfirst;
echo "<br>";


// 7. ucwords
$textwords = "     i am ironman ";
var_dump($textwords);
echo "<br>";
$ucwords= ucwords($textwords);
echo $ucwords;
echo "<br>";

// 8. trim
echo trim($textwords);
echo "<br>";
var_dump(trim($textwords));
echo "<br>";

// 9. strpos
echo strpos($textwords, "a");
echo "<br>";
echo strpos($textwords, "am");
echo "<br>";

// 10. str_replace
$text4 = "Hello Vijay";
echo "Before replacing : $text4"." <br>";
echo "After replacing : ".str_replace("Vijay","Raj",$text4);
echo "<br>";

// 11. substr
$text5 = "birmingham";
echo "before substring : $text5";
echo "<br>";
echo "after substring : ".substr($text5,2,7);
echo "<br>";
echo "substring with only starting point: ".substr($text5,2);
echo "<br>";


// 12. explode
$skills = "PHP,Java,JavaScript";
$result = explode(",",$skills);
var_dump($result);
echo "<br>";
echo implode(", ",$result);
echo "<br>";


// 13. implode
echo implode(", ",$result);
echo "<br>";


// 14. string comparison
$name ="Vijay";

if($name=="Vijay"){
    echo "correct";
}else{
    echo "incorrect";
}
echo "<br>";

// 15. string concatination with variables
echo "Name : ".$text1." ".$text2;
echo "<br>";