<?php
// php extends class example
class Animal
{
    /*
     * public property সব class এ call করা যায়।
     * privet property নিজ class এ call করা যায়।
     * protected property/method নিজ class এবং extends class এ call করা যায়।
     * */
    protected $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function eat()
    {
        echo "{$this->name} is eating";
    }

    public function run()
    {
        echo "{$this->name} is running";
    }

    public function sleep()
    {
        echo "{$this->name} is sleeping";
    }

    public function greet()
    {

    }
    protected function addTitle($title){ // protected method
        $this->name = $title . " " .$this->name;
    }
}

class Human extends Animal
{
    public function greet()
    {
        echo "Hi";
    }

    public function call()
    {
        echo "hello";
    }
}

class Cat extends Animal
{
    public function say(){
        $this->addTitle("Mr.");
    }

    public function greet()
    {
        echo "Meow";
    }
}

$sampad = new Human('Sampad');
$sampad->eat();
echo "<br/>";
$mom = new Cat('Mom');
$mom->eat();
echo "<br/>";
$mom->sleep();
echo "<br/>";
$mom->say();

