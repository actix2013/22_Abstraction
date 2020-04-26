<?php
//require_once "MotorWay.php";
//require_once "PedestrianWay.php";
//require_once "ResidentialWay.php";
require_once  "Car.php";
require_once "Bicycle.php";

$cariolle=new Car("blue", 3, "Banana");
$bike = new Bicycle("red", 2 );

if($cariolle->switchOn()){echo " lumiere en marchee sur Cariole<br>";}
if($cariolle->switchOff()){echo " lumiere est eteinte Cariole<br>";}

$bike->setCurrentSpeed(5);
if($bike->switchOn()){ echo " le velo roule a plus de 10km/h , lumiere en marche <br>"; }
else {echo " le velo roule a moins de 10km/h , lumiere est eteinte <br>";}
if(!$bike->switchOn()){ echo " la lumiere du  velo est eteinte <br>"; }
$bike->setCurrentSpeed(25);
if($bike->switchOn()){ echo " le velo roule a plus de 10km/h , lumiere en marche <br>"; }


//region ################## Code challenges precedents #################################################################
/*
// surround du  block avec try  catch  , si  l'exception throw est levé , elle est intercepté et on modifie le brake pour ensuite afficher un message
try {
    $cariolle->start();
} catch (Exception $e) {
    $cariolle->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}

// var dump pour controle valeurde brake

*/



/* Code de la quete precedente abstraction
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

*/
//endregion
