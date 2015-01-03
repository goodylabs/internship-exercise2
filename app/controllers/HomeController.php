<?php

class HomeController extends BaseController {

	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	/*
	public function showWelcome()
	{
		return View::make('hello');
	}*/
	
	public function showCar()
	{
		return View::make('car',['model' => new Car()]);
	}

	public function doCar()
	{
		$model = new Car();
		$model->fill(Input::all());
		$validator = Validator::make(Input::all(),Car::$rules);
		if ($validator->fails()){
			return View::make('car',['model'=>$model,'errors' => $validator->errors()]);
		} else {
			//var_dump($model); exit();
			$model->avg_fuel = Car::averageFuelConsumption($model->fuel,$model->journey_driven);
			return View::make('car',['model'=>$model]);
		}
	}

}
