<?php
    require 'frog.php';
    require 'ape.php';

    class Animal {
        public $name, $legs, $cold_blooded;

        public function __construct($name = "name", $legs = 2, $cold_blooded = false){
            $this->name=$name;
            $this->legs=$legs;
            $this->cold_blooded = $cold_blooded;
        }
    };

    //release 0
    $sheep = new Animal("shaun");

    echo $sheep->name ."<br>"; // "shaun"
    echo $sheep->legs ."<br>"; // 2
    echo $sheep->cold_blooded ? "True" : "False" . "<br>"; // false
    
    // NB: Boleh juga menggunakan method get (get_name(), get_legs(), get_cold_blooded())

?>