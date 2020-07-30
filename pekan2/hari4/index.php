<?php
require 'animal.php';
$sheep = new Animal("shaun");

echo $sheep -> getName();
echo $sheep -> getLegs();
echo $sheep -> isColdBlooded();
