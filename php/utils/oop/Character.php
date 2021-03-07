<?php

abstract class Character {

    // Attributes
    protected $_name;
    protected $_strength;
    protected $_intelligence;
    protected $_points; // Each level, gain 1pt.


    // Getters
    public function getName() : string { return $this->_name; }
    public function getStrength() : int { return $this->_strength; }
    public function getIntelligence() : int { return $this->_intelligence; }
    public function getPoints() : int { return $this->_intelligence; }

    // Setters
    public function setStrength(int $strength) : void { 
        if ($this->_points >= $strength) {
            $this->_strength += $strength;
        }

        // Else 
        // Not enough points to increase your strength
    }

    // Methods
    public function speak() {

    }

    public function walk() {

    }

}

?>