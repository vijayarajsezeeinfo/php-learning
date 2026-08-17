<?php

namespace MagicMethods\Model;

class Employee{

 private string $name;
 private int $age;

 public function __construct(string $name, int $age){
    $this->name = $name;
    $this->age = $age;
 }

 public function __toString():string{
    return "Name: ".$this->name." "."Age: ".$this->age;
 }

 public function __invoke():string{
    return "Name: ".$this->name." "."Age: ".$this->age;
 }

 public function __clone(){
    echo "Employee object cloned";
 }

 //to specify properties to be serialized
 public function __sleep(): array{
    return ['name', 'age'];
 }

 //to specify properties to be unserialized
 public function __wakeup(): void{
    echo "Employee object restored";
 }
}

?>