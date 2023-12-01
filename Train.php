<?php

include_once "Vehicle.php";

class Train extends Vehicle{
    public $trackGauge;
    public function __construct( 
        public $brand,
        public $trackGauge,
        private $mileage
    ){}

    static function makeNoise() {
        echo "CHOO, CHOO" . "<br>";
    }
}