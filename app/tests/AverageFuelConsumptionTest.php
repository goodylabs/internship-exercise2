<?php

class AverageFuelConsumptionTest extends TestCase {

	protected function assertDoubleEquals($a,$b){
		return abs($a - $b) <= 1e-5;
	}

	public function testZeroFuel(){
		$this->assertDoubleEquals(Car::averageFuelConsumption(0,100),0);
	}

	public function testRandomFuel(){
		$this->assertDoubleEquals(Car::averageFuelConsumption(10,3),333.333333333);
	}

	public function testInvalidInput(){
		$validation = Validator::make(['fuel'=>100,'journey_driven' => 0],Car::$rules);
		$this->assertTrue($validation->fails());
	}

}
