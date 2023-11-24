<?php

class Car {
    public $brand;
    private $mileage;

    public function __construct($n, $a) {
        $this->brand = $n;
        $this->mileage = $a;
    }

    public function __destruct() {
        echo $this->brand . " is dead at mileage " . $this->mileage;
    }

    public function increaseMileage($amount) {
        $this->mileage = $this->mileage+$amount;
    }
}