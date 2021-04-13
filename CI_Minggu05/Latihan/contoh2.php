<?php
	include_once("contoh1.php");
	//Method
	$object1 = new miniCar;
	$object2 = new miniCar;
	$object3 = new miniCar;

	$object1 -> setModel('multi-purpose vehicle');
	echo $object1 -> getModel() . '<br />';

	$object2 -> setModel('sedan');
	echo $object2 -> getModel() . '<br />';

	$object3 -> setModel('hatchback');
	echo $object3 -> getModel() . '<br />';
?>