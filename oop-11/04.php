<?php
class Fund{
    public $fund; //privet property, method class er baire teke value pass kora jai na.
    function __construct($initialFund)
    {
        $this->fund = $initialFund;
    }

    public function addFund($money){
        $this->fund +=$money;
    }

    public function deductFund($money){
        $this->fund -=$money;
    }

    public function getTotal(){
        echo "Total Fund is {$this->fund}\n";
    }
}

$ourFund = new Fund(100);
$ourFund->fund = 75;
$ourFund->getTotal();
$ourFund->deductFund(10);
$ourFund->getTotal();
