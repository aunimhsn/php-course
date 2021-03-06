
<?php
require ('Environment.php');
require ('Barbarian.php');

Environment::get_weather(11);

$thor = new Barbarian('Thor');

var_dump($thor);

?>