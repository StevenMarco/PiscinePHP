<?php
class MyAttributes {
    private $var;
    private $var2;
    function __construct($var, $var2) {
        $this->var = $var;
        $this->var2 = $var2;
    }

    function setA($var) {
        $this->var = $var;
    }
    function setB($var2) {
        $this->var2 = $var2;
    }
    function getA() {
        return $this->var;
    }
    function getB() {

        return $this->var2;
    }

    public function display() {
        echo $this->getA() . " " . $this->getB() . "\n";
    }
}