<?php

class Human
{
    public $name;
    public $age;

    public function __construct($personalName, $personAge = 0) // option argument set value
    {
        $this->name = $personalName;
        $this->age = $personAge;
    }

    function sayHi()
    {
        echo "hello\n";
        $this->sayName();
    }

    function sayName()
    {
        if($this->age){
            echo "My name is {$this->name}\n, My age is {$this->age} years old.";
        }else{
            echo "My name is {$this->name}";
        }

    }
}

$h1 = new Human('Sampad', 25);
$h1->sayName();

$h2 = new Human('Ankit', 4);
$h2->sayHi();

