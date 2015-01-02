<?php
class View
{
    private $model;
    private $controller;
    private $part1, $part2, $part3, $part4;
    
    public function __construct($controller, $model) {
        $this->controller = $controller;
        $this->model = $model;
        $this->part1 = '<html>
<head>
<title>Fuel Calculator</title>
</head>
<body>
<h1>Liters per 100 kilometers calculator</h1>
<form method=\'get\'>
<table>
<tr><td>Fuel (in liters)</td>
<td><input type=\'text\' name=\'fuel\'';
        $this->part2 = '/></td></tr>
<tr><td>Journey Driven (in kilometers)</td>
<td><input type=\'text\' name=\'kilo\'';
        $this->part3 = '/></td></tr>
</table>
<input type=\'reset\'/>
<input type=\'submit\' value=\'Calculate\'/>
</form>';
        $this->part4 = '</body></html>';
    }
    
    public function toString() {
        $res = $this->part1 . $this->part2 . $this->part3;
        if ($this->model->isEnabled()) {
            $res = $res . '<p>Average fuel consumption = '.$this->model->getResult();
            $res = $res . ' liters/100 kilometers</p>'.$this->part4;
        } else {
            $res = $res . $this->part4;
        }
        return $res;
    }
}

class Model
{
    private $enabled;
    private $fuel;
    private $kilo;
    private $result;
    
    public function __construct() {
        $this->enabled = false;
    }
    
    public function calculate($fuel, $kilo) {
        $this->fuel = $fuel;
        $this->kilo = $kilo;
        $this->result = $fuel/$kilo;
        $this->enabled = true;
    }
    
    public function getResult() {
        return $this->result;
    }
    
    public function getFuel() {
        return $this->fuel;
    }
    
    public function getKilo() {
        return $this->kilo;
    }
    
    public function isEnabled() {
        return $this->enabled;
    }
}

class Controller
{
    private $model;
    
    public function __construct($model) {
        $this->model = $model;
    }
    
    public function submitted($fuel, $kilo) {
        $this->model->calculate($fuel, $kilo);
    }
}
?>

<?php
    $model = new Model();
    $controller = new Controller($model);
    $view = new View($controller, $model);
     
    if (isset($_GET['fuel']) && isset($_GET['kilo'])) {
        $controller->submitted($_GET['fuel'], $_GET['kilo']);
    }
     
    echo $view->toString();
?>