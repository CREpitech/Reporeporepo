<?php
class Animal
{
    const MAMMAL=0;
    const FISH=1;
    const BIRD=2;
    protected $name;
    protected $legs;
    protected $type;
    //protected $argConst;
    
    

    function __construct($nameOfAnimal,$nbOfLegs, $atrConst)
    {
        $this->name=$nameOfAnimal;
        $this->legs=$nbOfLegs;
        $this->type=$atrConst;

        echo "My name is {$this->name} and I am a type {$this->getType()}\n";
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
        if($this->type ==0)
        {
            return "MAMMAL";
        }elseif($this->type==1)
        {
            return "FISH";
        }elseif ($this->type==2)
        {
            return "BIRD";
        }
        
        
        /*$consOfClass = new ReflectionClass($this);
        if(in_array(MAMMAL, $consOfClass)){
            return $this->type;
        }elseif(in_array(FISH, $consOfClass)){
            return $this->type;
        }elseif(in_array(BIRD, $consOfClass)){
            return $this->type;
        }
            
        }
        //$consOfClass->getConstants(); */        
    }
    //function





}


