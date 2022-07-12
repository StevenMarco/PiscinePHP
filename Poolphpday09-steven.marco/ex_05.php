<?php
class Character {
    protected $name;
    protected $endurance;
    protected $agility;
    protected $strength;
    protected $mana;
    const CLASSE = "Character";
        // construction
    function __construct($name) {
        $this->name = $name;
    }
    
        // get variables
    function getName() {
        return $this->name;
    }
    function getEndurance() {
        return $this->endurance = 50;
    }
    function getAgility() {
        return $this->agility = 2;
    }
    function getStrength() {
        return $this->strength = 2;
    }
    function getMana() {
        return $this->mana = 2;
    }
    function getClasse() {
        return Character::CLASSE;
    }
}