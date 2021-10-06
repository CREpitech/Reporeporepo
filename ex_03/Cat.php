<?php
require("Animal.php");

class Cat extends Animal
{
    private $color;

    function __construct($color)
    {
        Animal::__construct($nameOfAnimal, $nbOfLegs=4,Animal::MAMMAL);       
        
    }
}