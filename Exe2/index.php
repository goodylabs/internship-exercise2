<?php 
include_once "ConsumptionModel.php";
include_once "ConsumptionView.php";
include_once "ConsumptionController.php";

//Application
$model 		= new ConsumptionModel();
$controller = new ConsumptionController($model);

if (isset($_GET['action'])) $controller->{$_GET['action']}($_POST);

$gallonView = new ConsumptionView($model);

echo $gallonView->output();
?>