<?php
class Average_Fuel_Controller
{
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function calculate($fuel, $kilo) {
        $this->model->calculate($fuel, $kilo);
    }
}
?>