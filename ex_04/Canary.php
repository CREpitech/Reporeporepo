<?php
class Canary extends Animal
{
    private $eggs=0;
    protected $eggCounter;

    function __construct($nameOfAnimal)
    {
        Animal::__construct($nameOfAnimal, 2, Animal::BIRD);
        $this->eggs=0;
        echo "Yellow and smart? Here I am!\n";
    }
    function getEggsCount()
    {
        //$eggCounter=$this->eggs++;
        return $this->eggs;
    }
    function layEgg()
    {
        $eggCounter=$this->eggs+=1;
        return $this->eggs;

    }


}