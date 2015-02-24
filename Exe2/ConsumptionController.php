<?php
 /**
   * Fuel Consumption
   * 
   * 
   * @package    Exe2
   * @subpackage Controller
   * @author     Lucas Porto <lucasfporto@hotmail.com>
   */
class ConsumptionController {
	private $model;
	
	/**
	* 
	* Contructor
	*
	*/
	public function __construct($model) {
		$this->model = $model;
	}

	/**
	* 
	* Exec calc the consuption
	*
	* @param array $request  Form's informations
	*/
	public function calc($request) {
		if (isset($request['fuelQtd']) && isset($request['milesQtd'])) {
			$this->model->set($request['fuelQtd'], $request['milesQtd']);
		}
	}
}
?>