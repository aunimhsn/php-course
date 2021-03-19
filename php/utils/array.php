<?php

// Array
$user = ['John', 'Doe', 10, ['34 rue des Lilas', '31000', 'Toulouse']];

// Associative array
$user = [
    'firstName' => 'John',
    'lastName' => 'Doe',
    'age' => 10,
    'address' => [
        'street' => '34 rue des Lilas',
        'zipCode' => '31000',
        'city' => 'Toulouse'
    ]
];

echo $user['address']['city']; // Display Toulouse

?>