<?php
require_once "MotorWay.php";
require_once "PedestrianWay.php";
require_once "ResidentialWay.php";
require_once  "Car.php";
require_once "Bicycle.php";

echo "--------------------------------------------- <br>";
echo " Ajout d'un objet Car dans MotorWay : <br>";
$tuftuf=new Car("blue",2,100);
$motorWayOne=new MotorWay();
$motorWayOne->addVehicule($tuftuf);
var_dump($motorWayOne);

echo "<br>--------------------------------------------- <br>";
echo " Ajout d'un objet Car dans Pedestrian way : <br>";
$tuftuf=new Car("blue",2,100);
$pedestrianWayOne=new PedestrianWay();
$pedestrianWayOne->addVehicule($tuftuf);
var_dump($pedestrianWayOne);


echo "<br>--------------------------------------------- <br>";
echo " Ajout d'un objet Car dans Residential way : <br>";
$tuftuf=new Car("blue",2,100);
$residentialWayOne=new ResidentialWay();
$residentialWayOne->addVehicule($tuftuf);
var_dump($residentialWayOne);