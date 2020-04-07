<?php
require_once "vehicle.php";

abstract class HightWay{

    protected $currentVehicles = array();
    protected $nbLane = 0;
    protected $maxSpeed= 0;

    /**
     * HightWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane, int $maxSpeed)
    {
        $this->nbLane = $nbLane;
        $this->maxSpeed = $maxSpeed;
    }


    /**
     * @return array
     */
    public function getCurrentVehicles(): array
    {
        return $this->currentVehicles;
    }

    /**
     * @param array $currentVehicles
     * @return HightWay
     */
    public function setCurrentVehicles(array $currentVehicles): HightWay
    {
        $this->currentVehicles = $currentVehicles;
        return $this;
    }

    /**
     * @return int
     */
    public function getNbLane(): int
    {
        return $this->nbLane;
    }

    /**
     * @param int $nbLane
     * @return HightWay
     */
    public function setNbLane(int $nbLane): HightWay
    {
        $this->nbLane = $nbLane;
        return $this;
    }

    /**
     * @return int
     */
    public function getMaxSpeed(): int
    {
        return $this->maxSpeed;
    }

    /**
     * @param int $maxSpeed
     * @return HightWay
     */
    public function setMaxSpeed(int $maxSpeed): HightWay
    {
        $this->maxSpeed = $maxSpeed;
        return $this;
    }


    abstract public function addVehicule( vehicle $vehicle);


}