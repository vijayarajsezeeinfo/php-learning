<?php

namespace App\Models\Override;

class Manager extends Employee{
    private string $department;

    public function __construct(string $name, int $age, float $salary, string $department){
        parent::__construct($name, $age, $salary);
        $this->department=$department;
    }

    public function getDepartment():string{
        return $this->department;
    }

    public function greet():string{
        return "Hello from Manager";
    }
}

?>