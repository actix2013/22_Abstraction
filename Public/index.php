<?php
//require_once "MotorWay.php";
//require_once "PedestrianWay.php";
//require_once "ResidentialWay.php";
require_once  "Car.php";
//require_once "Bicycle.php";


// creation de l'objet car , par defaut le frain a main est enclencher , donc l'exeption throw levée .
$cariolle=new Car("blue", 3, "Banana");
var_dump($cariolle);



// surround du  block avec try  catch  , si  l'exception throw est levé , elle est intercepté et on modifie le brake pour ensuite afficher un message
try {
    $cariolle->start();
} catch (Exception $e) {
    $cariolle->setParkBrake(false);
} finally {
    echo "Ma voiture roule comme un donut";
}

// var dump pour controle valeurde brake
var_dump($cariolle);




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