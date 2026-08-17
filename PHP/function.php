<?php

echo "Function";
echo "<br>";

function greet($name){
    echo "Hello ".$name;
    echo "<br>";
}
greet("Vijay");

function add($a,$b){
    echo $a+$b;
    echo "<br>";
}
add(5,5);

function addition($a,$b){
    return $a+$b;
}
$result = addition(5,5);
echo $result;
echo "<br>";

function hello($name = "Guest"){
    return "Hello $name";
}

$hello = hello("Vijay");
echo $hello;
echo "<br>";
$hello = hello();
echo $hello;
echo "<br>";

function calculate(float $price){
    return $price;
}

$cal=calculate(100.50);
echo $cal;
echo "<br>";

function checkStatus(bool $status){
    return $status;
}
$status=checkStatus(true);
echo $status;
echo "<br>";

//mentioning return type using : int
function adder(int $a, int $b): int {
    return $a + $b;
}
$result = adder(5,5);
echo $result;
echo "<br>";

function isAdult(int $age): bool{
    return $age >= 18;
}

$adult = isAdult(18);
echo $adult;
echo "<br>";

//================================================
echo "==============================================================";
echo "<br>";

// 1. Normal Function
    function welcome(string $name):string{
        return "Welcome $name";
    }
    echo "normal function";
    echo "<br>";
    echo welcome("Vijay");
    echo "<br>";

echo "==============================================================";
echo "<br>";

//2. Function with default parameters
    function welcome2(string $name="Guest"):string{
        return "Welcome $name";
    }
    echo "function with default parameters";
    echo "<br>";
    echo welcome2();
    echo "<br>";

echo "==============================================================";
echo "<br>";

//3. Function with multiple parameters
     function welcome3(string $text1, string $text2):string{
      return $text1." ".$text2;
     }

    echo "function with multiple parameters";
    echo "<br>";
    echo welcome3("hello","world");
    echo "<br>";

echo "==============================================================";
echo "<br>";

//4. Variadic function
     function line(int ...$numbers):int{
        $total = 0;

        foreach($numbers as $number){
            $total+=$number;
        }
        return $total;
     }

     echo "Variadic function";
     echo "<br>";
     echo line(1,2,3,4,5);
     echo "<br>";
     echo line(1,2,3,4,5,6,7,8,9,10);
     echo "<br>";

echo "==============================================================";
echo "<br>";
// 5. Anonymouns function
     $greet = function (string $city):string{
        return "Hello ".$city;
     };

     echo "Anonymouns function";
     echo "<br>";
     echo $greet("Dubai");
     echo "<br>";

echo "==============================================================";
echo "<br>";
// 6. Arrow function
     $country = fn(string $country):string=>"My country is ".$country;

     echo "Arrow function";
     echo "<br>";
     echo $country("India");
     echo "<br>";

echo "==============================================================";
echo "<br>";

// 7. function inside class
class Employee {
    private string $name;
    public function __construct(string $name = "Guest"){
        $this->name=$name;
    }
    public function greet(): string {
        return "Hello " . $this->name;
    }
}
echo "function inside class";
echo "<br>";
$employee = new Employee();
echo $employee->greet();
echo "<br>";

echo "==============================================================";
echo "<br>";

// 8. static method
class MathHelper {
    public static function add(int $a, int $b): int {
        return $a + $b;
    }
} 
echo "Static function";
echo "<br>";
echo MathHelper::add(10, 20);
echo "<br>";

echo "==============================================================";
echo "<br>";

// 9. Callback function

function applyDiscount(float $price):float{
    return $price*0.9;
}

function calculatePrice(float $price, callable $callback):float{
    return $callback($price);
}

echo "Callback function";
echo "<br>";
echo calculatePrice(500.0,"applyDiscount");
echo "<br>";


?>  