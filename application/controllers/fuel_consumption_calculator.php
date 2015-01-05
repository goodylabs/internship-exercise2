<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
 
class Fuel_Consumption_Calculator extends CI_Controller {

   public function index(){
      
      $volume = 0;
      $distance = 0;
      $consumption = 0;
      
      if($this->input->post('volume') && $this->input->post('distance')){
         $this->load->model("fuel");
         
         $volume = (float) $this->input->post('volume');
         $distance = (float) $this->input->post('distance');
         $consumption = $this->fuel->consumption_US($volume, $distance);   
      }
      
      $data['volume'] = (string)$volume;
      $data['distance'] = (string)$distance;
      $data['consumption'] = $consumption;
      $this->load->view('fuel_consumption_calculator',$data);
      
   }

}
 
?>