<?php

/*
 * parent class এবং child class
 * দুইটা class এর মধ্যে যদি একই method নাম থাকে আর ২য় class মানে child class কে call করে তাহলে parent method call হবে না। parent method টিকে call করতে হলে......
 * */

class parentClass
{
    protected $name;

    public function __construct($name)
    {
        $this->name = $name; // show parent method
        $this->sayHi();
    }

    function sayHi()
    {
        echo "Hi from {$this->name}";
    }
}

class childClass extends parentClass
{
    function sayHi()
    {
        parent::sayHi();  // show parent method
        echo "hello";
    }
}

$cc = new childClass("abcd");

