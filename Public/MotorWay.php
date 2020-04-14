<?php
require_once "abstractHighWay.php";

final class  MotorWay extends HightWay
{

    CONST AUTH_VEHICLES=["Car","Truck"];

    /**
     * MotorWay constructor.
     */
    public function __construct(int $nbLane=4,int $maxSpeed=130)
    {
        parent::__construct($nbLane,$maxSpeed);

    }

    public function addVehicule(vehicle $vehicle)
    {


           if($vehicle instanceof Car){
               $this->currentVehicles[]=$vehicle;

           }



    }
}

