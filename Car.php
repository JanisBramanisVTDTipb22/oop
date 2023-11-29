<?php

class Car {
    public $brand;
    private $mileage;
    static $describe = "Man ir riepas un dzinejs";

    public function __construct($n, $a) {
        $this->brand = $n;
        $this->mileage = $a;
    }

    public function __destruct() {
        echo $this->brand . "  " . $this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage = $this->mileage+$amount;
    }
    static function makeNoise() {
        echo "MEEP, MEEP" . "<br>";
    }
    
}

