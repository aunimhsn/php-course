<?php

// Passage by reference
$fruits = ['apple', 'banana', 'cherry'];

function add_fruit(array &$fruits, string $fruit) {
    array_push($fruits, $fruit);
}

add_fruit($fruits, 'pear');
var_dump($fruits);

?>