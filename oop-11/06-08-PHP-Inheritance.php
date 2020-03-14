<?php
/*
 * Class 6 and 8 by hasin haydar
 * php extends class example
 * php Inheritance নিয়ে আলোচনা...
 * public property/method সব class এ call করা যায় এবং default থাকে।
 * privet property/method নিজ class এ call করা যায়।
 * protected property/method নিজ class এবং extends class এ call করা যায়।
 * */

// Class 6 example
class Animal
{
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

    protected function addTitle($title)
    { // protected method
        $this->name = $title . " " . $this->name;
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
    public function say()
    {
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

echo "<br>";

// Class 8 example
class Shape{
    protected $name;
    protected $area;

    public function __construct($name)
    {
        $this->name = $name;
        $this->calculateArea();
    }
    public function getArea()
    {
        echo "This {$this->name}'s area is {$this->area}";
    }
    public function calculateArea()
    {
    }

}

class Triangle extends shape{
    private $a, $b, $c;
    public function __construct( $a, $b, $c)
    {
        $this->a = $a;
        $this->b = $b;
        $this->c = $c;
        parent::__construct("Triangle");
    }
    public function calculateArea()
    {
        $perimeter = ($this->a+$this->b+$this->c)/2;
        $this->area = sqrt($perimeter * ($perimeter-$this->a) * ($perimeter - $this->b)* ($perimeter - $this->c));
    }
}

class Rectangle extends shape{
    private $a, $b;
    public function __construct($a, $b)
    {
        $this->a = $a;
        $this->b = $b;
        parent::__construct("Rectangle");
    }
    public function calculateArea()
    {
        $this->area = $this->a * $this->b;
    }
}
$r = new Rectangle(2,4);
$r->getArea();
echo "<br>";
$t = new Triangle(10,12,8);
$t->getArea();
























