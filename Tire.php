<?php

class Tire {

    public function __construct(
        $size,
        $type,
        $quality) {
            $this->size=$size;
            $this->type=$type;
            $this->qualit=$quality;
       }
    
       public function __destruct() {
        echo "tire dead <br>";
    }
    
}