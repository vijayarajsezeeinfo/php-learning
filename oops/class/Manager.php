<?php

namespace App\Models;

class Manager extends Employee{
    private string $department;

    public function __construct(string $name, int $age, float $salary, string $city, string $department = "Unknown"){
     parent::__construct($name, $age, $salary, $city);
     $this->department=$department;
    }

    public function getDepartment(): string {
        return $this->department;
    }

    public function setDepartment(string $department):void{
        $this->department = $department;
    }
}

?>
