<?php

require_once 'Bicycle.php';
require_once 'Car.php';
require_once 'Truck.php';

$homerTruck = new Truck("red", 2, "diesel", 200);
var_dump($homerTruck);

$homerTruck->setStockCapacity(300);
var_dump($homerTruck);
$presentStockCapacity = $homerTruck->getStockCapacity();
echo $presentStockCapacity;
$homerTruck->setLoad(200);
var_dump($homerTruck);
echo "<br>";
$presentLoad = $homerTruck->getLoad();
echo $presentLoad;
echo "<br>";
echo $homerTruck->forward();
echo "<br>";
echo $homerTruck->brake();
echo "<br>";
echo $homerTruck->statusCapacity($presentStockCapacity, $presentLoad);
echo "<br>";
$homerTruck->setLoad(400);
$presentLoad = $homerTruck->getLoad();
echo "<br>";
echo $homerTruck->statusCapacity($presentStockCapacity, $presentLoad);
