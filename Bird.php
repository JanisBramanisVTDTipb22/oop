<?php

class Bird {
    public $name;
    private $age;

    public function __construct($n, $a) {
        $this->name = $n;
        $this->age = $a;
    }

    public function __destruct() {
        echo "<br>" . $this->name . "dead💀" ;
    }

    public function fly() {
        echo "Fly away" . $this->name;
    }
}

