<?php
require("Animal.php");

class Cat extends Animal
{
    private $color;

    function __construct($nameOfAnimal,$color="Grey")
    {
        Animal::__construct($nameOfAnimal, 4, Animal::MAMMAL); 
        $this->color=$color;
        echo $this->name. " : MEEEOOWWWW\n"; 

    }
    function meow()
    {
        echo $this->name. " ". $this->color. " kitty is meowing.\n";
    }     
}        
  