<?php

namespace static\Model;

class Employee{
     protected string $name;
     static string $company = "Ezeeinfo";

    public function __construct(string $name){
        $this->name = $name;
    }

    public static function greet():string{
        return "Hello world";
    }
}

?>