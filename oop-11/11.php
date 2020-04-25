<?php
/**
 * ========Class 11.13========
 * ক্লাসের স্ট্যাটিক মেথড এবং প্রোপার্টিজ
 * class এ স্ট্যাটিক মেথড call করলে তার class কে new দিয়ে object করা লাগে না
 * */
class mathCalculator{
    //private $number;
    static $num;
    static function fibonacci($n){
        //$this->number = 12; // static method তাই এখানে object তৈরি করা হয় নি তাই $this কাজ করবে না।
        self::$num = 6;
        echo $n;
        self::doSomething();
    }
    static function doSomething(){
        echo 'doing something';
    }
    function nomal(){ // static method কে normal method এ call করতে দুইভাবে ই করা যায়
        self::$num = 'sampad'; // static property normal method এইভাবে call করতে হবে।
        //self::doSomething();
        $this->doSomething(); // object করা হলেই $this-> দিয়ে করা যাবে
    }
}
mathCalculator::fibonacci(6);
echo '<br/>';
$n = new mathCalculator();
$n->nomal();
echo '<br/>';
echo mathCalculator::$num; // static method property echo করতে হলে।
echo '<br/>';
/**
 * ========Class 11.14========
 * চাইল্ড ক্লাসে স্ট্যাটিক মেথড ওভাররাইড নিয়ে আলোচনা
 *
 * */
class A{
    static function sayHi(){
        echo "Say hi from A";
    }
}
class B extends A{
    static function sayHi(){
        echo "Say hi from B";
        echo '<br/>';
        parent::sayHi(); // extends করা method কে call করতে।
    }
}
B::sayHi(); // same method হলে শেষ method বেশি priority পাবে।
/**
 * ========Class 11.15========
 * স্ট্যাটিক স্কোপ নিয়ে আলোচনা
 * */
class C{
    //private static $name; // static method এর ক্ষেত্রে static private property করলে শুধু ওই class কাজ করা যাবে extends class এ কাজ করা যাবে না।
    protected static $name; //protected হলে extends class এ call করা যাবে।
    static function sayHi(){
        self::$name = 'privet static method';
        echo "Say hi from A";

    }
}
class D extends C{
    static function sayHi(){
        parent::sayHi();
        echo parent::$name;
        echo "Say hi from B";
    }
}
D::sayHi();




