<?php
// Bicycle.php
$absolutePath=$_SERVER['DOCUMENT_ROOT'];

require_once "vehicle.php";


class Bicycle extends Vehicle implements LightableInterface
{

    //region Code du  pour le cours implementation
    /**
     * @return bool
     */
    public function switchOn(): bool
    {
        if($this->currentSpeed > 10) return true;
        return false;
    }
    /**
     * @return bool
     */
    public function switchOff(): bool
    {
        return false;
    }
    //endregion
}
