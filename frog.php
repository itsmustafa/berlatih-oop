<?php
    class Frog extends Animal {
        public $jalan="hop hop";
        public $legs=4;
        public $cold_blooded=true;
        
        public function __construct($name = "kodok") {
            parent::__construct($name, $this->legs, $this->cold_blooded);
        }

        public function jump() {
            return $this->jalan;
        }
    }
?>