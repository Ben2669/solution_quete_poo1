<?php
require_once 'HighWay.php';
final class PedestrianWay extends HighWay {

    public function __construct()
    {
        $this->nbLane = 1;
        $this->maxSpeed = 10;
    }

    public function addVehicle(Vehicle $vehicle)
    {
        // TODO: Implement addVehicle() method.
        if ($vehicle instanceof Bike || $vehicle instanceof Skateboard) {
            $this->setCurrentVehicles($vehicle);
        } else {
            echo "This vehicle is not allowed here!";
        }
    }

}
