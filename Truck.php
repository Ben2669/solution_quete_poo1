<?php

require_once 'Vehicle.php';

class Truck extends Vehicle {

    /**
     * @var string
     */
    private $energy;

    /**
     * @var int
     */
    private $stockCapacity;

    /**
     * @var int
     */
    private $load = 0;

    public function __construct(string $color, int $nbSeats, string $energy, int $stockCapacity)
    {
        parent::__construct($color, $nbSeats);
        $this->energy = $energy;
        $this->stockCapacity = $stockCapacity;
    }
    public function setStockCapacity(int $stockCapacity) : int {
        return $this->stockCapacity = $stockCapacity;
    }

    public function getStockCapacity() : int {
        return $this->stockCapacity;
    }

    public function setLoad(int $load) : int {
        if ($load <= $this->stockCapacity) {
            return $this->load = $load;
        } else {
            return $this->load = $this->stockCapacity;
        }
    }

    public function getLoad() : int {
        return $this->load;
    }

    public function statusCapacity(int $stock, int $chargement) : string {
        if ($stock > $chargement) {
            return "in filling";
        } elseif ($stock == $chargement) {
            return "full";
        }
    }

}
