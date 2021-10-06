<?php
include("Shark.php");
class GreatWhite extends Shark
{
    private $frenzy;
    protected $name;
    function __construct($nameOfAnimal)
    {
        Shark::__construct($nameOfAnimal, $frenzy = false);
        $this->name=$nameOfAnimal;
    }

    public function eat($animal)
    {
        if($animal == Animal\Canary::class)
        {
            echo $this->name. ": Next time you try to give me that to eat, I'll eat you instead.\n";

        }
        if ($animal == Shark::class) 
        {

            echo $this->name. ": The best meal one could wish for.\n";
        }
    }
}


