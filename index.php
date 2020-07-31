<?php
    require 'animal.php';

    //release 1
    $sungokong = new Ape("kera sakti");
    echo $sungokong->yell()."<br>"; // "Auooo"

    $kodok = new Frog("buduk");
    echo $kodok->jump(); // "hop hop"
?>