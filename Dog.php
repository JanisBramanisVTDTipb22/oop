<?php

include_once "Animal.php";

class Dog extends Animal {

    static function payAttention() {
       echo "woof!";
   }
}