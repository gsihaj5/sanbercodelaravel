<?php
require 'animal.php';
require 'Frog.php';
require 'Ape.php';
$sheep = new Animal("shaun");

echo $sheep -> getName() . "<br>";
echo $sheep -> getLegs() . "<br>";
echo $sheep -> isColdBlooded()."<br>";


$monyet = new Ape("sungokong");

echo $monyet -> getName() . "<br>";

$monyet -> yell();
echo "<br>";

$kodok = new Frog("kodokNgorek");
echo $kodok -> getName() ."<br>";
$kodok -> jump();
