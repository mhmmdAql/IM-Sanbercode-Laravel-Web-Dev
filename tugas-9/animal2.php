<?php

require("animal.php");

class frog extends animal{
    public function jump(){
    echo "jump : Hop Hop";
    }
}

class Ape extends animal{
    public $legs = 2;
    public function yell(){
    echo "yell : Auooo";
    }
}