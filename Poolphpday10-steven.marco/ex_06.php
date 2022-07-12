<?php

class Pony {
    private $name;
    private $gender;
    private $color;

    public function __construct($name, $gender, $color){
        $this->name = $name;
        $this->gender = $gender;
        $this->color = $color;
    }
    public function __toString() {
        return "Don't worry, I'm a pony !\n";
    }
    
    public function speak() {
        echo "Hiii hiii hiiii\n";
    }

    public function __Call($name, $arg) {
        echo "I don't know what to do...\n";
    }


    public function __get($name) {
        if(property_exists(get_class($this), $name)) {
            echo "Ce n'est pas bien de getter un attribut qui est privé !\n";
            return $this->name;  
        }else{
            echo "Il n'y a pas d’attribut: " . $name . ".\n";
        }
    }
    public function __set($name, $value) {
        if(property_exists(get_class($this), $name)) {
            echo "Ce n'est pas bien de setter un attribut qui est privé !\n";
        return $this->$name = $value;   
        }else{
            echo "Il n'y a pas d'attribut: " . $name . ".\n";
        }
    }

    public function __desctruct() {
        echo "I'm a dead pony.\n";
    }
}