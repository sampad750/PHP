<?php
// PHP array utility functions.
// array_walk and array_map protita array er modde function k print/return kore
$numbers = array( 1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12 );

function square($n){
    printf("Square of %d is %d \n",$n, $n*$n);
}
array_walk( $numbers, 'square' );
echo "<br>";

function cube($n){
    return $n*$n*$n;
}
$map_array = array_map('cube', $numbers); // akane "cube" callback function
print_r($map_array);

echo "<br>";

function even($n){
    return $n%2==0;
}
$get_even_number = array_filter($numbers, 'even'); // $numbers array teke jor number gula ber kora
print_r($get_even_number);

echo "<br>";

$person = array('sampad', 'sujan', 'kamal', 'rahim', 'karim');
function nameByS($name){
    return $name[0]=='s'; 
}
$Sperson = array_filter($person, 'nameByS'); // $person array teke first letter s diye soro tar name show kora
print_r($Sperson);