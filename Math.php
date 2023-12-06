<?php 

class Math {
    static function addTwo($add = 4, $add2 = 9){
        return $add + $add2;
    }

    static function factorial($num){
    $factorial = 1;
    for ($i=1; $i <= $num; $i++){
        $factorial = $factorial * $i;
    }
        return $factorial;
    }

    static function sum($a){
        $summa = 0;
    }

    
}