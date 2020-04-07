<?php
require_once "HighWay.php";


final class  PedestrianWay extends HightWay {



    /**
     * PedestrianWay constructor.
     * @param int $nbLane
     * @param int $maxSpeed
     */
    public function __construct(int $nbLane=2,int $maxSpeed=50)
    {
        parent::__construct($nbLane,$maxSpeed);
    }

    public function addVehicule(vehicle $vehicle)
    {
        if($vehicle instanceof Bicycle){
            $this->currentVehicles[]=$vehicle;
        }

        if($vehicle instanceof Skateboard){
            $this->currentVehicles[]=$vehicle;
        }
    }


}
