<?php
class Animal{
    protected $legs = 2;
    protected $name;
    protected $cold_blooded = false;

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
