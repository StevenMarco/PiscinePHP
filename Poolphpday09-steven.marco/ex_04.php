<?php
class MyTinyCalculator {
    private $a;
    private $b;
    private $result;
        public function __construct($a, $b) {
            $this->a = $a;
            $this->b = $b;      
        }

        // set de $a et $b

        public function setA($var) {
            $this->a = $a;
        }
        public function setB($var2) {
            $this->b = $b;
        }

        // get de $a et $b

        public function getA() {
            return $this->a;
        }
        public function getB() {
    
            return $this->b;
        }

        // set et get de result
        
        public function setResult() {
            $this->result = $result;
        }
        public function getResult() {
            return $this->result;
        }

        // fonction de comparaison

        public function add() {
            return $this->result = $this->getA() + $this->getB();
        }
        public function subtract() {
            return $this->result = $this->getA() - $this->getB();
        }
        public function multiply() {
            return $this->result = $this->getA() * $this->getB();
        }
        public function divide() {
            return $this->result = $this->getA() / $this->getB();
        }

        // showResult
        public function showResult() {
        return $this->result;
        }
}