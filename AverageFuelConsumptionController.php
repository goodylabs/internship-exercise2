<?php
    class AverageFuelConsumptionController
    {
        private $calculator ;

        public function __construct(AverageFuelConsumption $calculator)
        {   
            $this->calculator=$calculator;
        }

        public function calculate($request)
        {
            if( isset($request['fuel']) && isset($request['miles']))
            {
                $this->calculator->set($request['fuel'], $request['miles']);
            }
        }
    }

?>