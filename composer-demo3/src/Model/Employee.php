<?php

namespace ComposerDemo3\Model;
class Employee{
    private string $name;
    private int $age;

    public function __construct(string $name, int $age){
        $this->name = $name;
        $this->age = $age;
    }

    public function intro():string{
        return "I'm ".$this->name." and I'm ".$this->age." Years old";
    }
}

?>