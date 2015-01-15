<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Fuel extends CI_Model {

   public function consumption_US($volume_in_liters, $distance_in_kilometer){
      if(!is_numeric($volume_in_liters) || !is_numeric($distance_in_kilometer))
         return "Input must be numeric";
      if($distance_in_kilometer <= 0)
         return "Distance must be greater than 0";
      if($volume_in_liters < 0)
         return "Volume must be postive";
         
      $consumption = $volume_in_liters / $distance_in_kilometer * 100.0;
      $result = (string)$consumption . " l /100 km";
      return $result;
   }
}
 
?>