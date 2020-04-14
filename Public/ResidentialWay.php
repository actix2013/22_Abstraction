<?php
require_once "abstractHighWay.php";

final class  ResidentialWay extends HightWay {

    /**
     * ResidentialWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane=1,int $maxSpeed=10)
    {
        parent::__construct($nbLane,$maxSpeed);
    }

    /**
     * accepte tout type de vehicule
     * @param vehicle $vehicle
     */
    public function addVehicule(vehicle $vehicle)
    {
            $add=false;
            if($vehicle instanceof  Vehicle){
               $add=true;
            }
            if($add) $this->currentVehicles[]=$vehicle;
    }
}

