<?php
$numbers1 = array( 5 , 6, 2, 2, 24, 30, 21 );
$numbers2 = array( 5 , 56, 2, 21, 44, 24, 27 );

$fruits1 = array('a'=>'apple', 'b'=>'banana', 'c'=>'cat');
$fruits2 = array('d'=>'dog', 'e'=>'element', 'c'=>'cat');

$common = array_intersect($numbers1, $numbers2); // 2 ta array modde common ki ase ta dekar jonno
//$commonf = array_intersect($fruits1, $fruits2); // "key+value" er modde sodo "value" ta check korbe
$commonf = array_intersect_assoc($fruits1, $fruits2); // array "key+value" soho check korte
print_r($common);
echo "<br>";
print_r($commonf);
echo "<br>";
$array_diff = array_diff($numbers1, $numbers2); // 1st array je number gulo 2nd array te nai sei gula return hoyeche
print_r($array_diff);
echo "<br>";
$array_fruits = array_diff_assoc($fruits1, $fruits2); // 1st array je number gulo 2nd array te nai sei gula return hoyeche(key soho check korte chaile)
print_r($array_fruits);


