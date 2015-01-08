<?php

    include 'AverageFuelConsumption.php';
    include 'AverageFuelConsumptionController.php';
    include 'AverageFuelConsumptionView.php';

    $calculator=new AverageFuelConsumption();
    $controller=new AverageFuelConsumptionController($calculator);

    if (isset($_GET['action'])) 
    {
        $controller->{$_GET['action']}($_POST);
    }

    $view=new AverageFuelConsumptionView($calculator);
    echo $view->output();

?>