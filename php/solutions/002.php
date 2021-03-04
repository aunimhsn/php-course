<?php

/**
 * Palindrome checker
 * If the user inputs a palindromic word then display a success message
 * "Yes $input is a palindrome", if not then display "No $input isn't a palindrome"
 * 
 */

echo "Welcome to the palindrome checker. Please enter a word to check if it's a palindrome or not.\n";
$input = trim(strtolower(readline()));
$reverse = strrev(strtolower($input));

if ($input === $reverse) {
    echo "Yes [$input] is a palindrome.\n";
} else {
    echo "No [$input] isn't a palindrome.\n";
}

?>



