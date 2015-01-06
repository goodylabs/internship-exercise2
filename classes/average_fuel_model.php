<?php
class Average_Fuel_Model
{
    private $enabled;
    private $liter_per_100km;
    
    public function __construct() {
        $this->enabled = false;
    }
    
    public function calculate($fuel, $km) {
        $this->liter_per_100km = $fuel*100/$km;
        $this->enabled = true;
    }
    
    public function getResult() {
        return $this->liter_per_100km;
    }
    
    public function isEnabled() {
        return $this->enabled;
    }
}
?>