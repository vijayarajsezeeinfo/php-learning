<?php

namespace ComposerDemo3\Model;
class Manager extends Employee{
    private string $department;

    public function __construct(string $name, int $age, string $department){
        parent::__construct($name,$age);
        $this->department = $department;
    }

}

?>