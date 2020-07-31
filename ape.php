<?php
    class Ape extends Animal {
        public $sound = "Auooo";
        public function __construct($name = "Ape") {
            parent::__construct($name);
        }

        public function yell() {
            return $this->sound;
        }
    };
?>