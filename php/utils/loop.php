<?php

// For
for ($i = 1; $i <= 10; $i++) {
    echo "For loop: Iteration $i\n";
}

// While
$j = 1;
while ($j <= 5) {
    echo "While loop: Iteration $j\n";
    $j++;
}

// Foreach, without key "$fruits as $fruits"
$fruits = ['apple', 'mango', 'papaya'];
foreach($fruits as $key => $fruit) {
    echo $key + 1 . ": $fruit\n";
}

?>