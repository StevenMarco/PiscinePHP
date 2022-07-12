<?php
class Dolly {
    public $animal;
    public $age;
    public $doctor;

    function __construct($animal, $age, $doctor) {
        $this->animal = $animal;
        $this->age = $age;
        $this->doctor = $doctor;
    }
    function __clone() {
        echo "I will survive !\n";
    }
}

function clone_object($object) {
    return $copie_object = clone $object;
}