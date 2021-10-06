<?php



include("Animal.php");
class Shark extends Animal
{
    private $frenzy;
    protected $name;

    function __construct($name, $frenzy = false)
    {
        $this->name = $name;
        //$this->frenzy=false;
        Animal::__construct($name, 0, Animal::FISH);
        echo "A KILLER IS BORN!\n";
    }

    function smellBlood(bool $param)
    {
        $this->frenzy = $param;
    }
    function status()
    {
        if ($this->frenzy = false) {
            echo $this->name . " is swimming peacefully.\n";
        } else {
            echo $this->name . " is smelling blood and wants to kill.\n";
        }
    }
    public function eat($animal)
    {

        $animal = Animal::class;
        while ($animal != Shark::class && $this->frenzy = true) {
            echo  $this->name . " ate a " . Animal::getType() . " named " . $animal . ".\n";
            return $this->fenzy = false;
        }

        if ($animal == Shark::class) {
            echo "It's not worth my time.\n";
        }
    }
}

