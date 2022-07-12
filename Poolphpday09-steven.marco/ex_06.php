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

class Paladin extends Character {
    const CLASSE = "Paladin";
           
            // construction
    function __construct($name) {
        $this->name = $name;
        echo $this->name . ": I'll engrave my name in the history !\n"; 
    }

        //   get variables
    function getName() {
        return $this->name;
    }
    function getEndurance() {
        return $this->endurance = 100;
    }
    function getAgility() {
        return $this->agility = 8;
    }
    function getStrength() {
        return $this->strength = 10;
    }
    function getMana() {
        return $this->mana = 3;
    }
    function getClasse() {
        return Character::CLASSE;
    }

    function attack() {
        echo $this->name . ": I'll crush you with my hammer !\n";
    }

    function __destruct() {
        echo $this->name . ": Aarrg I can't believe I'm dead...\n";
    }
}

class Mage extends Character {
    const CLASSE = "Mage";
            // construction
            function __construct($name) {
                $this->name = $name;
                echo $this->name . ": May the gods be with me.\n";
            }

            // get variables
            function getName() {
                return $this->name;
            }
            function getEndurance() {
                return $this->endurance = 70;
            }
            function getAgility() {
                return $this->agility = 10;
            }
            function getStrength() {
                return $this->strength = 3;
            }
            function getMana() {
                return $this->mana = 10;
            }
            function getClasse() {
                return Character::CLASSE;
            }

            function attack() {
                echo $this->name . ": Feel the power of my magic !\n";
            }

            function __destruct() {
                echo $this->name . ": By the four gods, I passed away...\n";
            }
}