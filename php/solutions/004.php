<?php


$fruits = ['apple', 'cherry', 'mango', 'banana'];

/**
 * Write a program capitalizing each first letter of the words in the array.
 * OUTPUT: ['Apple', 'Cherry', 'Mango', 'Banana']
 * 
 */

$fruits = array_map('ucfirst', $fruits);
var_dump($fruits);


?>