<?php

require_once 'Bike.php';
require_once 'Car.php';
require_once 'Truck.php';
require_once 'MotorWay.php';
require_once 'PedestrianWay.php';
require_once 'ResidentialWay.php';
require_once 'Skateboard.php';
/*
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
*/
$car = new Car("blue", 4, "fuel");
$truck = new Truck("black", 4, "diesel", 200);
$motorway = new MotorWay();
$motorway->addVehicle($car);
$motorway->addVehicle($truck);
var_dump($motorway);
$bike = new Bike("red", 1);
$motorway->addVehicle($bike);
$residential_way = new ResidentialWay();
$residential_way->addVehicle($bike);
$residential_way->addVehicle($car);
var_dump($residential_way);
$pedestrian_way = new PedestrianWay();
$skateboard = new Skateboard("purple", 1);
$pedestrian_way->addVehicle($bike);
$pedestrian_way->addVehicle($skateboard);
$pedestrian_way->addVehicle($car);
var_dump($pedestrian_way);

