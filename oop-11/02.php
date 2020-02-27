<?php
class Human{
    public $name;
    function sayHi(){
        echo "Hello\n";
    }
    function sayName(){
        echo "My Name is {$this->name}";
    }
}
class Cat{
    function sayHi(){
        echo "Meow\n";
    }
}
class Doc{
    function sayHi(){
        echo "Woof\n";
    }
}

$h1 = new Human();
$h1->name = "sampad"; // set oparation
$c1 = new Cat();
$c1->sayHi();
//$d = new Doc();

$h1->sayHi();
$h1->sayName();
//echo $h1->name(); //get oparation