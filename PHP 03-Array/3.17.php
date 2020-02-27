<?php
// php array reduce
$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10 );

function sum($OldValue=0, $NewValue){ //sum(0, 1), sum(1, 2), sum(3, 3).......
    return $OldValue+$NewValue;
}
$sum = array_reduce($numbers, 'sum'); // $numbers sob array jogfall
echo $sum."<br>";
// $numbers teke sodo jor sonka gula jog kora
function evenSum($OValue, $NValue){
    if($NValue%2 == 0){
        return $OValue+$NValue;
    }
}
$evenSum = array_reduce($numbers, 'evenSum');
echo $evenSum;