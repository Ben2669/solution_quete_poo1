<?php
require_once 'Vehicle.php';
abstract class HighWay {

    /**
     * @var array
     */
    protected $currentVehicles = array();

    /**
     * @var int
     */
    protected $nbLane;

    /**
     * @var int
     */
    protected $maxSpeed;

    public function getCurrentVehicles()
    {
        return $this->currentVehicles;
    }

    /**
     * @param object $currentVehicles_bis
     */
    public function setCurrentVehicles($currentVehicles_bis)
    {
        array_push($this->currentVehicles, $currentVehicles_bis);
    }

    /**
     * @return int
     */
    public function getNbLane()
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     */
    public function setNbLane($nbLane)
    {
        $this->nbLane = $nbLane;
    }

    /**
     * @return int
     */
    public function getMaxSpeed()
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     */
    public function setMaxSpeed($maxSpeed)
    {
        $this->maxSpeed = $maxSpeed;
    }

    abstract protected function addVehicle(Vehicle $vehicle);

}
