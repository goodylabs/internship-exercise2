<?php
    class AverageFuelConsumption
    {
        private $fuel=0;
        private $miles=0;


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
            if($this->miles!=0)
            {
                return  round($this->fuel/ $this->miles, 5) ." miles per gallon.";
            }
            else
            {
                return "";
            }
            
        }
    }

?>