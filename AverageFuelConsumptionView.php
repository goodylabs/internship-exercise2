<?php
    class AverageFuelConsumptionView
    {
        private $calculator;

        public function __construct( AverageFuelConsumption $calculator)
        {
            $this->calculator=$calculator;

        }

        public function output()
        {
            $html=  '<div class="container">
                    <form method="post" action="?action=calculate">
                        <label>Input: </label> <br>
                        <label>fuel(in gallons): </label>
                        <input name="fuel" type="text" value="'. $this->calculator->getFuel().'"><br>
                        <label>journey driven(in miles): </label>
                        <input name="miles" type="text" value="'.$this->calculator->getMiles().'"> <br>
                        <input type="submit" value="Calculate">
                    </form>
                    </div>';
            $output='<label>Output:'.$this->calculator->calculate(). '</label>';
            return $html.$output;
        }

    }

?>