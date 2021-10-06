<?php
class Animal
{
    const MAMMAL = 0;
    const FISH = 1;
    const BIRD = 2;
    protected $name;
    protected $legs;
    protected $type;

    static $animalCount = 0;
    static $mammalCount = 0;
    static $fishCount = 0;
    static $birdCount = 0;
    
    function __construct($nameOfAnimal, $nbOfLegs, $atrConst)
    {
        $this->name = $nameOfAnimal;
        $this->legs = $nbOfLegs;
        $this->type = $atrConst;

        self::$animalCount++;
        if ($atrConst == "MAMMAL") {
            self::$mammalCount++;
        }
        if ($atrConst == "FISH") {
            self::$fishCount++;
        }
        if ($atrConst == "BIRD") {
            self::$birdCount++;
        }



        echo "My name is {$this->name}, and I am a type {$this->getType()}.\n";
    }
    function getName()
    {
        return $this->name;
    }
    function getLegs()
    {
        return $this->legs;
    }
    function getType()
    {
        if ($this->type == 0) {
            return "MAMMAL";
        } elseif ($this->type == 1) {
            return "FISH";
        } elseif ($this->type == 2) {
            return "BIRD";
        }
    }
    static function getNumberOfAnimalsAlive()
    {
        $animalCount = 0;
        if ($animalCount == 0) {
            echo  "There are currently " . Animal::$animalCount . " animals alive in our world\n";
        } elseif ($animalCount == 1) {
            echo  "There is currently " . Animal::$animalCount . " animal alive in our world\n";
        }if($animalCount >= 2){
            echo  "There are currently " . Animal::$animalCount . " animals alive in our world\n";
        }
    }
    static function getNumberOfMammals()
    {
        $mammalCount = 0;
        if ($mammalCount == 0) {
            echo  "There are currently " . Animal::$mammalCount . " animals alive in our world\n";
        } elseif ($mammalCount == 1) {
            echo  "There is currently " . Animal::$mammalCount . " animal alive in our world\n";
        }if($mammalCount >= 2){
            echo  "There are currently " . Animal::$mammalCount . " animals alive in our world\n";
        }
    
        /*$mammalCount = 0;
        if ($mammalCount >= 0) {
            return Animal::$mammalCount;
        }*/
    }
    static function getNumberOfBirds()
    {
        Animal::$birdCount++;
        if (Animal::$birdCount == 0) {
            echo  "There are currently" . Animal::$birdCount . "animals alive in our world";
        } elseif (Animal::$birdCount == 1) {
            echo  "There is currently" . Animal::$birdCount . "animal alive in our world";
        }if(Animal::$birdCount >= 2){
            echo  "There are currently" . Animal::$birdCount . "animals alive in our world";
        }
    

        /*$birdCount = 0;
        if ($birdCount = 0) {
            return Animal::$birdCount;
        }*/
    }
    static function getNumberOfFish()
    {
        $fishCount = 0;
        if ($fishCount == 0) {
            echo  "There are currently" . Animal::$fishCount . "animals alive in our world \n";
        } elseif ($fishCount == 1) {
            echo  "There is currently" . Animal::$fishCount . "animal alive in our world\n";
        }if($fishCount >= 2){
            echo  "There are currently" . Animal::$fishCount . "animals alive in our world\n";
        }
    

        
        /*$fishCount = 0;
        if ($fishCount >= 0) {
            return Animal::$fishCount;
        }*/
    }
    
}