<?php

require_once 'Vehicle.php';
require_once 'LightableInterface.php';

class Bike extends Vehicle implements LightableInterface
{
    public function switchOff(): bool
    {
        // TODO: Implement switchOff() method.
        return false;
    }

    public function switchOn(): bool
    {
        // TODO: Implement switchOn() method.
        if ($this->getCurrentSpeed() > 10) {
            return true;
        } else {
            return false;
        }
    }
}
