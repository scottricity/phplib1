<?php
//import
include("carlib.php");
use carlib\Carlib;


$newCar = new Carlib();

$newCar->registerCar("blue", "nissan");

echo $newCar->serializeCars();

echo json_encode($GLOBALS);

?>