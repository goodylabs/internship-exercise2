<?php

include_once("model/Model.php");  
  
class Controller {  
     public $model;   
  
     public function __construct()    
     {    
          $this->model = new Model();  
     }   
      
     public function invoke()  
     {  
         
          if (!isset($_GET['action']))  
          {  
               include 'view/home.php'; 
          } 
          else 
          { 
               if ( !isset($_POST['fuel']) || !isset($_POST['miles']))
               {
                    include 'view/home.php'; 
               }
               else
               {
                    $this->model->set($_POST['fuel'], $_POST['miles'] );
                    $output = $this->model->calculate(); 
                    include 'view/calculate.php';  
               }
          }
     }  
}  

?>