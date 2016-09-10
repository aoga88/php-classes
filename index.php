<?php
require 'car.php';

$mustang = new Car();
$mustang->setColor('red');

print_r("The {$mustang->getColor()} mustang");
