<?php
 /**
   * Fuel Consumption
   * 
   * 
   * @package    Exe2
   * @subpackage View
   * @author     Lucas Porto <lucasfporto@hotmail.com>
   */
class ConsumptionView {
	private $calc;
	
	/**
	* 
	* Contructor
	*
	*/
	public function __construct(ConsumptionModel $calc) {
		$this->calc = $calc;
	}
	

 	/**
	* 
	* Output
	*
	* @return HTML - form and fields
	*/
	public function output() {
		$html = '<form action="?action=calc" method="post">
					<label> Fuel (in gallons):</label>
					<input name="fuelQtd" type="text" value="0" /> <br>
					<label> Journey Driven (in miles):</label>
					<input name="milesQtd" type="text" value="0" /> <br>
					<label> Fuel Consumption (average):</label>
					<input name="calcRes" type="text" value="' . $this->calc->get() . '" /> <br>
					<input type="submit" value="Calc." />				
				</form>';
		
		return $html;
	}
}
?>