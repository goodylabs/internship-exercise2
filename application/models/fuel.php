<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Fuel extends CI_Model {

   public function consumption_US($volume_in_liters, $distance_in_kilometer){
      $consumption = $volume_in_liters / $distance_in_kilometer * 100.0;
      $result = (string)$consumption . " l /100 km";
      return $result;
   }
}
 
?>