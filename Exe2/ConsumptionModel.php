<?php
 /**
   * Fuel Consumption
   * 
   * 
   * @package    Exe2
   * @subpackage Model
   * @author     Lucas Porto <lucasfporto@hotmail.com>
   */
class ConsumptionModel {
	private $milesQtd 	= 0;
	private $fuelQtd 	= 0;
	
	/**
	* 
	* Get Fuel Consuption
	*
	* @return float Fuel Consumption
	*/
	public function get() {
		return	round($this->milesQtd / $this->fuelQtd, 2);	
	}
	
	/**
	* 
	* Set parameters values to calc the consuption
	*
	* @param float $fuelQtd  Qtd Fuel
	* @param float $milesQtd  Qtd Miles
	*/
	public function set($fuelQtd, $milesQtd) {
		$this->fuelQtd 	= $fuelQtd;
		$this->milesQtd = $milesQtd;
	}
	
}
?>