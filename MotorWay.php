<?php
require_once 'HighWay.php';
final class MotorWay extends HighWay {

    public function __construct()
    {
        $this->nbLane = 4;
        $this->maxSpeed = 130;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if ($vehicle instanceof Car || $vehicle instanceof Truck) {
            $this->setCurrentVehicles($vehicle);
        } else {
            echo "Only a car can ride the motorway!";
        }
    }

}