<?php

namespace App\Models;

class Employee{
    private string $name;
    private int $age;
    private float $salary;
    private string $city;

    public function __construct(string $name = "Unknown", int $age = 0, float $salary = 0.0, string $city = "Unknown"){
       $this->name = $name;
       $this->age = $age;
       $this->salary = $salary;
       $this->city = $city; 
    }

    public function getName():string{
        return $this->name;
    }

    public function setName(string $name):void{
        $this->name=$name;
    }

    public function getAge():int{
        return $this->age;
    }

    public function setAge(int $age):void{
       $this->age = $age;
    }

    public function getSalary():float{
        return $this->salary;
    }

    public function setSalary(float $salary):void{
        $this->salary =$salary;
    }

    public function getCity():string{
        return $this->city;
    }

    public function setCity(string $city):void{
        $this->city=$city;
    }

    public function greet():string{
        return "Hello ".$this->name;
    }

}

?>