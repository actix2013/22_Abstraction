<?php
$absolutePath= $_SERVER['DOCUMENT_ROOT'];
require_once "vehicle.php";

class Car extends Vehicle implements LightableInterface
{



    //region  Code du  pour le chalenge implementation
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        return true;
    }

    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }
    //endregion



    //region Code de la fontion
    private $hasParkBrake=true;
    /**
     * Car constructor.
     * @param string $color
     * @param int $nbSeats
     * @param string $energy
     */
    public function __construct(string $color, int $nbSeats, string $energy)
    {
        parent::__construct($color, $nbSeats);
        parent::setEnergy($energy);
    }

    /**
     * @return bool
     */
    public function isParkBrake(): bool
    {
        return $this->hasParkBrake;
    }

    /**
     * @param bool $hasParkBrake
     * @return Car
     */
    public function setParkBrake(bool $hasParkBrake): Car
    {
        $this->hasParkBrake = $hasParkBrake;
        return $this;
    }


    /**
     * @return bool true if current speed is 0 , by default current speed is created with -1 = stopped
     */
    public function start(): bool
    {
        if($this->hasParkBrake)throw new Exception("[FATAL_ERROR]Try to start wtith ParkBrake on");
        $val=parent::start();
        return $val;
    }
    //endregion

}
