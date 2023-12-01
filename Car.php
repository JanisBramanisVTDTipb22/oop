<?php

include "Vehicle.php";

class Car extends vehicle
{

    static $describe = "Man ir riepas un dzinejs";

    public function __construct($brand = "", $mileage = 0) {
        $this->brand = $brand;
        $this->mileage = $mileage;
    }

    static function makeNoise() {
        echo "MEEP, MEEP" . "<br>";
    }
}