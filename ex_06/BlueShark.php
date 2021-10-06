<?php
include("Shark.php");
class BlueShark extends Shark
{
    private $frenzy;

    function __construct($nameOfAnimal)
    {
        Shark::__construct($nameOfAnimal, $frenzy = false);
    }
    
    public function eat($animal)
    {
        if ($animal == Shark::class && $animal != Animal::FISH)
        {
        
            echo "It's not worth my time\n";
            
        }
    }

}


