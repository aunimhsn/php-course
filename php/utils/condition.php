<?php

$firstName = 'John';
$lastName = 'Doe';
$mark = 17;

// If statement
if ($mark >= 15) {
    echo "$firstName $lastName is a good student";
} else {
    echo "$firstName $lastName can do better...";
}

// Ternary
$result = ($mark >= 15) ? "$firstName $lastName is a good student" : "$firstName $lastName can do better...";
echo $result;

// Switch statement
$i = 1;
switch ($i) {
    case 0:
        echo "$i equals 0";
        break;
    case 1:
        echo "$i equals 1";
        break;
    case 2:
        echo "$i equals 2";
        break;
    default:
        echo "$i is superior than 2";
}


?>