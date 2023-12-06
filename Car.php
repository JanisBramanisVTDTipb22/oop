<?php

include_once "Vehicle.php";

class Car extends Vehicle {
    static $describe = "aa <br>";

   static function makeNoise() {
       echo "Beep, Beep! <br>";
   }
}