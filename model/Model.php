<?php

class Model
{
    private $fuel;
    private $miles;

    public function __construct()    
    {    
    }  

    public function getFuel()
    {
        return $this->fuel;
    }

    public function getMiles()
    {
        return $this->miles;
    }

    public function set($_fuel, $_miles)
    {
        $this->fuel=$_fuel;
        $this->miles=$_miles;
    }

   
    public function calculate()
    {

        if (is_numeric($this->fuel) && is_numeric($this->miles))
        {
            if ($this->fuel<=0)
            {
                return "Error: Fuel must be bigger than 0.";
            }
            else if($this->miles<0)
            {
                return "Error: Miles must be positive.";
            }
            else
            {
                return round($this->miles/ $this->fuel, 5) ." miles per gallon.";
            }
        }
        else
        {
            return "Error: Fuel or miles must be number.";
        }
        
        
    }
}


?>