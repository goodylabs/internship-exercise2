<?php
require_once(APPPATH . '/controllers/test/Toast.php');

class Fuel_Consumption_Calculator_Test extends Toast
{
	function Fuel_Consumption_Calculator_Test()
	{
		parent::Toast(__FILE__);
		$this->load->model("fuel");
	}

	/* TESTS BELOW */

   function test_consumption_US(){
      $this->message = "";
      
      //Test case 1
      $volume = '5';
      $distance = 100;
      $expected = "5 l /100 km";
      $result = $this->fuel->consumption_US($volume, $distance); 
      $this->_assert_equals($result, $expected);
      $this->message .= "Volume: ".$volume."; "."Distance: ".$distance."; ".
         "Expected: ".$expected."; "."Result: ".$result.";<br>";
      
      //Test case 2
      $volume = '50string';
      $distance = 100;
      $expected = "Input must be numeric";
      $result = $this->fuel->consumption_US($volume, $distance); 
      $this->_assert_equals($result, $expected);
      $this->message .= "Volume: ".$volume."; "."Distance: ".$distance."; ".
         "Expected: ".$expected."; "."Result: ".$result.";<br>";
         
      //Test case 3
      $volume = '-50';
      $distance = 100;
      $expected = "Volume must be postive";
      $result = $this->fuel->consumption_US($volume, $distance); 
      $this->_assert_equals($result, $expected);
      $this->message .= "Volume: ".$volume."; "."Distance: ".$distance."; ".
         "Expected: ".$expected."; "."Result: ".$result.";<br>";
         
      //Test case 4
      $volume = '50';
      $distance = -100;
      $expected = "Distance must be greater than 0";
      $result = $this->fuel->consumption_US($volume, $distance); 
      $this->_assert_equals($result, $expected);
      $this->message .= "Volume: ".$volume."; "."Distance: ".$distance."; ".
         "Expected: ".$expected."; "."Result: ".$result.";<br>";
         
      //Test case 4
      $volume = '50';
      $distance = 0;
      $expected = "Distance must be greater than 0";
      $result = $this->fuel->consumption_US($volume, $distance); 
      $this->_assert_equals($result, $expected);
      $this->message .= "Volume: ".$volume."; "."Distance: ".$distance."; ".
         "Expected: ".$expected."; "."Result: ".$result.";<br>";
   }

}
