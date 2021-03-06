<?php

require ('Character.php');

class Barbarian extends Character {

    public function __construct(string $name) {
        $this->_name = $name;
        $this->_strength = 100;
        $this->_intelligence = 30;
    }

    public function talk() {

    }

}

?>