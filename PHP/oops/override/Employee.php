<?php

namespace App\Models\Override;

class Employee {
    private string $name;
    private int $age;
    private float $salary;

    public function __construct(string $name, int $age, float $salary){
        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;
    }

    public function getName():string {
        return $this->name;
    }

    public function getAge():int{
        return $this->age;
    }

    public function getSalary():float{
        return $this->salary;
    }

    public function greet():string{
        return "Hello from employee";
    }

}

?>