<?php
class Character
{
    private $name;
    private $strength;
    private $magic;
    private $intelligence;
    private $life;

    public function __construct($name = "Character"/*$i*/, $strength = 0, $magic = 0, $intelligence = 0, $life = 100)
    {
        static $i = 0;
        $i++;
        
        if($name == "Character")
        {
            $this->name = "Character $i";
            $this->strength = $strength;
            $this->magic = $magic;
            $this->intelligence = $intelligence;
            $this->life = $life;
        }
        else
        {
            $this->name = $name;
            $this->strength = $strength;
            $this->magic = $magic;
            $this->intelligence = $intelligence;
            $this->life = $life;
        }
    }

    public function __toString()
    {
        return "My name is " . $this->name . ".";
    }

    protected function getName()
    {
        return $this->name;
    }
    protected function getStrength()
    {
        return $this->strength;
    }
    protected function getMagic()
    {
        return $this->magic;
    }
    protected function getIntelligence()
    {
        return $this->intelligence;
    }
    protected function getLife()
    {
        return $this->life;
    }
}