<?php
include("Animal.php");
class Shark extends Animal
{
    private $frenzy;

    function __construct($nameOfAnimal, $frenzy=false)
    {
        //$this->frenzy=false;
        Animal::__construct($nameOfAnimal,0,Animal::FISH);
        echo "A KILLER IS BORN!";
    }

    function smellBlood(bool$param)
    {
        $this->frenzy=$param;
    }
    function status()
    {
        if($this->frenzy=false)
        {
            echo $this->name. " is swimming peacefully.\n";
        }
        else
        {
            echo $this->name. " is smelling blood and wants to kill.\n";
        }
    }
    
}