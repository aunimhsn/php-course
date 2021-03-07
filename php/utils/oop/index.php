
<?php
require ('Environment.php');
require ('Barbarian.php');

Environment::getWeather(11);

$barbarian = new Barbarian('Turak');

var_dump($barbarian->getName());

?>