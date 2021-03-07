<?php

session_start();
$_SESSION['user_id'] = 2;


/**
 * $_GET
 * http://www.mywebsite.com?article_id=2
 * 
 */

$_GET['article_id']; // equals 2

/**
 * $_COOKIE
 * 
 */

setcookie('user', 'John', time() + 60 * 60 * 24);

// Access
$_COOKIE['user']; // equals to John

?>