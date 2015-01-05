<?php

class Car extends Eloquent {
	//public $fuel,$journey_driven,$avg_fuel;

	public static $rules = [
		'fuel' => 'required | numeric',
		'journey_driven' => 'required | numeric| min:0.0000001'
	];

	protected $fillable = ['fuel','journey_driven'];

	public static function averageFuelConsumption($fuel,$journey_driven){
		return ($fuel * 100.0/$journey_driven); //per 100 kilometers
	}	
}
?>