<?php

session_start();
$_SESSION['user_id'] = 2;


/**
 * $_GET
 * http://www.mywebsite.com?article_id=2
 * 
 */

$_GET['article_id']; // equals 2