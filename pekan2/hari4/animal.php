<?php
class Animal{
    private $legs = 2;
    private $name;
    private $cold_blooded = false;

    public function __construct($name){
        $this -> setName($name);
    }

    public function setName($name){
        $this -> name = $name;
    }

    public function getName(){
        return $this -> name;
    }

    public function getLegs(){
        return $this -> legs;
    }

    public function isColdBlooded(){
        return $this -> cold_blooded;
    }
}
