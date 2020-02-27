<?php
$fruits = array('a'=>'apple', 'b'=>'banana', 'c'=>'cat');
$number = array('5',5 , 6, 2, 2, 24, 30, 21);

if(in_array( 5, $number, true )){  // in_array diye kono kicho ache kina koja jai
    echo 'find number';
}
echo "<br>";
$offset = array_search(2, $number, true); // array_search diye array index position jana jai
echo $offset;
echo "<br>";
if(key_exists('c', $fruits)){  // array er modde "key" search korle
    echo 'key c exists';
}
