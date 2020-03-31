<?php

class Car {

    /**
     * @var integer
     */
    private $nbWheels;

    /**
     * @var integer
     */
    private $currentSpeed;

    /**
     * @var string
     */
    private $color;

    /**
     * @var integer
     */
    private $nbSeats;

    /**
     * @var string
     */
    private $energy;

    /**
     * @var integer
     */
    private $energyLevel;

    public function __construct(string $color, int $nbSeats, string $energy)
    {
        $this->color = $color;
        $this->nbSeats = $nbSeats;
        $this->energy = $energy;
    }

    public function forward() {
        return "Going really fast on the highway!";
    }

    public function brake() {
        return "Slowing down cause i can see the cops trying to reach me to arrest me for driving way too fast...";
    }

    public function start() {
        return "Engine is on! Let's hit the road!";
    }

    public function getNbWheels() {
      return $this->nbWheels;
    }

    public function getCurrentSpeed() {
        return $this->currentSpeed;
    }

    public function getColor() {
        return $this->color;
    }

    public function getNbSeats() {
        return $this->nbSeats;
    }

    public function getEnergy() {
        return $this->energy;
    }

    public function getEnergyLevel() {
        return $this->energyLevel;
    }
}
