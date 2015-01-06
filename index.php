<?php
    require_once('classes/average_fuel_model.php');
    require_once('classes/average_fuel_controller.php');
    
    $model = new Average_Fuel_Model();
    $controller = new Average_Fuel_Controller($model);
     
    if (isset($_GET['fuel']) && isset($_GET['kilo'])) {
        $controller->calculate($_GET['fuel'], $_GET['kilo']);
    }
?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01//EN" "http://www.w3.org/TR/html4/strict.dtd"> 
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Fuel Calculator</title>
</head>

<body>

<h1>Liters per 100 kilometers calculator</h1>
<form method='get'>
<table>
<tr><td>Fuel (in liters)</td>
<td><input type='text' name='fuel'/></td></tr>
<tr><td>Journey Driven (in kilometers)</td>
<td><input type='text' name='kilo'/></td></tr>
</table>

<input type='reset'/>
<input type='submit' value='Calculate'/>
</form>

<?php 
    if ($model->isEnabled()) {
        echo '<p>Average fuel consumption = ' . $model->getResult() . 
            ' liters/100 kilometers</p>';
    }
?>

</body></html>