<?php

require_once 'Bicycle.php';
require_once 'Car.php';

$bike = new Bicycle();
var_dump($bike);


$bike->setColor("blue");
$bike->setCurrentSpeed(0);
var_dump($bike); // then, another dump.

echo $bike->forward();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();
echo '<br> Vitesse du vélo : ' . $bike->getCurrentSpeed() . ' km/h' . '<br>';
echo $bike->brake();

var_dump($bike);
$bike->dump();

$homerCar = new Car("red", 4, "empty as usual");
var_dump($homerCar);

echo $homerCar->start();
echo "<br>";
echo $homerCar->forward();
echo "<br>";
echo $homerCar->brake();
echo "<br>";
echo $homerCar->getColor();
echo "<br>";
echo $homerCar->getNbSeats();
echo"<br>";
echo $homerCar->getEnergy();
