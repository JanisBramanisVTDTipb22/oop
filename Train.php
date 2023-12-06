<?php

include_once "Vehicle.php";

class Train extends Vehicle{
    public $trackGauge;



    public function __construct(   
        $brand,
        $mileage,
        $trackGauge) {
            parent::__construct($brand, $mileage);
            $this->trackGuage=$trackGauge;
        }
   
       static function makeNoise() {
        echo "Choo, Choo! <br>";
    }
}